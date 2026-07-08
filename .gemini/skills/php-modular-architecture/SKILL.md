---
name: PHP Modular Architecture
description: Skills for maintaining the organized PHP logic structure under the functions/ directory.
---

# PHP Modular Architecture

This skill defines the organizational standards for PHP logic within the `oscss-wp-maruplus3` theme.

## Modular Function Structure

To ensure maintainability, all theme logic is separated into specific files in the `functions/` directory rather than polluting `functions.php`.

### 1. `functions/action.php`
- Handles all `add_action()` hooks.
- Theme setup functions (e.g., `after_setup_theme`).
- Script and style enqueuing (`wp_enqueue_scripts`).

### 2. `functions/filter.php`
- Manages all `add_filter()` hooks.
- Modifying standard WordPress behaviors (e.g., `excerpt_length`, `the_content`).

### 3. `functions/shortcode.php`
- Defines all custom `add_shortcode()` functions for the theme.

### 4. `functions/utility.php`
- For reusable, theme-specific helper and utility functions used throughout the codebase.

## Standard Practices
- **Isolation**: Each file should focus purely on its specific type of logic.
- **Documentation**: All functions and filters should be documented with comments explaining their purpose.
- **Clean Code**: Adhering to WordPress coding standards and keeping functions focused.
