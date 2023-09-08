import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
              //  'resources/css/mystyle.css'
            ],
            refresh: true,
        }),
    ],
});
