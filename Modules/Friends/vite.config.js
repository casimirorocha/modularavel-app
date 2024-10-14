import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export const paths = [
	"Modules/Friends/resources/assets/sass/app.scss",
	"Modules/Friends/resources/assets/js/app.js",
];

export default defineConfig({
	plugins: [
		laravel({
			input: paths,
			refresh: true,
		}),
	],
});
