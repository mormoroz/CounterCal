import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/script.js', 'resources/js/app.js','resources/css/welcome.css','resources/sass/app.scss',
                'resources/css/style.css',
                'resources/jquery/jquery.min.js',
                'resources/jquery/jquery-ui.min.js',
                'resources/js/main.js',],
            refresh: true,
        }),
    ],
});
