/** @type {import('tailwindcss').Config} */
import defaultTheme from "tailwindcss/defaultTheme";

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Work Sans", ...defaultTheme.fontFamily.sans],
                // Add your theme's fonts here if different from sans
                // heading: ['Your Heading Font', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // ... existing code ...
            },
            animation: {
                // ... existing code ...
            },
            keyframes: {
                // ... existing code ...
            },
        },
    },
    plugins: [],
};
// Remember: Install Work Sans via npm (npm install @fontsource/work-sans) or import via CDN in your CSS or HTML.
