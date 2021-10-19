<h2>Réalisations</h2>

<div class="container container-project">
<?php foreach ($projects as $project) : ?>
    
        <div class="card card-project">
            <h3><?= $project->getTitle() ?></h3>
            <p><?= $project->getBody() ?></p>
            <img class="screenshot" src="./<?= $project->getScreenshot()?>" alt="<?= $project->getAlternative() ?>">
            <p class="caption"><?= $project->getCaption() ?></p>

        </div>
    
<?php endforeach ?>
</div>
