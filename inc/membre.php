<?php foreach ($contents as $key => $value): ?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title" style="overflow:auto;">
                <h2 class="pull-left"><?= $value['titre']; ?></h2>
                <h6 class="pull-right"><?=  $value['created']; ?></h6>
                <h5 class="pull-right"><?=  $value['auteur']; ?></h5>
            </div>
        </div>
        <div class="panel-body">
            <?= $value['description']; ?>
        </div>
    </div>
</div>

<?php endforeach; ?>