<?php
$pageTitle = 'Réinitialiser le mot de passe';
include __DIR__ . '/layouts/header.php';
?>

<section class="section">
    <div class="container container--narrow">
        <h1 class="heading heading--h2">Réinitialiser le mot de passe</h1>

        <?php if ($error !== ''): ?>
            <div class="alert alert--danger" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
        <?php endif; ?>

        <form class="form" method="POST" action="/reset-password">
            <?= \App\Services\CsrfService::field() ?>
            <input type="hidden" name="token" value="<?= htmlspecialchars($token, ENT_QUOTES, 'UTF-8') ?>">

            <div class="form__group">
                <label class="form__label" for="password">Nouveau mot de passe</label>
                <input class="input" id="password" name="password" type="password" placeholder="Nouveau mot de passe" required minlength="8">
            </div>

            <div class="form__group">
                <label class="form__label" for="password_confirm">Confirmer le nouveau mot de passe</label>
                <input class="input" id="password_confirm" name="password_confirm" type="password" placeholder="Confirmer le mot de passe" required minlength="8">
            </div>

            <button class="btn btn--primary btn--full" type="submit">Réinitialiser</button>
        </form>

        <div style="margin-top:1.5rem;">
            <a href="/login" class="link">&larr; Retour à la connexion</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>
