// vite.config.js
import { defineConfig } from "file:///home/user/tefa-store/node_modules/vite/dist/node/index.js";
import laravel from "file:///home/user/tefa-store/node_modules/laravel-vite-plugin/dist/index.js";
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
  server: {
    // host: 'localhost',
    host: "9000-idx-tefa-store-1717987492351.cluster-nx3nmmkbnfe54q3dd4pfbgilpc.cloudworkstations.dev"
    // host: '10.111.4.112',
    // host: '192.168.111.15'
    // host: '192.168.220.215',
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCIvaG9tZS91c2VyL3RlZmEtc3RvcmVcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfZmlsZW5hbWUgPSBcIi9ob21lL3VzZXIvdGVmYS1zdG9yZS92aXRlLmNvbmZpZy5qc1wiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9pbXBvcnRfbWV0YV91cmwgPSBcImZpbGU6Ly8vaG9tZS91c2VyL3RlZmEtc3RvcmUvdml0ZS5jb25maWcuanNcIjtpbXBvcnQgeyBkZWZpbmVDb25maWcgfSBmcm9tICd2aXRlJztcbmltcG9ydCBsYXJhdmVsIGZyb20gJ2xhcmF2ZWwtdml0ZS1wbHVnaW4nO1xuXG5leHBvcnQgZGVmYXVsdCBkZWZpbmVDb25maWcoe1xuICAgIHBsdWdpbnM6IFtcbiAgICAgICAgbGFyYXZlbCh7XG4gICAgICAgICAgICBpbnB1dDogW1xuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvY3NzL2FwcC5jc3MnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvanMvYXBwLmpzJyxcbiAgICAgICAgICAgIF0sXG4gICAgICAgICAgICByZWZyZXNoOiB0cnVlLFxuICAgICAgICB9KSxcbiAgICBdLFxuICAgIHNlcnZlcjoge1xuICAgICAgICAvLyBob3N0OiAnbG9jYWxob3N0JyxcbiAgICAgICAgaG9zdDogJzkwMDAtaWR4LXRlZmEtc3RvcmUtMTcxNzk4NzQ5MjM1MS5jbHVzdGVyLW54M25tbWtibmZlNTRxM2RkNHBmYmdpbHBjLmNsb3Vkd29ya3N0YXRpb25zLmRldicsXG4gICAgICAgIC8vIGhvc3Q6ICcxMC4xMTEuNC4xMTInLFxuICAgICAgICAvLyBob3N0OiAnMTkyLjE2OC4xMTEuMTUnXG4gICAgICAgIC8vIGhvc3Q6ICcxOTIuMTY4LjIyMC4yMTUnLFxuICAgIH1cbn0pO1xuIl0sCiAgIm1hcHBpbmdzIjogIjtBQUFpUCxTQUFTLG9CQUFvQjtBQUM5USxPQUFPLGFBQWE7QUFFcEIsSUFBTyxzQkFBUSxhQUFhO0FBQUEsRUFDeEIsU0FBUztBQUFBLElBQ0wsUUFBUTtBQUFBLE1BQ0osT0FBTztBQUFBLFFBQ0g7QUFBQSxRQUNBO0FBQUEsTUFDSjtBQUFBLE1BQ0EsU0FBUztBQUFBLElBQ2IsQ0FBQztBQUFBLEVBQ0w7QUFBQSxFQUNBLFFBQVE7QUFBQTtBQUFBLElBRUosTUFBTTtBQUFBO0FBQUE7QUFBQTtBQUFBLEVBSVY7QUFDSixDQUFDOyIsCiAgIm5hbWVzIjogW10KfQo=
