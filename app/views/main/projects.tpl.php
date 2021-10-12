<h1>Réalisations</h1>

<div class="container container-project">
<?php foreach ($projects as $project) : ?>
    
        <div class="card card-project">
            <h2><?= $project->getTitle() ?></h2>
            <p><?= $project->getBody() ?></p>
            <img class="screenshot" src="./<?= $project->getScreenshot()?>" alt="<?= $project->getAlternativetext() ?>">
            <p class="caption"><?= $project->getCaption() ?></p>

        </div>
    
<?php endforeach ?>
</div>
