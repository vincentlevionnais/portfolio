<h1>Compétences</h1>
<div class="container">
    <div class="card card-skills">
        <h2>Compétences techniques</h2>
        <ul class="skills">
            <?php foreach ($hardskills as $hardskill) : ?>
                <li>
                    <img class="skills-logo" src="<?= $hardskill->getPicture() ?>" alt="<?= $hardskill->getAlternativetext() ?>">
                    <p><?= $hardskill->getName() ?></p>
                </li>
            <?php endforeach ?>
        </ul>
    </div>

    <div class="card card-skills">
        <h2>Qualités</h2>
        <ul class="skills">
            <?php foreach ($softskills as $softskill) : ?>
                <li>
                    <?= $softskill->getName() ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>