import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
            // 'resources/assets/js/app.js',
            // 'resources/assets/sass/app.scss',

        ]),
        
    ],
     server: { 
        https: true, 
        host: 'localhost', 
    }, 
});
