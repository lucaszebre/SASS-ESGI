<?php
$pageTitle = $pageTitle ?? 'Admin';
$username = $username ?? null;
$isAdmin = $isAdmin ?? false;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> — Admin Magazine</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <style>
        .admin-layout { display: flex; min-height: 100vh; }
        .admin-layout__main { flex: 1; padding: 2rem; }
        .admin-layout__header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 2rem; flex-wrap: wrap; gap: 1rem; }
        .mobile-sidebar-toggle { display: none; }
        @media (max-width: 768px) {
            .admin-layout { flex-direction: column; }
            .sidebar { display: none; }
            .sidebar--open { display: block; }
            .mobile-sidebar-toggle { display: inline-flex; }
        }
    </style>
</head>
<body>

<div class="admin-layout">
    <aside class="sidebar" id="admin-sidebar">
        <div class="sidebar__header">
            <span class="sidebar__brand">Admin</span>
        </div>
        <nav class="sidebar__nav">
            <a href="/admin/pages" class="sidebar__link">Articles</a>
            <?php if ($isAdmin): ?>
                <a href="/admin/users" class="sidebar__link">Utilisateurs</a>
            <?php endif; ?>
        </nav>
        <div class="sidebar__footer" style="padding:1rem;border-top:1px solid var(--color-border);">
            <a href="/" class="sidebar__link">&larr; Retour au site</a>
            <a href="/logout" class="sidebar__link">Déconnexion</a>
        </div>
    </aside>

    <div class="admin-layout__main">
        <div class="admin-layout__header">
            <div>
                <button class="btn btn--ghost btn--sm mobile-sidebar-toggle" onclick="document.getElementById('admin-sidebar').classList.toggle('sidebar--open')">☰ Menu</button>
            </div>
            <div style="display:flex;gap:0.5rem;align-items:center;">
                <span class="text text--sm"><?= htmlspecialchars($username ?? '', ENT_QUOTES, 'UTF-8') ?></span>
            </div>
        </div>
