import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],

    server: {
        // host: 'localhost',
        host: '192.168.82.215',
        // host: '192.168.111.33',
        https: false,

    },
});
