import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/styles.scss', 'resources/sass/reset.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
