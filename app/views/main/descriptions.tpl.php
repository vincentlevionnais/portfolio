<h2>Qui suis-je ?</h2>
<div class="container-description">

    <div class="container container-portrait">
        <div class="portrait">
            <img src="./<?= $person[0]->getPicture();?>" alt="<?= $person[0]->getAlternative();?>">
            <a id="btn-cv" href="./assets/files/CV-Vincent-LEVIONNAIS.pdf">
                <p><i class="fa fa-file-pdf"></i><br>Mon CV</p>
            </a>
        </div>
    </div>

    <div class="container">

        <?php foreach ($descriptions as $description) : ?>
            <div class="card description">
                <h3><?= $description->getTitle() ?></h3>
                <p><?= $description->getBody() ?></p>
            </div>
        <?php endforeach ?>
    </div>
</div>