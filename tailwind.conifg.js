import { plugin } from "postcss";

/** @type {import {'tailwindcss'}.Config} */
export default {
  darkMode: 'class', // or 'media' or 'class'
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue*",
    "./node_modules/flowbite/**/*.js*",

  ],
  theme : {
    extends: {
      colors: {
        primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
      }},
      fontFamily: {
        'body': [
      'Inter', 
      'ui-sans-serif', 
      'system-ui', 
      '-apple-system', 
      'system-ui', 
      'Segoe UI', 
      'Roboto', 
      'Helvetica Neue', 
      'Arial', 
      'Noto Sans', 
      'sans-serif', 
      'Apple Color Emoji', 
      'Segoe UI Emoji', 
      'Segoe UI Symbol', 
      'Noto Color Emoji'
      ],
        'sans': [
      'Inter', 
      'ui-sans-serif', 
      'system-ui', 
      '-apple-system', 
      'system-ui', 
      'Segoe UI', 
      'Roboto', 
      'Helvetica Neue', 
      'Arial', 
      'Noto Sans', 
      'sans-serif', 
      'Apple Color Emoji', 
      'Segoe UI Emoji', 
      'Segoe UI Symbol', 
      'Noto Color Emoji'
      ]
      }
  },
  // plugin: [
  //   require("flowbite/plugin")
  // ],
  plugins: [
  require('flowbite/plugin')
],
  safelist: [
    "bg-blue-500",
    "bg-red-700",
    "bg-yellow-900",
    "bg-purple-500",
    "bg-green-700",
    "bg-orange-900",
  ],

}
