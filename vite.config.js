import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
import react from '@vitejs/plugin-react';
=======
>>>>>>> 3a2808e (First Commit)

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: 'resources/js/app.jsx',
            refresh: true,
        }),
        react(),
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
>>>>>>> 3a2808e (First Commit)
    ],
});
