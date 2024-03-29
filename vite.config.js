import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/pages/home.js',
            ],
            refresh: [
                'resources/less/app.less',
                'resources/js/**',
                'resources/views/**',
                'routes/web.php',
            ],
        }),
    ],
});
