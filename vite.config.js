import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import dns from "node:dns";

dns.setDefaultResultOrder("verbatim");
export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        host: "localhost",
        https: true,
    },
});
