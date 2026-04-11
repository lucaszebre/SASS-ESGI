<?php
$pageTitle = 'Modifier l\'article';
include __DIR__ . '/../../layouts/admin-header.php';
?>

<nav class="breadcrumb" aria-label="Fil d'Ariane" style="margin-bottom:1rem;">
    <ol class="breadcrumb__list">
        <li class="breadcrumb__item"><a href="/admin/pages" class="breadcrumb__link">Articles</a></li>
        <li class="breadcrumb__item breadcrumb__item--active" aria-current="page">Modifier</li>
    </ol>
</nav>

<h2 class="heading heading--h3">Modifier l'article</h2>

<?php if (!empty($error)): ?>
    <div class="alert alert--danger" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
<?php endif; ?>

<form class="form" method="POST" action="/admin/pages/edit/<?= $page['id'] ?>" style="max-width:600px;">
    <?= \App\Services\CsrfService::field() ?>

    <div class="form__group">
        <label class="form__label" for="title">Titre</label>
        <input class="input" type="text" id="title" name="title" value="<?= htmlspecialchars($page['title'], ENT_QUOTES, 'UTF-8') ?>" required>
    </div>

    <div class="form__group">
        <label class="form__label" for="slug">Slug (URL)</label>
        <input class="input" type="text" id="slug" name="slug" value="<?= htmlspecialchars($page['slug'], ENT_QUOTES, 'UTF-8') ?>" required>
    </div>

    <div class="form__group">
        <label class="form__label" for="content">Contenu</label>
        <textarea class="textarea" id="content" name="content" rows="12" maxlength="<?= \App\Models\Page::MAX_CONTENT_LENGTH ?>"><?= htmlspecialchars($page['content'], ENT_QUOTES, 'UTF-8') ?></textarea>
        <span class="form__hint">Maximum <?= number_format(\App\Models\Page::MAX_CONTENT_LENGTH) ?> caractères.</span>
    </div>

    <div class="form__group">
        <label class="form__label" for="status">Statut</label>
        <select class="select" id="status" name="status">
            <?php foreach ($statuses as $value => $label): ?>
                <option value="<?= htmlspecialchars($value, ENT_QUOTES, 'UTF-8') ?>" <?= $page['status'] === $value ? 'selected' : '' ?>><?= htmlspecialchars($label, ENT_QUOTES, 'UTF-8') ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="btn-group">
        <button type="submit" class="btn btn--primary">Sauvegarder</button>
        <a href="/admin/pages" class="btn btn--ghost">Annuler</a>
    </div>
</form>

<?php include __DIR__ . '/../../layouts/admin-footer.php'; ?>
