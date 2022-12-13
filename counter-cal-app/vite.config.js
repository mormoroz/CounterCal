import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/home.scss',
                'resources/jsx/home.jsx',
                'resources/js/app.js',
                'resources/js/script.js',
                'resources/js/products.index.js',
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/css/welcome.css',
                'resources/css/login.css'
            ],

            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});
