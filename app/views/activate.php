<?php
$pageTitle = 'Activation';
include __DIR__ . '/layouts/header.php';
?>

<section class="section">
    <div class="container container--narrow" style="text-align:center;">
        <h1 class="heading heading--h2">Activation du compte</h1>

        <?php if ($error !== ''): ?>
            <div class="alert alert--danger" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
        <?php endif; ?>

        <?php if ($success !== ''): ?>
            <div class="alert alert--success" role="alert"><?= htmlspecialchars($success, ENT_QUOTES, 'UTF-8') ?></div>
        <?php endif; ?>

        <div style="margin-top:1.5rem;">
            <a href="/login" class="btn btn--primary">Aller à la connexion</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>
