<?php
$pageTitle = 'Articles';
include __DIR__ . '/../layouts/header.php';
?>

<section class="section">
    <div class="container">
        <nav class="breadcrumb" aria-label="Fil d'Ariane">
            <ol class="breadcrumb__list">
                <li class="breadcrumb__item"><a href="/" class="breadcrumb__link">Accueil</a></li>
                <li class="breadcrumb__item breadcrumb__item--active" aria-current="page">Articles</li>
            </ol>
        </nav>

        <h1 class="heading heading--h2">Articles</h1>

        <?php if (empty($pages)): ?>
            <div class="alert alert--info" role="alert">Aucun article publié pour le moment.</div>
        <?php else: ?>
            <div class="grid grid--3col">
                <?php foreach ($pages as $page): ?>
                    <article class="card">
                        <img class="card__image" src="https://placehold.co/400x250/e0e7ff/4338ca?text=<?= rawurlencode($page['title']) ?>" alt="<?= htmlspecialchars($page['title'], ENT_QUOTES, 'UTF-8') ?>">
                        <div class="card__body">
                            <h3 class="card__title">
                                <a href="/page/<?= rawurlencode($page['slug']) ?>" class="link">
                                    <?= htmlspecialchars($page['title'], ENT_QUOTES, 'UTF-8') ?>
                                </a>
                            </h3>
                            <p class="card__text text--sm text--muted">
                                Par <?= htmlspecialchars($page['author'], ENT_QUOTES, 'UTF-8') ?>
                            </p>
                        </div>
                        <div class="card__footer">
                            <span class="text text--sm text--muted"><?= htmlspecialchars($page['date'], ENT_QUOTES, 'UTF-8') ?></span>
                            <a href="/page/<?= rawurlencode($page['slug']) ?>" class="link">Lire &rarr;</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
