# oscss-wp-maruplus3

A custom WordPress theme designed for flexibility and performance.

## Features

- **Responsive Design**: Fully responsive and mobile-friendly.
- **Tailwind CSS Integration**: Styled using Tailwind CSS for rapid development.
- **Customizable**: Easily extendable with custom actions, filters, and shortcodes.
- **Favicon Support**: Includes a full set of favicons for various devices.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/Oscarschair/oscss-wp-maruplus3.git
   ```
2. Navigate to the theme directory:
   ```bash
   cd oscss-wp-maruplus3
   ```
3. Install dependencies:
   ```bash
   npm install
   ```
4. Build Tailwind CSS (if required):
   ```bash
   npx tailwindcss build
   ```
5. Activate the theme in your WordPress admin panel.

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

- `header.php`, `footer.php`, `index.php`, etc.: Standard WordPress template files.

## Contributing

Feel free to fork the repository and submit pull requests. Contributions are welcome!

## License

This theme is licensed under the [GNU General Public License v2 or later](http://www.gnu.org/licenses/gpl-2.0.html).
