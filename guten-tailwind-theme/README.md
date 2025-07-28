# Guten Tailwind Theme

This minimal WordPress theme is built for the block editor (Gutenberg) and uses Tailwind CSS for styling. No core block patterns are registered.

## Setup

1. Install Node dependencies:
   ```bash
   npm install
   ```
2. Build the CSS:
   ```bash
   npm run build
   ```
   Use `npm run watch` during development to rebuild on changes.
3. Copy the theme folder into `wp-content/themes/` of your WordPress installation and activate it.

## Tailwind configuration

Tailwind scans PHP templates in this theme to generate the final CSS. Adjust `tailwind.config.js` if you add custom template folders.
