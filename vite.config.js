import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: [ 'resources/js/app.jsx',
            'resources/sass/main.scss',
            'resources/js/app.js',
        ],
            refresh: true, 
=======
            input: [
		 'resources/js/app.jsx',
		'resources/sass/main.scss',
		'resources/js/app.js',
		],
            refresh: true,
>>>>>>> develop
        }),
        react(),
    ],
});
