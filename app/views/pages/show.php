<?php
$pageTitle = $page['title'];
include __DIR__ . '/../layouts/header.php';
?>

<article class="article">
    <div class="container container--narrow">

        <nav class="breadcrumb" aria-label="Fil d'Ariane" style="margin-bottom:1rem;">
            <ol class="breadcrumb__list">
                <li class="breadcrumb__item"><a href="/" class="breadcrumb__link">Accueil</a></li>
                <li class="breadcrumb__item"><a href="/pages" class="breadcrumb__link">Articles</a></li>
                <li class="breadcrumb__item breadcrumb__item--active" aria-current="page"><?= htmlspecialchars($page['title'], ENT_QUOTES, 'UTF-8') ?></li>
            </ol>
        </nav>

        <header class="article__header">
            <h1 class="heading heading--h1"><?= htmlspecialchars($page['title'], ENT_QUOTES, 'UTF-8') ?></h1>
            <div class="article__meta">
                <span class="text text--sm text--muted">
                    Par <?= htmlspecialchars($page['author'], ENT_QUOTES, 'UTF-8') ?>
                    &middot; <?= htmlspecialchars($page['date'], ENT_QUOTES, 'UTF-8') ?>
                </span>
            </div>
        </header>

        <div class="article__content">
            <?= nl2br(htmlspecialchars($page['content'], ENT_QUOTES, 'UTF-8')) ?>
        </div>

    </div>
</article>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
