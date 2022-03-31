<?php foreach ($propiedades as $propiedad): ?>
    <?= $this->render('/propiedades/_grid_propiedades', ['propiedad' => $propiedad, 'count' => 1]) ?>
<?php endforeach ?>