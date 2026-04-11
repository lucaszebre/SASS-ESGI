<footer class="section" style="border-top:1px solid var(--color-border);">
    <div class="container">
        <div class="grid grid--3col" style="gap:2rem;">
            <div>
                <h4 class="heading heading--h5">Magazine</h4>
                <p class="text text--sm text--muted">Votre source d'articles tech, design et développement web.</p>
            </div>
            <div>
                <h4 class="heading heading--h5">Liens rapides</h4>
                <ul style="display:flex;flex-direction:column;gap:0.5rem;">
                    <li><a href="/" class="link text--sm">Accueil</a></li>
                    <li><a href="/pages" class="link text--sm">Articles</a></li>
                </ul>
            </div>
            <div>
                <h4 class="heading heading--h5">Newsletter</h4>
                <form class="form">
                    <div class="form__group">
                        <input class="input" type="email" placeholder="votre@email.com">
                    </div>
                    <button class="btn btn--primary btn--full btn--sm">S'abonner</button>
                </form>
            </div>
        </div>
        <p class="text text--sm text--muted text--center" style="margin-top:2rem;">&copy; <?= date('Y') ?> Magazine. Tous droits réservés.</p>
    </div>
</footer>

<button class="theme-toggle" style="position:fixed;bottom:1rem;right:1rem;z-index:9999;" onclick="document.documentElement.classList.toggle('dark')">🌓</button>

</body>
</html>
