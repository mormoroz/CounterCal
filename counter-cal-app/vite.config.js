import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/script.js', 'resources/js/app.js','resources/css/welcome.css'],
            refresh: true,
        }),
    ],
});
