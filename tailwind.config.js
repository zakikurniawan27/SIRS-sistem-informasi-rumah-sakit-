/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                lobster: ["Lobster"],
                playWriteIN: ["Playwrite IN"],
                pacifito: ["Pacifico"],
                roboto: ["Roboto"],
                kanit: ["Kanit"],
            },
            backgroundImage: {
                rsuddayakuraja:
                    "url('https://sintesanews.id/wp-content/uploads/2024/04/WhatsApp-Image-2022-07-16-at-14.29.32.jpeg')",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
