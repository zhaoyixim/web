<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use frontend\assets\AppAsset;
$this->title = 'hongjinwenhua';



$this->registerCssFile('@web/css/style.css');
$this->registerCssFile('@web/css/lazyload/bootstrapTheme.css');

$this->registerCssFile('@web/css/lazyload/owl.carousel.css');
$this->registerCssFile('@web/css/lazyload/owl.theme.css');

$this->registerJsFile('@web/js/lazyload/owl.carousel.js', ['depends' => ['frontend\assets\AppAsset'], 'position' => \yii\web\View::POS_END]);


?>
<div class="site-index">

    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?=Url::to('@web/images/indexblock/1.jpg')?>" alt="pic">
                    <div class="carousel-caption ">
                     gibfoasd
                    </div>
                </div>
                <div class="item">
                    <img src="<?=Url::to('@web/images/indexblock/2.jpg')?>" alt="pic">
                    <div class="carousel-caption ">
                        adsfasdfa
                    </div>
                </div>
                <div class="item">
                    <img src="<?=Url::to('@web/images/indexblock/3.jpg')?>" alt="pic">
                    <div class="carousel-caption ">
                        adsfasdfa
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- /Section: intro -->
    <div class="container b1">

        <div class="row">
            <div class="span12">
                            <div id="owl-demo" class="owl-carousel">
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl1.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl2.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl3.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl4.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl1.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl5.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl7.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl8.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl1.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl2.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl3.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl1.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl4.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl6.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl7.jpg',true)?>" alt="Lazy Owl Image"></div>
                                <div class="item"><img class="lazyOwl" data-src="<?=Url::to('@web/images/lazyload/owl8.jpg',true)?>" alt="Lazy Owl Image"></div>
                            </div>
            </div>
        </div>



    </div>

    <!-- Section: about -->


</div>
<?php $this->beginBlock('lazyload') ?>

$(document).ready(function() {

  $("#owl-demo").owlCarousel({
    items : 4,
    lazyLoad : true,
    navigation : true
  });

});
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['lazyload'], \yii\web\View::POS_END); ?>