## Repo: vue-starter — Copilot instructions

Purpose: give a small, focused set of rules to help AI agents be productive in this Vue 3 + Vite project.

- Project type: Vue 3 application scaffolded for Vite. Entry: `src/main.js`. Router: `src/router/index.js`.
- Build/dev commands (from `package.json`):
  - Install: `npm install`
  - Dev server: `npm run dev` (runs `vite`)
  - Build production: `npm run build` (runs `vite build`)
  - Preview production build: `npm run preview`

- Architecture notes (what an agent must know):
  - App bootstrap: `src/main.js` mounts `App.vue` and registers the router and global components (FontAwesome).
  - Layout pattern: `App.vue` always renders `Header` and `Footer` around `router-view`. Work inside the component tree under `src/components`, `src/HomeComponents`, and `src/AboutComponents`.
  - Routes live in `src/router/index.js`. Create view components under `src/views` and reference them from routes.

- Styling and UI frameworks:
  - TailwindCSS is configured (`tailwind.config.js`). Global CSS: `src/assets/main.css`.
  - Flowbite and Preline are imported in `src/main.js` — prefer using their classes/patterns for interactive components.
  - Animate.css is included for animations.

- Conventions & patterns discovered:
  - Component naming: PascalCase filenames (e.g., `Header.vue`, `HeroSection.vue`) and default exports used by Vue SFCs.
  - Directory separation: page-level components live under `src/views`; reusable sections in `HomeComponents` and `AboutComponents`.
  - Icon usage: FontAwesome is globally registered as `font-awesome-icon` and icons are added in `src/main.js`.

- Integration points:
  - No backend code in this repo. External integrations happen via client-side requests (not present). When adding API calls, prefer placing them inside composables or a small `src/api/` module (create if needed).

- What to change and how to test safely (agent action recipes):
  - Add a view: create `src/views/MyView.vue` and register route in `src/router/index.js`. Verify with `npm run dev` and visit `http://localhost:5173/my-route`.
  - Add a component: create under `src/components` and import into a view or `App.vue`. Follow PascalCase naming and default export.
  - Modify styles: update `src/assets/main.css` or Tailwind config; dev server hot-reloads.

- Files to open first when debugging or extending features:
  - `src/main.js` — app bootstrapping and global libs
  - `src/router/index.js` — navigation and route mapping
  - `src/App.vue` — global layout (Header/Footer)
  - `src/assets/main.css` and `tailwind.config.js` — styling rules

- Avoid making these assumptions:
  - There is no established API layer or store (Vuex/Pinia) in the repo. Do not add a global store without a discussion.
  - Do not change package.json scripts unless necessary; keep Vite as the primary dev server.

- Examples (copyable snippets):
  - Register a new route (add to `routes` array in `src/router/index.js`):

    { path: '/new', name: 'new', component: () => import('../views/NewView.vue') }

  - Global component registration is done in `src/main.js`. Use `app.component('font-awesome-icon', FontAwesomeIcon)` style for simple components.

If any instruction above is unclear or you need deeper details (API endpoints, test commands, or adding TypeScript/Pinia), tell me which area to expand.
