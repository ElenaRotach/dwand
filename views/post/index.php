<?php if(count($model)): ?>
    <?php foreach ($model as $item): ?>
        <div class="col-lg-4">
            <h3><?= $item->title ?></h3>
            <span><?= $item->description ?></span>
        </div>
    <?php endforeach ?>
<?php endif; ?>
