<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use common\widgets\NavBarAgency;
use frontend\assets\AppAsset;
use frontend\assets\AppAssetIE9;
use yii\bootstrap\Modal;



AppAsset::register($this);
AppAssetIE9::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="page-top" class="index">
<?php $this->beginBody() ?>
    <?php
       NavBarAgency::begin([
            'brandLabel' => 'Start Bootstrap',
            'brandUrl' => '#page-top',
            'options' => [
                    'class' => 'navbar navbar-default navbar-custom navbar-fixed-top',
                    'id' => 'mainNav',
            ],
           'brandOptions' => ['class' => 'page-scroll']
        ]);
        $menuItems = [
            ['label' => 'Services', 'url' => '#services', 'linkOptions'=>['class'=>'page-scroll']],
            ['label' => 'Portfolio', 'url' => '#portfolio', 'linkOptions'=>['class'=>'page-scroll']],
            ['label' => 'About', 'url' => '#about', 'linkOptions'=>['class'=>'page-scroll']],
            ['label' => 'Team', 'url' => '#team', 'linkOptions'=>['class'=>'page-scroll']],
            ['label' => 'Contact', 'url' => '#contact', 'linkOptions'=>['class'=>'page-scroll']],

        ];
        echo Nav::widget([
            'options' => ['class' => 'nav navbar-nav navbar-right'],
            'items' => $menuItems,
            'encodeLabels' => false,
        ]);

        NavBarAgency::end();
    ?>

    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Studio!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

        <?= $content ?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Your Website 2016</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li>
                        <?php
                            Modal::begin([
                            'header' => '<h5>Privacy Policy</h5>',
                            'toggleButton' => ['tag' => 'a', 'label' => 'Privacy Policy', 'class' => 'link-bottom'],
                            ]);
                            echo $this->render('/site/privacy-policy');
                            Modal::end();
                         ?>
                    </li>
                    <li>
                        <?php
                        Modal::begin([
                            'header' => '<h5>Terms of use</h5>',
                            'toggleButton' => ['tag' => 'a', 'label' => 'Terms of use', 'class' => 'link-bottom'],
                        ]);
                        echo $this->render('/site/terms-of-use');
                        Modal::end();
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
