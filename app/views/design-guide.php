<?php
$pageTitle = 'Design Guide';
include __DIR__ . '/layouts/header.php';
?>

<div class="container">
    <h1 class="heading heading--h1">Design Guide</h1>
    <p class="text text--lead">Bibliothèque de composants CMS Blog/Magazine — BEM, mobile-first, dark mode</p>


    <!-- Couleurs -->
    <section class="guide-section" style="border-bottom:1px solid var(--color-border);padding:2rem 0;">
        <h2 class="heading heading--h2">Couleurs</h2>
        <div style="display:flex;flex-wrap:wrap;gap:1rem;">
            <div style="width:80px;text-align:center;">
                <div style="width:80px;height:80px;border-radius:0.5rem;background:#6366f1;"></div><span class="text text--sm">Primary</span>
            </div>
            <div style="width:80px;text-align:center;">
                <div style="width:80px;height:80px;border-radius:0.5rem;background:#22c55e;"></div><span class="text text--sm">Success</span>
            </div>
            <div style="width:80px;text-align:center;">
                <div style="width:80px;height:80px;border-radius:0.5rem;background:#f59e0b;"></div><span class="text text--sm">Warning</span>
            </div>
            <div style="width:80px;text-align:center;">
                <div style="width:80px;height:80px;border-radius:0.5rem;background:#ef4444;"></div><span class="text text--sm">Error</span>
            </div>
            <div style="width:80px;text-align:center;">
                <div style="width:80px;height:80px;border-radius:0.5rem;background:#3b82f6;"></div><span class="text text--sm">Info</span>
            </div>
        </div>
    </section>

    <!-- Typographie -->
    <section class="guide-section" style="border-bottom:1px solid var(--color-border);padding:2rem 0;">
        <h2 class="heading heading--h2">Typographie</h2>
        <h1 class="heading heading--h1">Heading H1</h1>
        <h2 class="heading heading--h2">Heading H2</h2>
        <h3 class="heading heading--h3">Heading H3</h3>
        <h4 class="heading heading--h4">Heading H4</h4>
        <p class="text">Texte courant par défaut — Inter, 1rem.</p>
        <p class="text text--sm">Texte small</p>
        <p class="text text--lg">Texte large</p>
        <p class="text text--muted">Texte muted</p>
        <p class="text text--lead">Texte lead — introduction d'article.</p>
        <p class="text">Ceci est un <a href="#" class="link">lien classique</a>.</p>
    </section>

    <!-- Boutons -->
    <section class="guide-section" style="border-bottom:1px solid var(--color-border);padding:2rem 0;">
        <h2 class="heading heading--h2">Boutons</h2>
        <div style="display:flex;flex-wrap:wrap;gap:0.5rem;align-items:center;">
            <button class="btn btn--primary">Primary</button>
            <button class="btn btn--secondary">Secondary</button>
            <button class="btn btn--ghost">Ghost</button>
            <button class="btn btn--danger">Danger</button>
            <button class="btn btn--primary btn--sm">Small</button>
            <button class="btn btn--primary btn--lg">Large</button>
            <button class="btn btn--primary" disabled>Disabled</button>
        </div>
    </section>

    <!-- Formulaires -->
    <section class="guide-section" style="border-bottom:1px solid var(--color-border);padding:2rem 0;">
        <h2 class="heading heading--h2">Formulaires</h2>
        <form class="form" style="max-width:480px;">
            <div class="form__group">
                <label class="form__label">Nom</label>
                <input class="input" type="text" placeholder="Jean Dupont">
            </div>
            <div class="form__group">
                <label class="form__label">Email (erreur)</label>
                <input class="input input--error" type="email" value="invalid">
                <span class="form__error">Email invalide.</span>
            </div>
            <div class="form__group">
                <label class="form__label">Biographie</label>
                <textarea class="textarea" placeholder="Parlez-nous de vous..."></textarea>
            </div>
            <div class="form__group">
                <label class="form__label">Catégorie</label>
                <select class="select">
                    <option>Technologie</option>
                    <option>Design</option>
                </select>
            </div>
            <div class="form__group">
                <label class="checkbox">
                    <input class="checkbox__input" type="checkbox">
                    <span class="checkbox__label">Accepter les conditions</span>
                </label>
            </div>
            <button class="btn btn--primary" type="button">Soumettre</button>
        </form>
    </section>

    <!-- Alertes -->
    <section class="guide-section" style="border-bottom:1px solid var(--color-border);padding:2rem 0;">
        <h2 class="heading heading--h2">Alertes</h2>
        <div style="display:flex;flex-direction:column;gap:0.5rem;">
            <div class="alert alert--success" role="alert"><strong>Succès !</strong> Opération réussie.</div>
            <div class="alert alert--warning" role="alert"><strong>Attention !</strong> Modifications non sauvegardées.</div>
            <div class="alert alert--danger" role="alert"><strong>Erreur !</strong> Impossible de supprimer.</div>
            <div class="alert alert--info" role="alert"><strong>Info :</strong> Nouvelle version disponible.</div>
        </div>
    </section>

    <!-- Badges -->
    <section class="guide-section" style="border-bottom:1px solid var(--color-border);padding:2rem 0;">
        <h2 class="heading heading--h2">Badges</h2>
        <div style="display:flex;flex-wrap:wrap;gap:0.5rem;">
            <span class="badge badge--primary">Primary</span>
            <span class="badge badge--secondary">Secondary</span>
            <span class="badge badge--success">Success</span>
            <span class="badge badge--warning">Warning</span>
            <span class="badge badge--danger">Danger</span>
            <span class="badge badge--info">Info</span>
            <span class="badge badge--primary badge--pill">Pill</span>
        </div>
    </section>

    <!-- Cards -->
    <section class="guide-section" style="border-bottom:1px solid var(--color-border);padding:2rem 0;">
        <h2 class="heading heading--h2">Cards</h2>
        <div class="grid grid--3col" style="max-width:700px;">
            <article class="card">
                <img class="card__image" src="https://placehold.co/300x200/e0e7ff/4338ca?text=Article" alt="Article">
                <div class="card__body">
                    <span class="badge badge--primary">Tech</span>
                    <h3 class="card__title">Titre article</h3>
                    <p class="card__text">Description courte de l'article.</p>
                </div>
                <div class="card__footer">
                    <span class="text text--sm text--muted">12 Jan 2026</span>
                </div>
            </article>
            <article class="card">
                <img class="card__image" src="https://placehold.co/300x200/fef3c7/92400e?text=Design" alt="Article">
                <div class="card__body">
                    <span class="badge badge--secondary">Design</span>
                    <h3 class="card__title">Design tokens</h3>
                    <p class="card__text">Le futur des design systems.</p>
                </div>
                <div class="card__footer">
                    <span class="text text--sm text--muted">10 Jan 2026</span>
                </div>
            </article>
        </div>
    </section>

    <!-- Bannière -->
    <section class="guide-section">
        <h2 class="heading heading--h2">Bannière</h2>
        <div class="banner">
            <img class="banner__image" src="https://placehold.co/1200x360/0f766e/ffffff?text=Magazine+Editorial" alt="Bannière magazine">
            <div class="banner__overlay">
                <span class="badge badge--primary badge--pill">À la une</span>
                <h2 class="banner__title">Les articles à suivre cette semaine</h2>
                <p class="text">Un composant front pour les pages éditoriales.</p>
            </div>
        </div>
    </section>

    <!-- Navigation -->
    <section class="guide-section">
        <h2 class="heading heading--h2">Navigation</h2>
        <nav class="navbar" style="position:static;">
            <div class="navbar__inner">
                <a href="#" class="navbar__brand">Magazine</a>
                <ul class="navbar__menu">
                    <li class="navbar__item"><a href="#" class="navbar__link navbar__link--active">Accueil</a></li>
                    <li class="navbar__item"><a href="#" class="navbar__link">Articles</a></li>
                    <li class="navbar__item"><a href="#" class="navbar__link">Catégories</a></li>
                </ul>
            </div>
        </nav>
        <nav class="breadcrumb" aria-label="Fil d'Ariane" style="margin-top:1rem;">
            <ol class="breadcrumb__list">
                <li class="breadcrumb__item"><a href="#" class="breadcrumb__link">Accueil</a></li>
                <li class="breadcrumb__item"><a href="#" class="breadcrumb__link">Articles</a></li>
                <li class="breadcrumb__item breadcrumb__item--active">Tech</li>
            </ol>
        </nav>
        <nav class="pagination" aria-label="Pagination">
            <a href="#" class="pagination__link pagination__link--disabled">Précédent</a>
            <a href="#" class="pagination__link pagination__link--active">1</a>
            <a href="#" class="pagination__link">2</a>
            <span class="pagination__ellipsis">...</span>
            <a href="#" class="pagination__link">8</a>
            <a href="#" class="pagination__link">Suivant</a>
        </nav>
    </section>

    <!-- Accordéon et modale -->
    <section class="guide-section">
        <h2 class="heading heading--h2">Accordéon et modale</h2>
        <div class="accordion" style="max-width:600px;margin-bottom:1rem;">
            <div class="accordion__item accordion__item--open">
                <button class="accordion__header" type="button"><span>Publication</span><span>▼</span></button>
                <div class="accordion__body">Un article peut être brouillon, publié ou archivé.</div>
            </div>
            <div class="accordion__item">
                <button class="accordion__header" type="button"><span>Modération</span><span>▼</span></button>
                <div class="accordion__body">Les actions sensibles sont confirmées par une modale.</div>
            </div>
        </div>
        <button class="btn btn--danger" type="button" data-modal-open="#guide-modal">Ouvrir la modale</button>
    </section>

    <!-- Tableau -->
    <section class="guide-section" style="padding:2rem 0;">
        <h2 class="heading heading--h2">Tableau</h2>
        <div class="table table--responsive">
            <table class="table table--striped">
                <thead class="table__head">
                    <tr>
                        <th class="table__cell table__cell--header">Titre</th>
                        <th class="table__cell table__cell--header">Auteur</th>
                        <th class="table__cell table__cell--header">Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table__row">
                        <td class="table__cell">Article 1</td>
                        <td class="table__cell">Marie</td>
                        <td class="table__cell"><span class="badge badge--success">Publié</span></td>
                    </tr>
                    <tr class="table__row">
                        <td class="table__cell">Article 2</td>
                        <td class="table__cell">Lucas</td>
                        <td class="table__cell"><span class="badge badge--warning">Brouillon</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Menu admin -->
    <section class="guide-section">
        <h2 class="heading heading--h2">Menu admin</h2>
        <aside class="sidebar" style="max-width:260px;">
            <div class="sidebar__header"><span class="sidebar__brand">Admin</span></div>
            <nav class="sidebar__nav">
                <a href="#" class="sidebar__link sidebar__link--active">Articles</a>
                <a href="#" class="sidebar__link">Utilisateurs</a>
                <a href="#" class="sidebar__link">Paramètres</a>
            </nav>
        </aside>
    </section>
</div>

<div class="modal-backdrop" id="guide-modal">
    <div class="modal" role="dialog" aria-modal="true">
        <div class="modal__header">
            <h3 class="heading heading--h4">Supprimer l'article</h3>
            <button class="modal__close" type="button" data-modal-close aria-label="Fermer">×</button>
        </div>
        <div class="modal__body">
            <p class="text">Cette action illustre une confirmation côté administration.</p>
        </div>
        <div class="modal__footer">
            <button class="btn btn--ghost" type="button" data-modal-close>Annuler</button>
            <button class="btn btn--danger" type="button" data-modal-close>Supprimer</button>
        </div>
    </div>
</div>

<?php include __DIR__ . '/layouts/footer.php'; ?>