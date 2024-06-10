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
        // host: '10.111.4.112',
        // host: '192.168.111.15'
        // host: '192.168.220.215',
        https: false,
    },
});
