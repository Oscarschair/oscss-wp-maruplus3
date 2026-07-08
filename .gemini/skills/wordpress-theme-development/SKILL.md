---
name: WordPress Theme Development
description: Core skills for building and maintaining WordPress themes with template hierarchy, hooks, and CPTs.
---

# WordPress Theme Development

This skill focuses on the core principles of designing and extending WordPress themes using standard practices and custom templates.

## Core Concepts

### 1. Template Hierarchy
Understanding how WordPress resolves template files:
- `front-page.php`: The custom homepage.
- `single.php`: Standard post and custom post type detail view.
- `template-*.php`: Custom page templates (e.g., `template-company.php`).
- `header.php` and `footer.php`: Global theme components.

### 2. Hooks System (Actions and Filters)
Proficient use of the WordPress hook system to inject logic:
- `add_action()`: To trigger custom behaviors like enqueuing scripts or setting up theme features.
- `add_filter()`: To modify data, such as changing excerpts or altering content before it's rendered.

### 3. Custom Post Types (CPT)
Managing and displaying structured content:
- Registering custom post types like `service`.
- Handling CPT-specific templates.
- Querying CPT data using `WP_Query`.

### 4. Responsive Page Templates
Developing templates that prioritize mobile-first design using custom layouts and semantic HTML.
