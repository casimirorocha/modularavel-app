import fs from 'fs/promises';

async function collectModuleAssetsPaths(paths, modulesPath) {
	try {
		// Read module_statuses.json
		const moduleStatusesContent = await fs.readFile('./modules_statuses.json', 'utf-8');

		const moduleStatuses = JSON.parse(moduleStatusesContent);

		// Read module directories
		const moduleDirectories = await fs.readdir(modulesPath);

		for (const moduleDir of moduleDirectories) {
			if (moduleDir === '.DS_Store') {
				// Skip .DS_Store directory
				continue;
			}

			// Check if the module is enabled (status is true)
			if (moduleStatuses[moduleDir] === true) {
				console.log(`Module Status: ${moduleDir} = ${moduleStatuses[moduleDir] === true ? 'Enabled' : 'Disabled'}`)

				const viteConfigPath = `${modulesPath}/${moduleDir}/vite.config.js`;

				const stat = await fs.stat(viteConfigPath);

				if (stat.isFile()) {
					// Import the module-specific Vite configuration
					const moduleConfig = await import(viteConfigPath);

					console.log(moduleConfig)

					if (moduleConfig.paths && Array.isArray(moduleConfig.paths)) {
						paths.push(...moduleConfig.paths);
					}
				}
			}
		}
	} catch (error) {
		console.error(`Error reading module statuses or module configurations: ${error}`);
	}

	return paths;
}

export default collectModuleAssetsPaths;
