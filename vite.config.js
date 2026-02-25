import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        host: "0.0.0.0", // Mengizinkan akses dari semua perangkat di jaringan yang sama
        hmr: {
            host: "192.168.1.11", // Ganti dengan IP laptop kamu yang tadi (Langkah 3) 🛠️
        },
    },
});
