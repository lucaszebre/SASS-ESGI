<?php
$pageTitle = 'Accueil';
include __DIR__ . '/layouts/header.php';
?>

<section class="section">
    <div class="container">
        <div class="banner">
            <img class="banner__image" src="https://placehold.co/1200x420/4338ca/ffffff?text=CMS+Magazine" alt="CMS Magazine">
            <div class="banner__overlay">
                <span class="badge badge--primary badge--pill">CMS from scratch</span>
                <h1 class="banner__title">Gérez vos articles avec une interface simple</h1>
                <p class="text">Un front public, un back-office et une bibliothèque de composants SCSS.</p>
                <div class="btn-group">
                    <a href="/pages" class="btn btn--primary">Voir les articles</a>
                    <a href="/design-guide" class="btn btn--secondary">Design guide</a>
                    <?php if (in_array($role ?? null, ['admin', 'editor'], true)): ?>
                        <a href="/admin/pages" class="btn btn--secondary">Administration</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <h2 class="heading heading--h2">Derniers articles</h2>

        <?php if (empty($pages)): ?>
            <div class="alert alert--info" role="alert">Aucun article publié pour le moment.</div>
        <?php else: ?>
        <div class="grid grid--3col">
            <?php foreach (array_slice($pages, 0, 3) as $page): ?>
                <article class="card">
                    <img class="card__image" src="https://placehold.co/400x250/e0e7ff/4338ca?text=<?= rawurlencode($page['title']) ?>" alt="<?= htmlspecialchars($page['title'], ENT_QUOTES, 'UTF-8') ?>">
                    <div class="card__body">
                        <span class="badge badge--success">Publié</span>
                        <h3 class="card__title">
                            <a href="/page/<?= rawurlencode($page['slug']) ?>" class="link">
                                <?= htmlspecialchars($page['title'], ENT_QUOTES, 'UTF-8') ?>
                            </a>
                        </h3>
                        <p class="card__text">
                            <?= htmlspecialchars(mb_strimwidth($page['content'], 0, 110, '...'), ENT_QUOTES, 'UTF-8') ?>
                        </p>
                    </div>
                    <div class="card__footer">
                        <span class="text text--sm text--muted">
                            <?= htmlspecialchars($page['author'], ENT_QUOTES, 'UTF-8') ?> · <?= htmlspecialchars($page['date'], ENT_QUOTES, 'UTF-8') ?>
                        </span>
                        <a href="/page/<?= rawurlencode($page['slug']) ?>" class="link">Lire</a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="alert alert--info" role="alert" style="margin-top:2rem;">
            <?php if ($username !== null): ?>
                Connecté en tant que <?= htmlspecialchars($username, ENT_QUOTES, 'UTF-8') ?>.
                <?php if (in_array($role ?? null, ['admin', 'editor'], true)): ?>
                    <a href="/admin/pages" class="link">Aller à l'administration</a>
                <?php endif; ?>
                <a href="/logout" class="link">Déconnexion</a>
            <?php else: ?>
                Vous n'êtes pas connecté.
                <a href="/login" class="link">Connexion</a>
                ou
                <a href="/register" class="link">inscription</a>.
            <?php endif; ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>
