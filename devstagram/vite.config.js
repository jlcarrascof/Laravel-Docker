import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',  // Cambia esto a '0.0.0.0' si lo ejecutas desde Docker
        port: 5173,
        cors: true,  // Habilita CORS en el servidor de Vite
        hmr: {
            host: '0.0.0.0',
        },
    },
});
