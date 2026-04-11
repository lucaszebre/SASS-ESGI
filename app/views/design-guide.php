<?php
$pageTitle = 'Design Guide';
include __DIR__ . '/layouts/header.php';
?>

<div class="container">
    <h1 class="heading heading--h1">Design Guide</h1>
    <p class="text text--lead">Bibliothèque de composants CMS Blog/Magazine — BEM, mobile-first, dark mode</p>

    <!-- COLORS -->
    <section class="guide-section" style="border-bottom:1px solid var(--color-border);padding:2rem 0;">
        <h2 class="heading heading--h2">Couleurs</h2>
        <div style="display:flex;flex-wrap:wrap;gap:1rem;">
            <div style="width:80px;text-align:center;"><div style="width:80px;height:80px;border-radius:0.5rem;background:#6366f1;"></div><span class="text text--sm">Primary</span></div>
            <div style="width:80px;text-align:center;"><div style="width:80px;height:80px;border-radius:0.5rem;background:#22c55e;"></div><span class="text text--sm">Success</span></div>
            <div style="width:80px;text-align:center;"><div style="width:80px;height:80px;border-radius:0.5rem;background:#f59e0b;"></div><span class="text text--sm">Warning</span></div>
            <div style="width:80px;text-align:center;"><div style="width:80px;height:80px;border-radius:0.5rem;background:#ef4444;"></div><span class="text text--sm">Error</span></div>
            <div style="width:80px;text-align:center;"><div style="width:80px;height:80px;border-radius:0.5rem;background:#3b82f6;"></div><span class="text text--sm">Info</span></div>
        </div>
    </section>

    <!-- TYPOGRAPHY -->
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

    <!-- BUTTONS -->
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

    <!-- FORMS -->
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

    <!-- ALERTS -->
    <section class="guide-section" style="border-bottom:1px solid var(--color-border);padding:2rem 0;">
        <h2 class="heading heading--h2">Alertes</h2>
        <div style="display:flex;flex-direction:column;gap:0.5rem;">
            <div class="alert alert--success" role="alert"><strong>Succès !</strong> Opération réussie.</div>
            <div class="alert alert--warning" role="alert"><strong>Attention !</strong> Modifications non sauvegardées.</div>
            <div class="alert alert--danger" role="alert"><strong>Erreur !</strong> Impossible de supprimer.</div>
            <div class="alert alert--info" role="alert"><strong>Info :</strong> Nouvelle version disponible.</div>
        </div>
    </section>

    <!-- BADGES -->
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

    <!-- CARDS -->
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

    <!-- TABLE -->
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
</div>

<?php include __DIR__ . '/layouts/footer.php'; ?>
