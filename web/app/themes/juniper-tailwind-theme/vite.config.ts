import { resolve } from "path";

export default {
  root: "src",
  build: {
    outDir: "dist",
    emptyOutDir: true,
    rollupOptions: {
      input: {
        main: resolve(__dirname, "src/js/_app.js"),
        style: resolve(__dirname, "src/css/_app.css"),
      },
      output: {
        entryFileNames: "src/js/[name].js",
        chunkFileNames: "src/js/[name].js",
        assetFileNames: "src/css/[name][extname]",
      },
    },
  },
  server: {
    watch: {
      usePolling: true,
    },
    strictPort: true,
  },
};