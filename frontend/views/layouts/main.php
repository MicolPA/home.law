<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> | Home Law</title>
    <?php $this->head() ?>
</head>
<body class="">
<?php $this->beginBody() ?>

<style>
    .nav-item{
        float: right !important;
    }
</style>

    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-2">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">
                <img src="<?= Yii::getAlias("@web") ?>/images/logo.png" width="120px">
            </span>
          </a>

          <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link text-primary font-14">PROPIEDADES</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-primary font-14">RENTAS</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-primary font-14">VENTAS</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-primary font-14">AGENTES</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-primary font-14">CONTACTOS</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-primary font-14">REP DOM</a></li>
          </ul>
           <!--  <div class="text-end">
              <button type="button" class="btn btn-outline-dark me-2">Login</button>
              <button type="button" class="btn btn-warning">Sign-up</button>
            </div> -->
        </header>

    </div>
    <div class="bg-danger w-50 float-end second-menu p-0">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center">
              <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                <span class="fs-4">
                </span>
              </a>

              <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link text-white font-14">PROPIEDADES</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white font-14">RENTAS</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white font-14">VENTAS</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white font-14">AGENTES</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white font-14">CONTACTOS</a></li>
              </ul>
            </div>
        </div>
    </div>

<main role="main" class="flex-shrink-0 bg-secondary">
    <?= Alert::widget() ?>
    <?= $content ?>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-end"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
