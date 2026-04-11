# Plan — Bibliothèque de composants SCSS (CMS Blog/Magazine)

## Contexte métier
CMS orienté **Blog / Magazine** : articles, catégories, auteurs, commentaires, tableau de bord éditeur.

## Choix de design
- **Palette primaire** : Violet / Indigo (`#6366f1`)
- **Thème alt.** : Warm — orange/corail, spacing plus large
- **Fonts** : Google Fonts — Inter (corps) + Playfair Display (titres)
- **Approche** : mobile-first, dark mode via classe `.dark` + `@media (prefers-color-scheme)`

---

## Phase 1 — Fondations (`abstracts/`)

### 1.1 `variables.scss`
- **Couleurs** : primary (indigo), secondary, success, warning, danger, neutral scale (50→950)
- **Surfaces** : bg, surface, border — mode clair + sombre
- **Spacing scale** : 0 → 128 (système de 4px)
- **Font sizes** : xs → 5xl (rem)
- **Font families** : `$font-family-base` (Inter), `$font-family-heading` (Playfair Display)
- **Font weights** : light(300), regular(400), medium(500), semibold(600), bold(700)
- **Line heights** : tight(1.25), base(1.5), loose(1.75)
- **Breakpoints** : sm(640), md(768), lg(1024), xl(1280), 2xl(1536)
- **Border radius** : sm(4px), md(8px), lg(12px), xl(16px), full(9999px)
- **Shadows** : sm, md, lg, xl
- **Transitions** : fast(150ms), base(250ms), slow(350ms)
- **Z-index** : dropdown(100), sticky(200), overlay(300), modal(400), toast(500)

### 1.2 `functions.scss`
- `rem($px)` — conversion px → rem
- `strip-unit($value)`
- `map-deep-get($map, $keys...)`

### 1.3 `mixins.scss`
- `respond-to($breakpoint)` — media query mobile-first
- `dark` — `.dark &` + `@media (prefers-color-scheme: dark)`
- `input-base` — styles de base pour inputs
- `inline-base` — alias pour input-base (select)
- `button-base` — styles de base pour boutons
- `flex-center` — centrage flex
- `truncate` — text-overflow ellipsis
- `sr-only` — screen reader only
- `focus-ring` — outline accessible

---

## Phase 2 — Base (`base/`)

### 2.1 `reset.scss`
- Box-sizing border-box global
- Margin/padding reset
- HTML font-size 100%, scroll-behavior smooth
- Body : font-family, color, bg par défaut
- `:root` — CSS custom properties pour les couleurs (runtime theming)
- img/video : max-width 100%, display block
- list-style reset

### 2.2 `typography.scss` (corriger l'existant)
- Corriger `responde-to` → `respond-to`
- Corriger `$font-family-base` utilisé comme font-size
- `.heading` (h1–h6), `.text`, `.link`

---

## Phase 3 — Layout (`layout/` — nouveau dossier)

### 3.1 `_container.scss`
- `.container` : max-width, padding auto, responsive
- `.container--narrow`, `.container--wide`, `.container--fluid`

### 3.2 `_grid.scss`
- `.grid` : CSS Grid avec auto-fill
- `.grid--2col`, `--3col`, `--4col`

### 3.3 `_section.scss`
- `.section` : padding vertical généreux
- `.section--alt` : fond alterné

---

## Phase 4 — Composants design guide (`components/`)

### 4.1 `_buttons.scss` (sortir de forms)
- `.btn` + variantes : primary, secondary, ghost, danger, outline
- Tailles : sm, md, lg
- États : disabled, loading
- `.btn-group`

### 4.2 `_forms.scss` (corriger l'existant)
- Réindentation : `.btn` sorti
- Corriger erreurs syntaxe
- Ajouter `.input--lg`, `.form__row`

### 4.3 `_card.scss`
- `.card` : shadow, border-radius, overflow hidden
- `.card__image`, `.card__body`, `.card__title`, `.card__text`, `.card__footer`
- `.card--horizontal`, `.card--featured`

### 4.4 `_badge.scss`
- `.badge` : petit label coloré
- Variantes couleur + `.badge--pill`

### 4.5 `_alert.scss`
- `.alert` : padding, border-left accent
- Variantes : success, warning, danger, info

### 4.6 `_banner.scss`
- `.banner` : pleine largeur, overlay
- `.banner__title`, `.banner__subtitle`, `.banner__cta`

---

## Phase 5 — Navigation (`components/`)

