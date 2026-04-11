<?php
$pageTitle = 'Inscription';
include __DIR__ . '/layouts/header.php';
?>

<section class="section">
    <div class="container container--narrow">
        <h1 class="heading heading--h2">Inscription</h1>
        <p class="text text--muted">Créez votre compte pour rejoindre la communauté.</p>

        <?php if ($error !== ''): ?>
            <div class="alert alert--danger" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
        <?php endif; ?>

        <?php if ($success !== ''): ?>
            <div class="alert alert--success" role="alert"><?= htmlspecialchars($success, ENT_QUOTES, 'UTF-8') ?></div>
        <?php endif; ?>

        <form class="form" method="post" action="/register" autocomplete="on">
            <?= \App\Services\CsrfService::field() ?>

            <div class="form__group">
                <label class="form__label" for="username">Nom d'utilisateur</label>
                <input class="input" id="username" name="username" type="text" placeholder="Votre nom" required>
            </div>

            <div class="form__group">
                <label class="form__label" for="email">Email</label>
                <input class="input" id="email" name="email" type="email" placeholder="vous@example.com" required>
            </div>

            <div class="form__group">
                <label class="form__label" for="password">Mot de passe</label>
                <input class="input" id="password" name="password" type="password" placeholder="Votre mot de passe" required>
            </div>

            <div class="form__group">
                <label class="form__label" for="password_confirm">Confirmer le mot de passe</label>
                <input class="input" id="password_confirm" name="password_confirm" type="password" placeholder="Répétez le mot de passe" required>
            </div>

            <button class="btn btn--primary btn--full" type="submit">S'inscrire</button>
        </form>

        <div style="margin-top:1.5rem;">
            <a href="/login" class="link">Déjà un compte ? Se connecter</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>
