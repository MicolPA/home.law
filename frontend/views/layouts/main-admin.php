<?php

use common\widgets\Alert;
use frontend\assets\AppAssetAdmin;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAssetAdmin::register($this);

$user = Yii::$app->user->identity;
if (Yii::$app->user->isGuest) {
    return Yii::$app->response->redirect(['/site/login']);
}else{
}

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

        <a href="<?= Yii::getAlias("@web") ?>/admin" class="logo">
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
    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">  
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <?php if ($user->photo_url): ?>
                            <img src="<?= Yii::getAlias("@web") . '/'. $user->photo_url ?>" alt="..." class="avatar-img rounded-circle">
                        <?php else: ?>
                            <button type="button" class="btn btn-icon btn-round btn-primary font-weight-bold">
                                <?= substr($user->first_name, 0,1) ?>
                            </button>
                        <?php endif ?>
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                <?= "$user->first_name $user->last_name" ?>
                                <span class="user-level">Administrator</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#profile">
                                        <span class="link-collapse">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#edit">
                                        <span class="link-collapse">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings">
                                        <span class="link-collapse">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-warning">
                    <li class="nav-item active">
                        <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Propiedades</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="dashboard">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="<?= Yii::getAlias("@web") ?>/propiedades/registrar">
                                        <span class="sub-item">Registrar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Yii::getAlias("@web") ?>/propiedades/listado">
                                        <span class="sub-item">Listado</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Yii::getAlias("@web") ?>/propiedades-tipo">
                                        <span class="sub-item">Tipos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Yii::getAlias("@web") ?>/ubicaciones">
                                        <span class="sub-item">Ubicaciones</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= Yii::getAlias("@web") ?>/propiedades-extras-list">
                                        <span class="sub-item">Extras</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Propiedades</h4>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Yii::getAlias("@web") ?>/tasas-hipotecarias">
                            <i class="fa-solid fa-chart-line"></i>
                            <p>Tasas Hipotecarias</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <i class="fas fa-file-contract"></i>
                            <p>Lorem Ipsum</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <i class="fas fa-chart-bar"></i>
                            <p>Lorem Ipsum</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="starter-template.html">
                            <i class="icon-briefcase"></i>
                            <p>Revenue Report</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="starter-template.html">
                            <i class="fas fa-print"></i>
                            <p>IPO Report</p>
                        </a>
                    </li>
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Snippets</h4>
                    </li>
                    <!-- <li class="nav-item">
                        <a data-toggle="collapse" href="#email-nav">
                            <i class="far fa-envelope"></i>
                            <p>Email</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="email-nav">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="email-inbox.html">
                                        <span class="sub-item">Inbox</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email-compose.html">
                                        <span class="sub-item">Email Compose</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email-detail.html">
                                        <span class="sub-item">Email Detail</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#messages-app-nav">
                            <i class="far fa-paper-plane"></i>
                            <p>Messages App</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="messages-app-nav">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="messages.html">
                                        <span class="sub-item">Messages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="conversations.html">
                                        <span class="sub-item">Conversations</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="projects.html">
                            <i class="fas fa-file-signature"></i>
                            <p>Projects</p>
                            <span class="badge badge-count">5</span>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a href="boards.html">
                            <i class="fas fa-th-list"></i>
                            <p>Lorem Ipsum</p>
                            <span class="badge badge-count">4</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="invoice.html">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <p>Lorem Ipsum</p>
                            <span class="badge badge-count">6</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">

        <div class="container-fluid">
            <nav class="navbar navbar-line navbar-header-left navbar-expand-lg p-0  d-none d-lg-flex">
                <ul class="navbar-nav page-navigation page-navigation-info">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Apps
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Pages
                        </a>
                    </li>
                </ul>
            </nav>
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <!-- <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true">
                        <i class="fa fa-search"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-search animated fadeIn">
                        <form class="navbar-left navbar-form nav-search">
                            <div class="input-group">
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </ul>
                </li> -->
                
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
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
                <?= $content ?>
                
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
