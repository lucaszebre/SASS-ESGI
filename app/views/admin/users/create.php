<?php
$pageTitle = 'Créer un utilisateur';
include __DIR__ . '/../../layouts/admin-header.php';
?>

<nav class="breadcrumb" aria-label="Fil d'Ariane" style="margin-bottom:1rem;">
    <ol class="breadcrumb__list">
        <li class="breadcrumb__item"><a href="/admin/users" class="breadcrumb__link">Utilisateurs</a></li>
        <li class="breadcrumb__item breadcrumb__item--active" aria-current="page">Créer</li>
    </ol>
</nav>

<h2 class="heading heading--h3">Créer un utilisateur</h2>

<?php if (!empty($error)): ?>
    <div class="alert alert--danger" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
<?php endif; ?>

<form class="form" method="POST" action="/admin/users/create" style="max-width:600px;">
    <?= \App\Services\CsrfService::field() ?>

    <div class="form__group">
        <label class="form__label" for="username">Nom d'utilisateur</label>
        <input class="input" type="text" id="username" name="username" required>
    </div>

    <div class="form__group">
        <label class="form__label" for="email">Email</label>
        <input class="input" type="email" id="email" name="email" required>
    </div>

    <div class="form__group">
        <label class="form__label" for="password">Mot de passe</label>
        <input class="input" type="password" id="password" name="password" required minlength="8">
    </div>

    <div class="form__group">
        <label class="form__label" for="password_confirm">Confirmer le mot de passe</label>
        <input class="input" type="password" id="password_confirm" name="password_confirm" required minlength="8">
    </div>

    <div class="form__group">
        <label class="form__label" for="role">Rôle</label>
        <select class="select" id="role" name="role">
            <?php foreach ($roles as $value => $label): ?>
                <option value="<?= htmlspecialchars($value, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="btn-group">
        <button type="submit" class="btn btn--primary">Créer l'utilisateur</button>
        <a href="/admin/users" class="btn btn--ghost">Annuler</a>
    </div>
</form>

<?php include __DIR__ . '/../../layouts/admin-footer.php'; ?>
