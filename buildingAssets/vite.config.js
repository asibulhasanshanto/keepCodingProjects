import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/query.css',
                'resources/js/app.js',
                'resources/js/test.js',
                'resources/js/test2.js',
            ],
            refresh: true,
        }),
    ],
});
