/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {
            backgroundColor: {
                "g-wood-gold": "#c7b299",
                "g-dark-blue": "#465266",
                "g-yellow": "#e7ce7e",
                "g-purple": "#b492ae",
                "g-green": "#678f93",
                "g-cream": "#e2c0b3",
            },
            fontFamily: {
                MuseoSans: "MuseoSans",
                montserat: "Montserrat, sans-serif",
                dm: "'DM Mono', monospace",
            },
        },
    },
    plugins: [],
};
