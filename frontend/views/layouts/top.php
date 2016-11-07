<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;

use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <?php $this->registerCssFile('font-awesome/css/font-awesome.min.css');?>
    <?php $this->registerCssFile('css/nivo-lightbox.css');?>
    <?php $this->registerCssFile('css/nivo-lightbox-theme/default/default.css');?>
    <?php $this->registerCssFile('css/animate.css');?>
    <?php $this->registerCssFile('css/style.css');?>
    <?php $this->registerCssFile('color/default.css');?>
    <!-- Core JavaScript Files -->
    <?php $this->registerJsFile('js/jquery.min.js');?>
    <?php $this->registerJsFile('js/bootstrap.min.js');?>
    <?php $this->registerJsFile('js/jquery.easing.min.js');?>
    <?php $this->registerJsFile('js/classie.js');?>
    <?php $this->registerJsFile('js/gnmenu.js');?>
    <?php $this->registerJsFile('js/jquery.scrollTo.js');?>
    <?php $this->registerJsFile('js/nivo-lightbox.min.js');?>
    <?php $this->registerJsFile('js/stellar.js');?>
    <?php $this->registerJsFile('js/custom.js');?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>




<body data-spy="scroll">

<?php $this->beginBody() ?>

<div class="wrap">

    <div class="container">
        <ul id="gn-menu" class="gn-menu-main">
            <li class="gn-trigger">
                <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                <nav class="gn-menu-wrapper">
                    <div class="gn-scroller">
                        <ul class="gn-menu">
                            <li class="gn-search-item">
                                <input placeholder="Search" type="search" class="gn-search">
                                <a class="gn-icon gn-icon-search"><span>Search</span></a>
                            </li>
                            <li>
                                <a href="#about" class="gn-icon gn-icon-download">About</a>
                            </li>
                            <li><a href="#service" class="gn-icon gn-icon-cog">Service</a></li>
                            <li><a href="#works" class="gn-icon gn-icon-help">Works</a></li>
                            <li>
                                <a href="#contact" class="gn-icon gn-icon-archive">Contact</a>
                            </li>
                        </ul>
                    </div><!-- /gn-scroller -->
                </nav>
            </li>
            <li><a href="index.html">NINESTARS</a></li>
            <li class="hidden-xs">
                <ul class="company-social">
                    <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                    <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<footer class="footer">


        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <p>&copy; Ninestars - Theme</p>
                    <div class="credits">
                        <!--
                            All the links in the footer should remain intact.
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Ninestars
                        -->
                        <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>

    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
