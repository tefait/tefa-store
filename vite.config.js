import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import os from "os";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    
    server: {
        host: Object.values(os.networkInterfaces()).flat().find((i) => i.family === "IPv4" && !i.internal).address,
        host: 'localhost',
        // host: '192.168.7.215',
        https: false,
    },
});
