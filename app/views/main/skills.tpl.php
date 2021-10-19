<h2>Compétences</h2>
<div class="container">
    <div class="card card-skills">
        <h3>Compétences techniques</h3>
        <ul class="skills">
            <?php foreach ($hardskills as $hardskill) : ?>
                <li>
                    <img class="skills-logo" src="./<?= $hardskill->getPicture() ?>" alt="<?= $hardskill->getAlternative() ?>">
                    <p><?= $hardskill->getName() ?></p>
                </li>
            <?php endforeach ?>
        </ul>
    </div>

    <div class="card card-skills">
        <h3>Qualités</h3>
        <ul class="skills">
            <?php foreach ($softskills as $softskill) : ?>
                <li>
                    <?= $softskill->getName() ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>