import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export const paths = [
	"Modules/Auth/resources/assets/css/auth-module.css",
	"Modules/Auth/resources/assets/js/auth-module.js",
];

export default defineConfig({
	plugins: [
		laravel({
			input: paths,
			refresh: true,
		}),
	],
});
