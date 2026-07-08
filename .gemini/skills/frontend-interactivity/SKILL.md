---
name: Frontend Interactivity
description: Skills for implementing client-side interactivity using JavaScript and UI components.
---

# Frontend Interactivity

This skill focuses on the frontend JavaScript development used to enhance the user experience of the `oscss-wp-maruplus3` theme.

## Architecture and Interaction

### 1. Main JavaScript Logic
- All frontend behavior is managed in `assets/js/main.js`.
- This includes event listeners, UI component initializations, and dynamic behavior.

### 2. UI/UX Enhancements
- Interactive components such as carousels, accordion menus, and modals.
- Smooth scrolling and other scrolling-related behaviors.
- Form validation and dynamic submissions.

### 3. Third-Party Libraries
- Integrating and managing external JavaScript libraries when necessary for specialized UI components (e.g., Swiper or Splide for carousels).

## Best Practices
- **Wait for Document Ready**: Ensuring all scripts execute after the DOM content is fully loaded.
- **Modularity**: Organizing JavaScript to be easy to read and maintain.
- **WP Enqueuing**: All scripts must be enqueued via `wp_enqueue_script` in `functions/action.php`.
