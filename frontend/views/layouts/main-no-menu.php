<?php

use common\widgets\Alert;
use frontend\assets\AppAssetAdmin;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAssetAdmin::register($this);



$foto = '';
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


<div class="wrapper">
    <div class="wrapper fullheight-side no-box-shadow-style">
    <!-- Logo Header -->
    <div class="logo-header position-fixed" data-background-color="dark">

        <a href="/" class="logo">
            <img src="<?= Yii::getAlias("@web") ?>/images/logo-blanco.png" alt="navbar brand" class="navbar-brand" width="120px">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->    
    

   
    <div class="main-panel full-height">
        <div class="container">
            <div class="page-inner">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-3 pb-4">
                    <div>
                        <h2 class="pb-2 fw-bold"><?= $this->title ?></h2>
                        <h5 class="op-7 mb-2"><?= isset($this->params['subtitle']) ? $this->params['subtitle'] : '' ?></h5>
                    </div>
                    <!-- <div class="ml-md-auto py-2 py-md-0">
                        <a href="#" class="btn btn-info btn-border btn-round mr-2">Manage</a>
                        <a href="#" class="btn btn-primary btn-round">Add Customer</a>
                    </div> -->
                </div>
                
                
            </div>
                
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Ejemplo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Ejemplo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Ejemplo
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    Copyright <?= date('Y') ?>
                </div>              
            </div>
        </footer>
    </div>
</div>
        

    <?php if(Yii::$app->session->hasFlash('confirmacion_msg')):?>
        <?php
        $msj = Yii::$app->session->getFlash('confirmacion_msg');
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Correcto','$msj','success');";
        echo '}, 1000);</script>';
        ?>
    <?php endif; ?>   
    <?php if(Yii::$app->session->hasFlash('error_msg')):?>
        <?php
        $msj = Yii::$app->session->getFlash('error_msg');
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Error','$msj','error');";
        echo '}, 1000);</script>';
        ?>
    <?php endif; ?>  


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
