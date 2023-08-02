import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
    server: {
        watch: {
            ignored: [
                '**/vendor/**',
            ],
        },
    },
    plugins: [
        laravel({
            hotFile: 'public/hot',
            buildDirectory:'vendor/rickodev/pos',
            input: [
                'resources/dist/css/pos.css',
                'resources/dist/js/pos.js',
            ],
            refresh: true,

        }),
    ],
})