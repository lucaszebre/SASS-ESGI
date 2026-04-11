<?php
$pageTitle = 'Accueil';
include __DIR__ . '/layouts/header.php';
?>

<section class="section">
    <div class="container">
        <div class="banner" style="position:relative;overflow:hidden;border-radius:0.5rem;">
            <img class="banner__image" src="https://placehold.co/1200x500/4338ca/ffffff?text=Magazine+Blog" alt="Hero">
            <div class="banner__overlay">
                <h1 class="banner__title">Bienvenue sur le Magazine</h1>
                <p class="banner__subtitle">Votre source d'articles tech, design et développement web.</p>
                <div style="display:flex;gap:0.5rem;flex-wrap:wrap;">
                    <a href="/pages" class="btn btn--primary banner__cta">Voir les articles</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container" style="text-align:center;">
        <?php if ($username !== null): ?>
            <h2 class="heading heading--h2">Bonjour, <?= htmlspecialchars($username, ENT_QUOTES, 'UTF-8') ?></h2>
            <p class="text text--lead">Content de vous revoir ! Découvrez les derniers articles.</p>
        <?php else: ?>
            <h2 class="heading heading--h2">Rejoignez la communauté</h2>
            <p class="text text--lead">Créez un compte pour accéder à toutes les fonctionnalités.</p>
            <div style="display:flex;gap:0.5rem;justify-content:center;margin-top:1rem;">
                <a href="/register" class="btn btn--primary">S'inscrire</a>
                <a href="/login" class="btn btn--secondary">Se connecter</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>
