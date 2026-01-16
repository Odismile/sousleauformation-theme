import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
  root: path.resolve(__dirname, 'assets/src'),
  build: {
    outDir: path.resolve(__dirname, 'assets/dist'),
    emptyOutDir: true,
    rollupOptions: {
      input: path.resolve(__dirname, 'assets/src/js/app.js'),
      output: {
        entryFileNames: 'app.js',      // JS principal
        chunkFileNames: '[name].js',   // chunks JS
        assetFileNames: '[name].[ext]' // CSS et autres assets
      }
    }
  }
});
