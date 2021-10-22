<nav class="navbar">

    <a href="<?= $router->generate('main-home'); ?>">
        <div class="navbar-brand">
            <img id="navbar-brand-logo" src="./assets/pictures/logo-vl.svg" alt="Logo VL">
            <h1><span>Vincent Levionnais</span><br>
                Développeur Web Junior</h1>
        </div>
    </a>

    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>


    <ul class="menu">
        <li class="<?php if ($viewName == 'main/home') {
                        echo 'active';
                    } ?>"><a href="<?= $router->generate('main-home'); ?>">Accueil</a></li>
        <li class="<?php if ($viewName == 'main/descriptions') {
                        echo 'active';
                    } ?>"><a href="<?= $router->generate('main-descriptions'); ?>">Qui suis-je ?</a></li>
        <li class="<?php if ($viewName == 'main/skills') {
                        echo 'active';
                    } ?>"><a href="<?= $router->generate('main-skills'); ?>">Compétences</a></li>
        <li class="<?php if ($viewName == 'main/projects') {
                        echo 'active';
                    } ?>"><a href="<?= $router->generate('main-projects'); ?>">Réalisations</a></li>
        <li class="<?php if ($viewName == 'main/contact') {
                        echo 'active';
                    } ?>"><a href="<?= $router->generate('main-contact'); ?>">Contact</a></li>
        <li>
            <div class="theme">
                <label class="switch">
                    <input type="checkbox" class="switch-theme">
                    <span class="slider round"></span>
                </label>
                <p>thème</p>
            </div>
        </li>
        
    </ul>


</nav>