### 5.1 `_navbar.scss`
- `.navbar`, `.navbar__brand`, `.navbar__menu`, `.navbar__toggle`
- Responsive : hamburger mobile

### 5.2 `_breadcrumb.scss`
- `.breadcrumb` + `.breadcrumb__item`, `.breadcrumb__separator`

### 5.3 `_pagination.scss`
- `.pagination`, `.pagination__item`, `.pagination__link`
- `--active`, `--disabled`

### 5.4 `_accordion.scss`
- `.accordion`, `.accordion__item`, `.accordion__header`, `.accordion__body`
- Nécessite JS

---

## Phase 6 — Composants avancés

### 6.1 `_modal.scss` (JS)
- `.modal-backdrop`, `.modal`, `.modal__header/body/footer/close`

### 6.2 `_table.scss` (admin)
- `.table`, `.table__head/row/cell`
- `.table--striped`, `.table--responsive`

### 6.3 `_sidebar.scss` (admin)
- `.sidebar`, `.sidebar__item`, `.sidebar__link`

### 6.4 `_article.scss` (blog/magazine)
- `.article`, `.article__header`, `.article__meta`, `.article__content`, `.article__footer`

### 6.5 `_comment.scss`
- `.comment`, `.comment__reply`

---

## Phase 7 — Thème alternatif (`themes/`)

### 7.1 `_theme-warm.scss`
- Primary : orange (`#f97316`) / corail
- Secondary : ambre (`#f59e0b`)
- Neutral : tons chauds
- Spacing × 1.15
- Appliqué via classe `.theme-warm`

---

## Phase 8 — JavaScript (`public/js/`)

- `modal.js` — open/close, focus trap, Escape
- `accordion.js` — toggle items
- `navbar.js` — toggle mobile menu
- `alert.js` — dismiss avec animation

---

## Phase 9 — Orchestration

### 9.1 `main.scss`
Imports ordonnés de tous les partials.

---

## Phase 10 — Pages de démo (`public/demos/`) ✅

1. `design-guide.html` — catalogue de tous les composants ✅
2. `front-page.html` — page d'accueil magazine ✅
3. `article.html` — page article complète ✅
4. `admin-dashboard.html` — tableau de bord admin ✅

> **Note** : Les pages HTML sont créées en avance avec tout le markup BEM. Elles serviront de cible visuelle au fur et à mesure que les composants SCSS sont ajoutés. Les styles apparaîtront progressivement.

---

## Phase 11 — Tooling

- `package.json` avec `sass` (Dart Sass)
- Scripts : `compile:sass`, `watch:sass`

---

## Structure finale

```
public/scss/
├── abstracts/
│   ├── variables.scss
│   ├── functions.scss
│   └── mixins.scss
├── base/
│   ├── reset.scss
│   └── typography.scss
├── layout/
│   ├── _container.scss
│   ├── _grid.scss
│   └── _section.scss
├── components/
│   ├── _buttons.scss
│   ├── _forms.scss
│   ├── _card.scss
│   ├── _badge.scss
│   ├── _alert.scss
│   ├── _banner.scss
│   ├── _navbar.scss
│   ├── _breadcrumb.scss
│   ├── _pagination.scss
│   ├── _accordion.scss
│   ├── _modal.scss
│   ├── _table.scss
│   ├── _sidebar.scss
│   ├── _article.scss
│   └── _comment.scss
├── themes/
│   └── _theme-warm.scss
└── main.scss
```

---

## Ordre d'exécution

| # | Tâche | Fichiers | Statut |
|---|---|---|---|
| 1 | Fondations | `variables`, `functions`, `mixins` | ✅ |
| 2 | Base | `reset`, `typography` (fix) | ✅ |
| 3 | Layout | `container`, `grid`, `section` | |
| 4 | Composants base | `buttons`, `forms` (fix), `card`, `badge` | |
| 5 | Feedback UI | `alert`, `banner` | |
| 6 | Navigation | `navbar`, `breadcrumb`, `pagination`, `accordion` | |
| 7 | Avancé | `modal`, `table`, `sidebar`, `article`, `comment` | |
| 8 | Thème warm | `_theme-warm.scss` | |
| 9 | JS | `modal.js`, `accordion.js`, `navbar.js`, `alert.js` | |
| 10 | main.scss | Imports + compilation | |
| 11 | Démos HTML | 4 pages de démo | ✅ |
| 12 | Tooling | `package.json` | ✅ |
