---
name: Tailwind CSS Styling
description: Skills for using Tailwind CSS v3 effectively for theme development and design.
---

# Tailwind CSS Styling

This skill covers the integration and use of Tailwind CSS within the `oscss-wp-maruplus3` theme.

## Architecture and Build

### 1. Utility-First Styling
The theme uses Tailwind CSS (v3) utility classes for layout, typography, and UI components.
- Custom styles are written in `assets/css/src/style.css`.
- Compiled styling resides in `assets/css/tailwind.css`.

### 2. Build Process
- `npm run build`: Manually compile CSS for production.
- `npm run watch`: Automatically rebuild CSS whenever `.php` files or the source CSS file are modified.

### 3. Tailwind Configuration
Modifying `tailwind.config.js` to define:
- Content paths for scanning utility classes.
- Theme overrides (colors, spacing, etc.).
- Custom Tailwind plugins.

## Best Practices
- **Consistency**: Use Tailwind utility classes whenever possible instead of custom CSS.
- **Responsive-First**: Design mobile-first using Tailwind's `sm:`, `md:`, `lg:` and `xl:` breakpoints.
- **Extraction**: When components become overly repetitive, use `@apply` in the source CSS file or define them with Tailwind utility classes in PHP.
