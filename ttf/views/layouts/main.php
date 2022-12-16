<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header class="fixed-top" id="header" style="">
    <section class="section-primary">
        <div class="row-primary">
            <?= Html::img('@web/images/logo.png', ['alt' => 'My logo', 'class'=> '']) ?>
            <?php
            NavBar::begin([
                'brandUrl' => Yii::$app->homeUrl,
                'options' => ['class' => 'navbar-expand-md nav-typefactor']
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'Nosotros', 'url' => ['/site/about']],
                    ['label' => 'Contacto', 'url' => ['/site/contact']],
                    ['label' => 'Servicios', 'url' => ['/site/services']],
                    ['label' => 'Blog', 'url' => ['/site/blog']],
                    Yii::$app->user->isGuest
                        ? ['label' => 'Login', 'url' => ['/site/login']]
                        : '<li class="nav-item">'
                            . Html::beginForm(['/site/logout'])
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'nav-link btn btn-link logout btn-dark']
                            )
                            . Html::endForm()
                            . '</li>'
                ]
            ]);
            NavBar::end();
            ?>
        </div>
    </section>
    
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="">
    <section class="footer-links">
        <div class="row-primary">
            <div class="footer-socials">
                <h2>Contacto</h2>
                <div class="contact-instagram">
                    <i class="fa-brands fa-instagram"></i>
                    <a href="#">@THETYFACTOR_</a>
                </div>
                <div class="contact-whatsapp">
                    <i class="fa-brands fa-whatsapp"></i>
                    <a href="#">@+58 424-1425367</a>
                </div>
                <div class="contact-facebook">
                    <i class="fa-brands fa-facebook"></i>
                    <a href="#">@THETYFACTOR</a>
                </div>
            </div>
            <div class="footer-links1">
                <h3>servicios</h3>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
            </div>
            <div class="footer-links2">
                <h3>Links</h3>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
            </div>
            <div class="footer-links3">
                <h3>Nosotros</h3>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
            </div>
            <div class="footer-links4">
                <h3>Blog</h3>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
            </div>
            <p class="footer-links-copy"><i class="fa-solid fa-circle"></i>¿como contratas nuestro servicio?</p>
        </div>
    </section>
    <section class="footer-bottom">
        <div class="row-primary">
            <ul>
                <li><a href="#">Términos y condiciones</a></li>
                <li><a href="#">Políticas de privacidad</a></li>
            </ul>
            <p>Copyright©2022</p>
        </div>
    </section>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
