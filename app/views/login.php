<?php
$pageTitle = 'Connexion';
include __DIR__ . '/layouts/header.php';
?>

<section class="section">
    <div class="container container--narrow">
        <h1 class="heading heading--h2">Connexion</h1>
        <p class="text text--muted">Connectez-vous pour accéder à votre compte.</p>

        <?php if ($error !== ''): ?>
            <div class="alert alert--danger" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
        <?php endif; ?>

        <?php if ($success !== ''): ?>
            <div class="alert alert--success" role="alert"><?= htmlspecialchars($success, ENT_QUOTES, 'UTF-8') ?></div>
        <?php endif; ?>

        <form class="form" method="post" action="/login" autocomplete="on">
            <?= \App\Services\CsrfService::field() ?>

            <div class="form__group">
                <label class="form__label" for="email">Email</label>
                <input class="input" id="email" name="email" type="email" placeholder="vous@example.com" required>
            </div>

            <div class="form__group">
                <label class="form__label" for="password">Mot de passe</label>
                <input class="input" id="password" name="password" type="password" placeholder="Votre mot de passe" required>
            </div>

            <button class="btn btn--primary btn--full" type="submit">Se connecter</button>
        </form>

        <div style="display:flex;gap:1rem;margin-top:1.5rem;flex-wrap:wrap;">
            <a href="/register" class="link">Créer un compte</a>
            <a href="/forgot-password" class="link text--muted">Mot de passe oublié ?</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>
