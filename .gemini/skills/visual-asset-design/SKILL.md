---
name: Visual Asset Design
description: Skills for creating and maintaining high-fidelity, descriptive SVG assets for core services and visual identity.
---

# Visual Asset Design

Designing and maintaining the visual heart of the site through scalable, descriptive vector graphics.

## Core Principles

### 1. Descriptive Storytelling
Each graphic must go beyond abstract art to explain a process:
- **Data Strategy**: Visualizing the flow from Raw Data to Database to Dashboard.
- **Marketing Ops**: Showing the interaction between Hubspot (CRM), Channels, and Automation.
- **Global Projects**: Illustrating the Localization -> Strategy Hub (JP) -> Globalization (EN/Global) flow.

### 2. Brand Consistency
- Use a unified color palette:
  - **Primary**: `#2D1B4D` (Dark Purple) for strokes and primary text.
  - **Highlight**: `#D4AF37` (Gold) for hubs, key nodes, or Japan.
  - **Background**: `#F0E7F5` (Soft Lavender) for overall containers.
  - **Neutral**: White and low-opacity shades for secondary landmasses/nodes.
- Consistent typography (Sans-serif, clean, bold headers).

### 3. High Fidelity & Animation
- Use `SVG` for perfect scaling across devices.
- Include subtle micro-animations (e.g., `<animate>` for dashed lines) to represent data/service flow.
- Filter effects like `feGaussianBlur` for soft shadows to add depth.

### 4. Semantic Hierarchy
- Use `<g>` groups to organize logical parts of the graphic.
- Clear labeling in both English (headers) and Japanese (footers) to ensure multi-market clarity.

## Maintenance
When updating SVG assets in `assets/img/`, ensure that:
- Coordinates stay within the `viewBox`.
- Animations are efficient and not distracting.
- The visual hierarchy (what is the HUB vs. what is a NODE) is immediately obvious.
