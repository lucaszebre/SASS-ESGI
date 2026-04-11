<?php
$pageTitle = 'Utilisateurs';
include __DIR__ . '/../../layouts/admin-header.php';
?>

<?php if (!empty($error)): ?>
    <div class="alert alert--danger" role="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
<?php endif; ?>

<div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1.5rem;flex-wrap:wrap;gap:0.5rem;">
    <h2 class="heading heading--h3">Utilisateurs</h2>
    <a href="/admin/users/create" class="btn btn--primary btn--sm">+ Nouvel utilisateur</a>
</div>

<?php if (empty($users)): ?>
    <div class="alert alert--info" role="alert">Aucun utilisateur pour le moment.</div>
<?php else: ?>
    <div class="table table--responsive">
        <table class="table table--striped">
            <thead class="table__head">
                <tr>
                    <th class="table__cell table__cell--header">Nom d'utilisateur</th>
                    <th class="table__cell table__cell--header">Email</th>
                    <th class="table__cell table__cell--header">Rôle</th>
                    <th class="table__cell table__cell--header">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $u): ?>
                    <tr class="table__row">
                        <td class="table__cell"><?= htmlspecialchars($u['username'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td class="table__cell"><?= htmlspecialchars($u['email'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td class="table__cell">
                            <?php if ($u['role'] === 'admin'): ?>
                                <span class="badge badge--primary">Admin</span>
                            <?php elseif ($u['role'] === 'editor'): ?>
                                <span class="badge badge--info">Éditeur</span>
                            <?php else: ?>
                                <span class="badge badge--secondary">Visiteur</span>
                            <?php endif; ?>
                        </td>
                        <td class="table__cell">
                            <a href="/admin/users/edit/<?= $u['id'] ?>" class="btn btn--ghost btn--sm">Éditer</a>
                            <form method="POST" action="/admin/users/delete/<?= $u['id'] ?>" style="display:inline;">
                                <?= \App\Services\CsrfService::field() ?>
                                <button type="submit" class="btn btn--danger btn--sm" onclick="return confirm('Supprimer cet utilisateur ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>

<?php include __DIR__ . '/../../layouts/admin-footer.php'; ?>
