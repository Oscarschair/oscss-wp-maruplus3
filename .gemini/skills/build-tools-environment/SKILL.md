---
name: Build Tools and Environment
description: Skills for managing the local development environment and Tailwind CLI build tools.
---

# Build Tools and Environment

This skill focuses on the tools and environment necessary for developing the `oscss-wp-maruplus3` theme.

## Environment Requirements

### 1. Node.js and npm
- Required for managing project dependencies and running the Tailwind CLI scripts.
- `package.json` contains scripts like `build` and `watch`.

### 2. Local WordPress Environment
- The theme must be installed in a WordPress instance's `wp-content/themes/` directory for testing and development.
- Knowledge of local development servers (e.g., Local by Flywheel, XAMPP, or Docker).

### 3. Git Version Control
- Managing the project's source code using Git.
- Understanding how to fork, clone, and submit pull requests.

## Developer Workflow
- **Setup**: Run `npm install` after cloning to install Tailwind CSS.
- **Build**: Use `npm run watch` (for development) and `npm run build` (for final production builds).
- **Organization**: Ensure all changes follow the theme's file structure and naming conventions.
