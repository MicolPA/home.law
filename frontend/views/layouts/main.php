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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">
    <link href="/frontend/web/wefonts/Gotham/Gotham-Medium.otf" rel="stylesheet">
    <?php $this->head() ?>
</head>

<body class="">
    <?php $this->beginBody() ?>

    <style>
        .nav-item {
            float: right !important;
        }
        
    </style>

    <div class="border-bottom">
        <div class="container px-4">
            <header class="d-flex flex-wrap justify-content-center py-2 align-items-center">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2 my-svg" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-4">
                        <img src="<?= Yii::getAlias("@web") ?>/images/logo.png" width="150px">
                    </span>
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="<?= Yii::getAlias("@web") ?>/propiedades" class="nav-link text-primary font-14">PROPIEDADES</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-primary font-14">RENTAS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-primary font-14">VENTAS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-primary font-14">AGENTES</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-primary font-14">CONTACTOS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-primary font-14">REP DOM </a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-primary font-14 pt-1"><img src="<?= Yii::getAlias("@web") ?>/images/bandera-rd.png" width="30px" ></a></li>
                </ul>
                <!--  <div class="text-end">
                  <button type="button" class="btn btn-outline-dark me-2">Login</button>
                  <button type="button" class="btn btn-warning">Sign-up</button>
                </div> -->
            </header>

        </div>
    </div>
    <section class="w-100" style="z-index: 1;position: absolute;">
        <div class="bg-danger w-50 float-end second-menu p-0">
            <div class="container">
                <div class="flex-wrap justify-content-center">
                    <!-- <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap" />
                        </svg>
                        <span class="fs-4">
                        </span>
                    </a> -->

                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="#" class="nav-link text-white font-12">EXPLORAR MAPA</a></li>
                        <li class="nav-item"><a href="<?= Yii::getAlias("@web") ?>/tasas-hipotecarias" class="nav-link text-white font-12">TASAS HIPOTECARIAS</a></li>
                        <li class="nav-item"><a href="<?= Yii::getAlias("@web") ?>/iniciar-sesion" class="nav-link text-white font-12">INICIAR SESIÓN</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white font-12">IDIOMA</a></li>
                        <!-- <li class="nav-item"><a href="#" class="nav-link text-white font-14">CONTACTOS</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <main role="main" class="flex-shrink-0 bg-secondary">
        <?= Alert::widget() ?>
        <?= $content ?>
    </main>

    <footer class="footer mt-5">
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-md-7">
                    <div class="pr-4">
                        <img src="/frontend/web/images/logo.png" width="120px">
                        <p class="mt-5 text-muted mb-5">
                            Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Aliquam, veniam deleniti dolor quis et provident doloribus ut eveniet, sed tenetur labore quaerat ab! Magnam ea repudiandae alias fugiat tenetur, nam obcaecati recusandae dignissimos inventore eos in, totam reprehenderit impedit, quaerat magni ipsam quasi cupiditate libero. Assumenda cupiditate perspiciatis aperiam ipsum.
                        </p>
                        <div >
                            <a href="#" class="btn btn-xs btn-danger rounded-3 px-4 mb-5 mr-2 font-12">EXPLORAR MAPA</a>
                            <a href="#" class="btn btn-xs btn-secondary rounded-3 px-4 mb-5 mr-2 font-12">CONVIERTETE EN ASOCIADO</a>
                            <a href="#" class="btn btn-xs btn-primary bg-primary rounded-3 px-4 mb-5 font-12">REGISTRATE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row p-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <ul class="list-unstyled text-dark">
                                <li class="text-primary mb-2 fw-bold">Lugares <br> más buscados</li>
                                <li>La Romana</li>
                                <li>Bayahibe</li>
                                <li>Cap Cana</li>
                                <li>Las Terrenas</li>
                                <li>La Romana</li>
                                <li>Bayahibe</li>
                                <li>Cap Cana</li>
                                <li>Las Terrenas</li>
                            </ul>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center">
                            <ul class="list-unstyled text-dark">
                                <li class="text-primary mb-2 fw-bold">Categorías <br> más buscadas</li>
                                <li>La Romana</li>
                                <li>Bayahibe</li>
                                <li>Cap Cana</li>
                                <li>Las Terrenas</li>
                                <li>La Romana</li>
                                <li>Bayahibe</li>
                                <li>Cap Cana</li>
                                <li>Las Terrenas</li>
                            </ul>
                        </div>
                    </div>

                </div>



            </div>
            <!-- <p class="pull-left">&copy; <? //= Html::encode(Yii::$app->name) 
                                                ?> <? //= date('Y') 
                                                                                    ?></p> -->
        </div>

        <div class="bg-gray mt-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 py-5 mt-5 text-center ">
                        <a href=""><i class=" text-gray mx-2 fa-brands h5 fa-facebook-f"></i></a>
                        <a href=""><i class=" text-gray mx-2 fa-brands h5 fa-whatsapp"></i></a>
                        <a href=""><i class=" text-gray mx-2 fa-brands h5 fa-twitter"></i></a>
                        <a href=""><i class=" text-gray mx-2 fa-brands h5 fa-instagram"></i></a>


                        <p class=" text-center pt-4 fw-bold-2 text-gray"> Copyright <i class="fa-regular fa-copyright"></i> Todos los derechos reservados 2022, BEST LISTING</p>
                    </div>

                    <div class="col-md-5 py-5 mt-5">
                        <div class="row pb-0 mb-n2 ">
                            <div class="col-md-7 mb-1"><a class="text-decoration-none" href="#"> <input type="text" class=" rounded-3 form-control small px-2" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1"> </a></div>

                            <div class="col-md-5 mb-0">
                                <div class="d-grid gap-1 col-md-5 ">
                                    <button class="btn btn-danger rounded-3 pl-4 pr-4 mb-5 mr-2 font-12" type="button">SUSCRIBIR</button>
                                </div>
                            </div>

                            <!-- <div class="col-md-5"> <a href="#" class="btn btn-xs btn-danger rounded-3 pl-4 pr-4 mb-5 mr-2 font-14">SUSCRIBIR</a></div> -->

                            <p class="small text-muted fw-bold-2">Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Distinctio totam non ut, ex commodi harum quia, quod veniam quo illum?</p>
                        </div>
                    </div>

                </div>

            </div>


    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
