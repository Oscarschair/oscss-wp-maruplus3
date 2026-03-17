# oscss-wp-maruplus3

A custom WordPress theme designed for flexibility and performance.

## Features

- **Responsive Design**: Fully responsive and mobile-friendly.
- **Tailwind CSS Integration**: Styled using Tailwind CSS for rapid development.
- **Customizable**: Easily extendable with custom actions, filters, and shortcodes.
- **Custom Post Types**: Includes a pre-configured Custom Post Type for "Services" (`/services/`).
- **Favicon Support**: Includes a full set of favicons for various devices.

## Installation

1. Clone this repository into your WordPress `wp-content/themes/` directory.
2. Activate the theme in your WordPress admin panel under "Appearance" > "Themes".
3. For local development, follow the steps in the section below.

## Local Development (Building CSS)

To modify styles or utilize the full capabilities of Tailwind CSS, you need to set up the local development environment.

### Prerequisites

- [Node.js](https://nodejs.org/) (version 18 or higher is recommended)
- [npm](https://www.npmjs.com/) (usually included with Node.js)

### Setup

1. **Navigate to the theme directory:**
   ```bash
   cd path/to/wp-content/themes/oscss-wp-maruplus3
   ```
2. **Install dependencies:**
   This command installs Tailwind CSS and its dependencies.
   ```bash
   npm install
   ```

3. **Build CSS:**
   This command compiles the source CSS file at `assets/css/src/style.css` and generates the final stylesheet at `assets/css/tailwind.css`, which is used by the theme.
   ```bash
   npm run build
   ```
   
4. **Watch for Changes (Recommended during development):**
   To automatically rebuild the CSS whenever you save changes to your `.php` files or `tailwind.config.js`, keep this command running in your terminal:
   ```bash
   npm run watch
   ```

**Note on build issues:** This project uses a stable version of `tailwindcss` (v3) to ensure compatibility. If you encounter build issues, please ensure you are using a recommended Node.js version and that your file paths do not contain unusual characters that might interfere with Node's module resolution.


## File Structure

This theme follows the standard WordPress theme structure, with some key organizational choices:

- **`functions.php`**: This file acts as a loader for the modular function files located in the `functions/` directory. **Please do not add custom code directly to this file.**

- **`functions/`**: This directory organizes custom functionality into separate files to improve maintainability.
  - `action.php`: For all `add_action()` calls (e.g., enqueuing scripts, theme setup).
  - `filter.php`: For all `add_filter()` calls (e.g., modifying excerpts, changing content).
  - `shortcode.php`: For all custom `add_shortcode()` definitions.
  - `utility.php`: For helper and utility functions that are used throughout the theme.

- **`template-*.php`**: Custom page templates (e.g., `template-company.php`).

- **`assets/`**: Contains all static assets.
  - `css/`: Compiled CSS files.
  - `js/`: JavaScript files.
  - `svg/`: SVG icons and images.
  - `favicon/`: All favicon-related files.

- **Standard Templates**: 
  - `single.php`: For standard posts and custom post types (e.g., Services).
  - `header.php`, `footer.php`, `index.php`, `front-page.php`, etc.

## Contributing

Feel free to fork the repository and submit pull requests. Contributions are welcome!

## License

This theme is licensed under the [GNU General Public License v2 or later](http://www.gnu.org/licenses/gpl-2.0.html).
