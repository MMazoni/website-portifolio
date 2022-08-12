import { defineConfig } from "vite";
import path from "path";

export default defineConfig({
  root: "src",
  base: process.env.APP_ENV === "development" ? "/" : "/public/dist/",

  build: {
    outDir: "../public/dist",
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: path.resolve(__dirname, "src/app.js"),
    },
  },

  server: {
    strictPort: true,
    port: 5133,
  },
});
