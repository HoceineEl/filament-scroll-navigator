import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/filament-scroll-navigator.css',
                'resources/js/filament-scroll-navigator.js'
            ],
            publicDirectory: 'dist',
        }),
    ],
    build: {
        outDir: 'dist',
        rollupOptions: {
            output: {
                assetFileNames: (assetInfo) => {
                    let extType = assetInfo.name.split('.').at(1);
                    if (/css/.test(extType)) {
                        extType = 'css';
                    }
                    return `assets/${extType}/[name][extname]`;
                },
                entryFileNames: 'assets/js/[name].js',
            },
        },
    },
});