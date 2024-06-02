import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/sass/app.scss'
            ],
            refresh: true,
        }),
    ],
    server: {
        // host: 'localhost',
        // host: '10.111.4.112',
        host: '192.168.220.215',
    }
});
