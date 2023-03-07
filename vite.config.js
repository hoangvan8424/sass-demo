import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/userApp.scss',
                'resources/js/userApp.js',
            ],
            refresh: true,
        }),
    ],
});
