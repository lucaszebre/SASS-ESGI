<?php
$pageTitle = 'Articles';
include __DIR__ . '/../../layouts/admin-header.php';
?>

<?php if (!empty($error)): ?>
    <div class="alert alert--danger" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
<?php endif; ?>

<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1.5rem;flex-wrap:wrap;gap:0.5rem;">
    <h2 class="heading heading--h3">Articles</h2>
    <a href="/admin/pages/create" class="btn btn--primary btn--sm">+ Nouvel article</a>
</div>

<?php if (empty($pages)): ?>
    <div class="alert alert--info" role="alert">Aucun article pour le moment.</div>
<?php else: ?>
    <div class="table table--responsive">
        <table class="table table--striped">
            <thead class="table__head">
                <tr>
                    <th class="table__cell table__cell--header">Titre</th>
                    <th class="table__cell table__cell--header">Slug</th>
                    <th class="table__cell table__cell--header">Statut</th>
                    <th class="table__cell table__cell--header">Auteur</th>
                    <th class="table__cell table__cell--header">Date</th>
                    <th class="table__cell table__cell--header">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pages as $p): ?>
                    <tr class="table__row">
                        <td class="table__cell"><?= htmlspecialchars($p['title'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td class="table__cell text--sm text--muted"><?= htmlspecialchars($p['slug'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td class="table__cell">
                            <?php if ($p['status'] === 'published'): ?>
                                <span class="badge badge--success">Publié</span>
                            <?php else: ?>
                                <span class="badge badge--warning">Brouillon</span>
                            <?php endif; ?>
                        </td>
                        <td class="table__cell"><?= htmlspecialchars($p['author'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td class="table__cell text--sm"><?= htmlspecialchars($p['date'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td class="table__cell">
                            <a href="/admin/pages/edit/<?= $p['id'] ?>" class="btn btn--ghost btn--sm">Éditer</a>
                            <?php if ($isAdmin): ?>
                                <form method="POST" action="/admin/pages/delete/<?= $p['id'] ?>" style="display:inline;">
                                    <?= \App\Services\CsrfService::field() ?>
                                    <button type="submit" class="btn btn--danger btn--sm" onclick="return confirm('Supprimer cet article ?')">Supprimer</button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>

<?php include __DIR__ . '/../../layouts/admin-footer.php'; ?>
