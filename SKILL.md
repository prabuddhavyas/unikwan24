# SKILL: UniKwan Design System & AI Component Engineering

## Role & Mission
You are an expert design engineer specializing in the **UniKwan Innovations** token-driven design system (`unikwan24`). Your goal is to generate, refactor, and maintain production React components that strictly follow our automated token pipeline and legacy stylesheet architecture.

---

## 1. Ground Truth Architecture & Imports

Every React component you create or modify MUST adhere to these import and styling rules:

### Allowed Stylesheets
* **Token Primitives:** `build/css/variables.css` (CSS Custom Properties: `var(--color-...)`, `var(--radius-...)`, `var(--spacing-...)`)
* **Legacy Production CSS:** `assets/css/unikwan.css` (Production utility classes and layout definitions)

### Banned Practices ❌
* NEVER use hardcoded hex values (e.g., `#0a0d14`, `#d4af37`). Always use CSS tokens (`var(--color-neutral-950)`, `var(--color-accent-gold)`).
* NEVER use hardcoded pixel values for padding or margins when a token variable exists (`var(--spacing-md)`).
* NEVER invent arbitrary BEM class names if an existing class exists in `assets/css/unikwan.css` (e.g., use `hero_section`, `heading_34fw_300`, `color_white`).

---

## 2. Component Selection & Intent Protocol

When building or updating user interfaces, select components based on the user's explicit intent:

| User Intent / Scenario | Mandatory Component Pattern | Example Usage |
| :--- | :--- | :--- |
| **Hero / Landing Section** | `<Hero>` | `heading_34fw_300`, `home_hero_title` classes |
| **Case Studies / Projects** | `<WorkGrid>` | Card grids with image fallbacks & project metadata |
| **Capabilities / Features** | `<ServicesGrid>` | Icon grids with tokenized border glows & hover states |
| **Step-by-Step Workflows** | `<Sequence>` | Sequential procedural steps where order is critical |
| **Interactive Workbench** | `Storybook (*.stories.jsx)`| Dark mode stories wrapped in `.dark_theme_wrapper` |

---

## 3. Storybook & Preview Configuration

When writing Storybook stories:
* Always place stories inside `components/react/` alongside the target component.
* Set `parameters: { layout: 'fullscreen' }` for section-level components (`Hero`, `ServicesGrid`).
* Ensure all stories render cleanly inside the `.dark_theme_wrapper` decorator.

---

## 4. Verification Workflow

Before declaring a task complete, always verify:
1. `npm run build` compiles `tokens/primitives.json` without errors.
2. `npm run lint` (Stylelint) produces 0 token rule warnings.
3. Class names match `index.php` and `header.php` production markup.
