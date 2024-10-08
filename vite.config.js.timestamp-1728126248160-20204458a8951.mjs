// vite.config.js
import { defineConfig } from "file:///home/numbers/code/School-Management/node_modules/vite/dist/node/index.js";
import laravel from "file:///home/numbers/code/School-Management/node_modules/laravel-vite-plugin/dist/index.js";
import autoprefixer from "file:///home/numbers/code/School-Management/node_modules/autoprefixer/lib/autoprefixer.js";
import tailwindcss from "file:///home/numbers/code/School-Management/node_modules/tailwindcss/lib/index.js";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/css/app.css",
        "resources/js/app.js"
      ],
      refresh: true
    })
  ],
  css: {
    postcss: {
      plugins: [
        tailwindcss(),
        autoprefixer()
      ]
    }
  },
  server: {
    hmr: {
      host: "localhost"
    }
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCIvaG9tZS9udW1iZXJzL2NvZGUvU2Nob29sLU1hbmFnZW1lbnRcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfZmlsZW5hbWUgPSBcIi9ob21lL251bWJlcnMvY29kZS9TY2hvb2wtTWFuYWdlbWVudC92aXRlLmNvbmZpZy5qc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9pbXBvcnRfbWV0YV91cmwgPSBcImZpbGU6Ly8vaG9tZS9udW1iZXJzL2NvZGUvU2Nob29sLU1hbmFnZW1lbnQvdml0ZS5jb25maWcuanNcIjtpbXBvcnQgeyBkZWZpbmVDb25maWcgfSBmcm9tICd2aXRlJztcbmltcG9ydCBsYXJhdmVsIGZyb20gJ2xhcmF2ZWwtdml0ZS1wbHVnaW4nO1xuaW1wb3J0IGF1dG9wcmVmaXhlciBmcm9tICdhdXRvcHJlZml4ZXInO1xuaW1wb3J0IHRhaWx3aW5kY3NzIGZyb20gJ3RhaWx3aW5kY3NzJztcblxuZXhwb3J0IGRlZmF1bHQgZGVmaW5lQ29uZmlnKHtcbiAgICBwbHVnaW5zOiBbXG4gICAgICAgIGxhcmF2ZWwoe1xuICAgICAgICAgICAgaW5wdXQ6IFtcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Nzcy9hcHAuY3NzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2FwcC5qcycsXG4gICAgICAgICAgICBdLFxuICAgICAgICAgICAgcmVmcmVzaDogdHJ1ZSxcbiAgICAgICAgfSksXG4gICAgXSxcbiAgICBjc3M6IHtcbiAgICAgICAgcG9zdGNzczoge1xuICAgICAgICAgICAgcGx1Z2luczogW1xuICAgICAgICAgICAgICAgIHRhaWx3aW5kY3NzKCksXG4gICAgICAgICAgICAgICAgYXV0b3ByZWZpeGVyKCksXG4gICAgICAgICAgICBdLFxuICAgICAgICB9LFxuICAgIH0sXG4gICAgc2VydmVyOiB7XG4gICAgICAgIGhtcjoge1xuICAgICAgICAgICAgaG9zdDogJ2xvY2FsaG9zdCcsXG4gICAgICAgIH0sXG4gICAgfSxcbn0pO1xuXG4iXSwKICAibWFwcGluZ3MiOiAiO0FBQThSLFNBQVMsb0JBQW9CO0FBQzNULE9BQU8sYUFBYTtBQUNwQixPQUFPLGtCQUFrQjtBQUN6QixPQUFPLGlCQUFpQjtBQUV4QixJQUFPLHNCQUFRLGFBQWE7QUFBQSxFQUN4QixTQUFTO0FBQUEsSUFDTCxRQUFRO0FBQUEsTUFDSixPQUFPO0FBQUEsUUFDSDtBQUFBLFFBQ0E7QUFBQSxNQUNKO0FBQUEsTUFDQSxTQUFTO0FBQUEsSUFDYixDQUFDO0FBQUEsRUFDTDtBQUFBLEVBQ0EsS0FBSztBQUFBLElBQ0QsU0FBUztBQUFBLE1BQ0wsU0FBUztBQUFBLFFBQ0wsWUFBWTtBQUFBLFFBQ1osYUFBYTtBQUFBLE1BQ2pCO0FBQUEsSUFDSjtBQUFBLEVBQ0o7QUFBQSxFQUNBLFFBQVE7QUFBQSxJQUNKLEtBQUs7QUFBQSxNQUNELE1BQU07QUFBQSxJQUNWO0FBQUEsRUFDSjtBQUNKLENBQUM7IiwKICAibmFtZXMiOiBbXQp9Cg==
