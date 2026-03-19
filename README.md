# oscss-wp-maruplus3

A custom, high-performance WordPress theme designed for flexibility and modularity.

## Features

- **Responsive Design**: Mobile-first architecture using standard breakpoints.
- **Tailwind CSS Integration**: Styled with Tailwind CSS (v3) for rapid and consistent UI development.
- **Modular PHP Logic**: Organized functions to keep the codebase maintainable and scalable.
- **Custom Post Types (CPT)**: Includes pre-configured CPT for "Services" (`/services/`).
- **Custom Page Templates**: Specialized templates for Company, Services, Recruiting, and Contact pages.
- **Visual Identity & Graphics**: Custom-designed, high-fidelity SVG graphics for core services (Data Strategy, Marketing Ops, and Global Projects) with consistent branding and descriptive flow.
- **AI-Assisted Documentation**: Integrated development skills and workflows documented in the `.agent/` directory.

## File Structure

This theme follows a modular structure for better maintainability:

- **`functions.php`**: Acts as a loader for modular files in `functions/`. **Do not add code directly here.**
- **`functions/`**: Modular logic separation:
  - `action.php`: Theme setup, enqueuing, and `add_action()` hooks.
  - `filter.php`: Content modification and `add_filter()` hooks.
  - `shortcode.php`: Definitions for custom shortcodes.
  - `utility.php`: Reusable helper functions.
- **`template-*.php`**: Custom page-level templates.
- **`assets/`**:
  - `css/src/style.css`: Source CSS for Tailwind compilation.
  - `css/tailwind.css`: Compiled Tailwind styles.
  - `js/main.js`: Primary JavaScript logic.
- **`.agent/skills/`**: Detailed documentation for required development skills (Wordpress, PHP, Tailwind, Docker, etc.).

## Local Development

### Prerequisites

- **Node.js**: v18+ recommended.
- **npm**: Included with Node.js.
- **Docker**: Recommended for consistent containerized environments.

### Setup

1.  **Clone the Repository**:
    ```bash
    git clone [repository-url] wp-content/themes/oscss-wp-maruplus3
    ```
2.  **Install Dependencies**:
    ```bash
    npm install
    ```
3.  **Build Styles**:
    ```bash
    npm run build
    ```
4.  **Watch for Changes**:
    Keep this running during development to automatically recompile CSS:
    ```bash
    npm run watch
    ```

## Docker Development

To ensure environment parity, it is recommended to develop within a Dockerized WordPress instance. Refer to the documented skill in [.agent/skills/docker-environment/SKILL.md](file:///.agent/skills/docker-environment/SKILL.md) for more details.

## Quality Assurance & Testing

Development should prioritize visual accuracy and cross-browser compatibility. Follow the guidelines in [.agent/skills/theme-testing-qa/SKILL.md](file:///.agent/skills/theme-testing-qa/SKILL.md) to perform thorough QA before deployment.

## Contributing

1. Fork the repository.
2. Create a feature branch.
3. Submit a pull request with a detailed description of changes.

## License

This theme is licensed under the [GNU General Public License v2 or later](http://www.gnu.org/licenses/gpl-2.0.html).
