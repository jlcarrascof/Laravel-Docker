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
        host: 'localhost',  // Asegúrate de que Vite se sirva desde localhost
        port: 5173,  // Puerto por defecto de Vite
        hmr: {
            host: 'localhost',  // Asegúrate de usar localhost para HMR
        },
        cors: true,  // Habilitar CORS en el servidor de Vite
    },
});
