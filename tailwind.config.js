/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*"],
  theme: {
    extend: {
      backgroundImage: {
        'hero-pattern': "url('/img/admin_bg1.jpg')",
        'admin-bg': "url('/img/bg-admin.jpeg')",
      },
    },
  },
  plugins: [],
}

