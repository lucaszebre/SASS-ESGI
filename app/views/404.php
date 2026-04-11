<?php
$pageTitle = '404 — Page introuvable';
include __DIR__ . '/layouts/header.php';
?>

<section class="section" style="text-align:center;">
    <div class="container container--narrow">
        <h1 class="heading heading--h1">404</h1>
        <p class="text text--lead">La page que vous cherchez n'existe pas ou a été déplacée.</p>
        <div style="margin-top:1.5rem;">
            <a href="/" class="btn btn--primary">&larr; Retour à l'accueil</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>
