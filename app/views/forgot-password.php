<?php
$pageTitle = 'Mot de passe oublié';
include __DIR__ . '/layouts/header.php';
?>

<section class="section">
    <div class="container container--narrow">
        <h1 class="heading heading--h2">Mot de passe oublié</h1>
        <p class="text text--muted">Entrez votre adresse email pour recevoir un lien de réinitialisation.</p>

        <?php if ($error !== ''): ?>
            <div class="alert alert--danger" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
        <?php endif; ?>

        <?php if ($success !== ''): ?>
            <div class="alert alert--success" role="alert"><?= htmlspecialchars($success, ENT_QUOTES, 'UTF-8') ?></div>
        <?php endif; ?>

        <form class="form" method="POST" action="/forgot-password">
            <?= \App\Services\CsrfService::field() ?>

            <div class="form__group">
                <label class="form__label" for="email">Email</label>
                <input class="input" id="email" name="email" type="email" placeholder="vous@example.com" required>
            </div>

            <button class="btn btn--primary btn--full" type="submit">Envoyer le lien</button>
        </form>

        <div style="margin-top:1.5rem;">
            <a href="/login" class="link">&larr; Retour à la connexion</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>
