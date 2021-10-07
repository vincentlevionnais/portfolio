<nav class="navbar">

    <a href="<?= $router->generate('main-home'); ?>">
        <div class="navbar-brand">
            <img id="navbar-brand-logo" src="./assets/pictures/logo-vl.svg" alt="Logo VL">
            <p><span>Vincent Levionnais</span><br>
                Développeur Web Junior</p>

        </div>
    </a>

    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>


    <ul class="menu">
        <li><a href="<?= $router->generate('main-home'); ?>">Accueil</a></li>
        <li><a href="<?= $router->generate('main-descriptions'); ?>">Qui suis-je</a></li>
        <li><a href="<?= $router->generate('main-skills'); ?>">Compétences</a></li>
        <li><a href="">Réalisations</a></li>
        <li><a href="<?= $router->generate('main-contact'); ?>">Contact</a></li>
    </ul>

    <div class="theme">
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
        <p>theme</p>
    </div>
</nav>