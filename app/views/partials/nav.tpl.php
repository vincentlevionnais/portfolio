<nav class="navbar">

        <a href="<?= $router->generate('main-home'); ?>">
            <div class="navbar-brand">
                <img id="navbar-brand-logo" src="./assets/pictures/logo-vl.png" alt="Logo Vincent Levionnais">
                <p>VINCENT LEVIONNAIS<br>
                    développeur web junior</p>

            </div>
        </a>

        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>


        <ul class="menu">
            <li><a href="">Qui suis-je</a></li>
            <li><a href="<?= $router->generate('main-skills'); ?>">Compétences</a></li>
            <li><a href="">Réalisations</a></li>
            <li><a href="<?= $router->generate('main-contact'); ?>">Contact</a></li>
        </ul>

</nav>