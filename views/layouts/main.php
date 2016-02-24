<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?=Url::to('owlcarousel/owl.carousel.js')?>"></script>
    <link rel="shortcut icon" href="<?Url::to('images/uady-logo.png')?>">
    <?= Html::csrfMetaTags() ?>
    <?php $this->title = 'Sistema de Gestión Ambiental'?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="preloader">
    <div id="status"></div>
</div>

<!-- Home start -->

<section id="home" class="pfblock-image screen-height">
    <div class="home-overlay"></div>
    <div class="intro">
        <!--<div class="start">Hello, my name is John Doe and I am</div>-->
        <?= Html::img('images/sga_logo.png', ['class' => 'main-logo']) ?>
        <h1>Bienvenido al Programa de Gestión Ambiental UADY </h1>
        <!--<div class="start">creating modern and responsive Web Application</div>-->
    </div>

    <a href="#about">
        <div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
        </div>
    </a>

</section>

<!-- Home end -->

<!-- Navigation start -->

<header class="header">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('images/sga-logo.png', ['style' => 'max-width: 100px','class'=>'img-responsive']),
        'brandUrl' => '#home',//Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-custom',
            'role' => 'navigation'
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Acerca', 'url' => '#about'],
            ['label' => 'Sistema de Gestión Ambiental', 'url' => '#sga'],
                ['label' => 'Directorio', 'url' => '#directory'],
            ['label' => '¡Únete!', 'url' => '#socialService'],
            ['label' => 'Sitios de Interés', 'url' => '#otherSites'],
            ['label' => 'Diplomado', 'url' => '#training'],
            ['label' => 'Procedimientos Y Fotmatos', 'url' => '#proceduresAndFormats'],
        ],
    ]);
    NavBar::end();
    ?>
</header>


<?= $content ?>


<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">

                <ul class="social-links">
                    <li><a href="https://www.facebook.com/sga.uady" title="Facebook" data-toggle="tooltip" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/ambientaluady" title="Twitter" data-toggle="tooltip" class="wow fadeInUp" data-wow-delay=".1s"><i
                                class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.flickr.com/people/140277175@N03/" class="wow fadeInUp" data-wow-delay=".4s" title="Flickr" data-toggle="tooltip"><i class="fa fa-flickr"></i></a>
                    </li>
                    <li><a href="mailto:ambiental@correo.uady.mx" title="Contacto" data-toggle="tooltip" class="wow fadeInUp" data-wow-delay=".5s"><i
                                class="fa fa-envelope"></i></a></li>
                </ul>

            </div>

        </div><!-- .row -->
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <b>Dirección General de Planeación y Efectividad Institucional</b><br/>
                Calle 60 No. 491-A x 57<br> Centro,
                C.P. 97000<br />
                +52 (999) 930 09 00<br> Ext. 1326<br />
                Mérida, Yucatán, México<br />
            </div>
            <div class="col-lg-4">
                <b>Administración del Sistema de Gestión Ambiental</b><br/>
                Calle 62 No. 471-A
                x 55 y 57 <br> Centro Depto. 4 altos<br> C.P. 97000<br />
                +52 (999)  928-52-83<br />
                Mérida, Yucatán, México<br />
                ambiental@correo.uady.mx<br>
            </div>
        </div>
            <p class="copyright" style="margin-top: 1em">© Todos los Derechos Reservados Dirección General de Planeación y Efectividad
                Institucional, UADY <?= date("Y"); ?>. Esta página puede ser reproducida con fines no lucrativos,
                siempre y cuando no se mutile, se cite la fuente completa y su dirección
                electrónica,
                de otra forma requiere permiso previo por escrito de la institución.</p>
    </div><!-- .container -->
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
