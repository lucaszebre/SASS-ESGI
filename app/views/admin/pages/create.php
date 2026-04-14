<?php
$pageTitle = 'Créer un article';
include __DIR__ . '/../../layouts/admin-header.php';
?>

<nav class="breadcrumb" aria-label="Fil d'Ariane" style="margin-bottom:1rem;">
    <ol class="breadcrumb__list">
        <li class="breadcrumb__item"><a href="/admin/pages" class="breadcrumb__link">Articles</a></li>
        <li class="breadcrumb__item breadcrumb__item--active" aria-current="page">Créer</li>
    </ol>
</nav>

<h2 class="heading heading--h3">Créer un article</h2>

<?php if (!empty($error)): ?>
    <div class="alert alert--danger" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
<?php endif; ?>

<form class="form" method="POST" action="/admin/pages/create" style="max-width:600px;">
    <?= \App\Services\CsrfService::field() ?>

    <div class="form__group">
        <label class="form__label" for="title">Titre</label>
        <input class="input" type="text" id="title" name="title" required>
    </div>

    <div class="form__group">
        <label class="form__label" for="slug">Slug (URL)</label>
        <input class="input" type="text" id="slug" name="slug" required>
    </div>

    <div class="form__group">
        <label class="form__label" for="content">Contenu</label>
        <textarea class="textarea" id="content" name="content" rows="10" maxlength="<?= \App\Models\Page::MAX_CONTENT_LENGTH ?>"></textarea>
    </div>

    <div class="form__group">
        <label class="form__label" for="status">Statut</label>
        <select class="select" id="status" name="status">
            <?php foreach ($statuses as $value => $label): ?>
                <option value="<?= htmlspecialchars($value, ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="btn-group">
        <button type="submit" class="btn btn--primary">Créer l'article</button>
        <a href="/admin/pages" class="btn btn--ghost">Annuler</a>
    </div>
</form>

<?php include __DIR__ . '/../../layouts/admin-footer.php'; ?>
