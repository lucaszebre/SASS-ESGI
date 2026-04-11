<?php
$pageTitle = $pageTitle ?? 'Magazine';
$username = $username ?? null;
$role = $role ?? null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> — Magazine</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

<nav class="navbar">
    <div class="container" style="display:flex;align-items:center;justify-content:space-between;width:100%;">
        <a href="/" class="navbar__brand">Magazine</a>
        <button class="navbar__toggle" aria-label="Menu">☰</button>
        <ul class="navbar__menu">
            <li class="navbar__item"><a href="/" class="navbar__link">Accueil</a></li>
            <li class="navbar__item"><a href="/pages" class="navbar__link">Articles</a></li>
            <?php if (in_array($role, ['admin', 'editor'], true)): ?>
                <li class="navbar__item"><a href="/admin/pages" class="navbar__link">Admin</a></li>
            <?php endif; ?>
            <?php if ($role === 'admin'): ?>
                <li class="navbar__item"><a href="/admin/users" class="navbar__link">Utilisateurs</a></li>
            <?php endif; ?>
            <?php if ($username !== null): ?>
                <li class="navbar__item"><a href="/logout" class="navbar__link">Déconnexion (<?= htmlspecialchars($username, ENT_QUOTES, 'UTF-8') ?>)</a></li>
            <?php else: ?>
                <li class="navbar__item"><a href="/login" class="navbar__link">Connexion</a></li>
                <li class="navbar__item"><a href="/register" class="navbar__link">Inscription</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
