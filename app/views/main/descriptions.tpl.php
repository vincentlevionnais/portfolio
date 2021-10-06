<h1>Qui suis-je ?</h1>
<div class=container-description>

    <div class="container container-portrait">
        <div class="portrait">
            <img src="./assets/pictures/identity/portrait-vincent-levionnais.jpg" alt="">
        </div>
    </div>

    <div class="container">

        <?php foreach ($descriptions as $description) : ?>
            <div class="card description">
                <h2><?= $description->getTitle() ?></h2>
                <p><?= $description->getBody() ?></p>
            </div>
        <?php endforeach ?>
    </div>
</div>