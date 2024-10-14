import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export const paths = [
	"Modules/Modularavel/resources/assets/sass/app.scss",
	"Modules/Modularavel/resources/assets/js/app.js",
];

export default defineConfig({
	plugins: [
		laravel({
			input: paths,
			refresh: true,
		}),
	],
});
