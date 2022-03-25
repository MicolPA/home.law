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
    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">  
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="<?= Yii::getAlias("@web") . '/'. $user->photo_url ?>" alt="..." class="avatar-img rounded-circle">
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
                                    <a href="../demo3/index.html">
                                        <span class="sub-item">Ubicaciones</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../demo4/index.html">
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
                        <h4 class="text-section">Finance</h4>
                    </li>
                    <li class="nav-item">
                        <a href="starter-template.html">
                            <i class="far fa-file-excel"></i>
                            <p>Annual Report</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="starter-template.html">
                            <i class="fas fa-file-contract"></i>
                            <p>HR Report</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="starter-template.html">
                            <i class="fas fa-chart-bar"></i>
                            <p>Finance Report</p>
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
                    <li class="nav-item">
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
                    </li>
                    <li class="nav-item">
                        <a href="boards.html">
                            <i class="fas fa-th-list"></i>
                            <p>Boards</p>
                            <span class="badge badge-count">4</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="invoice.html">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <p>Invoices</p>
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
                <li class="nav-item dropdown hidden-caret">
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
                </li>
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                        <li>
                            <div class="dropdown-title d-flex justify-content-between align-items-center">
                                Messages                                    
                                <a href="#" class="small">Mark all as read</a>
                            </div>
                        </li>
                        <li>
                            <div class="message-notif-scroll scrollbar-outer">
                                <div class="notif-center">
                                    <a href="#">
                                        <div class="notif-img"> 
                                            <img src="../assets/img/jm_denis.jpg" alt="Img Profile">
                                        </div>
                                        <div class="notif-content">
                                            <span class="subject">Jimmy Denis</span>
                                            <span class="block">
                                                How are you ?
                                            </span>
                                            <span class="time">5 minutes ago</span> 
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-img"> 
                                            <img src="../assets/img/chadengle.jpg" alt="Img Profile">
                                        </div>
                                        <div class="notif-content">
                                            <span class="subject">Chad</span>
                                            <span class="block">
                                                Ok, Thanks !
                                            </span>
                                            <span class="time">12 minutes ago</span> 
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-img"> 
                                            <img src="../assets/img/mlane.jpg" alt="Img Profile">
                                        </div>
                                        <div class="notif-content">
                                            <span class="subject">Jhon Doe</span>
                                            <span class="block">
                                                Ready for the meeting today...
                                            </span>
                                            <span class="time">12 minutes ago</span> 
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-img"> 
                                            <img src="../assets/img/talha.jpg" alt="Img Profile">
                                        </div>
                                        <div class="notif-content">
                                            <span class="subject">Talha</span>
                                            <span class="block">
                                                Hi, Apa Kabar ?
                                            </span>
                                            <span class="time">17 minutes ago</span> 
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="notification">4</span>
                    </a>
                    <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                        <li>
                            <div class="dropdown-title">You have 4 new notification</div>
                        </li>
                        <li>
                            <div class="notif-scroll scrollbar-outer">
                                <div class="notif-center">
                                    <a href="#">
                                        <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                        <div class="notif-content">
                                            <span class="block">
                                                New user registered
                                            </span>
                                            <span class="time">5 minutes ago</span> 
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                        <div class="notif-content">
                                            <span class="block">
                                                Rahmad commented on Admin
                                            </span>
                                            <span class="time">12 minutes ago</span> 
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-img"> 
                                            <img src="../assets/img/profile2.jpg" alt="Img Profile">
                                        </div>
                                        <div class="notif-content">
                                            <span class="block">
                                                Reza send messages to you
                                            </span>
                                            <span class="time">12 minutes ago</span> 
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                        <div class="notif-content">
                                            <span class="block">
                                                Farrah liked Admin
                                            </span>
                                            <span class="time">17 minutes ago</span> 
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                    </a>
                    <div class="dropdown-menu quick-actions animated fadeIn">
                        <div class="quick-actions-header">
                            <span class="title mb-1">Quick Actions</span>
                            <span class="subtitle op-7">Shortcuts</span>
                        </div>
                        <div class="quick-actions-scroll scrollbar-outer">
                            <div class="quick-actions-items">
                                <div class="row m-0">
                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <div class="avatar-item bg-danger rounded-circle">
                                                <i class="far fa-calendar-alt"></i>
                                            </div>
                                            <span class="text">Calendar</span>
                                        </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <div class="avatar-item bg-warning rounded-circle">
                                                <i class="fas fa-map"></i>
                                            </div>
                                            <span class="text">Maps</span>
                                        </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <div class="avatar-item bg-info rounded-circle">
                                                <i class="fas fa-file-excel"></i>
                                            </div>
                                            <span class="text">Reports</span>
                                        </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <div class="avatar-item bg-success rounded-circle">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <span class="text">Emails</span>
                                        </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <div class="avatar-item bg-primary rounded-circle">
                                                <i class="fas fa-file-invoice-dollar"></i>
                                            </div>
                                            <span class="text">Invoice</span>
                                        </div>
                                    </a>
                                    <a class="col-6 col-md-4 p-0" href="#">
                                        <div class="quick-actions-item">
                                            <div class="avatar-item bg-secondary rounded-circle">
                                                <i class="fas fa-credit-card"></i>
                                            </div>
                                            <span class="text">Payments</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link quick-sidebar-toggler">
                        <i class="fa fa-th"></i>
                    </a>
                </li>
                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                    <div class="u-text">
                                        <h4>Hizrian</h4>
                                        <p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">My Profile</a>
                                <a class="dropdown-item" href="#">My Balance</a>
                                <a class="dropdown-item" href="#">Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Logout</a>
                            </li>
                        </div>
                    </ul>
                </li>
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
