<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\KindnessAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use app\models\Contact;

KindnessAsset::register($this);

function contact($id)
{
    if (($model = Contact::findone(['key' => $id])) !== null){
        return $model->value;
    }
    return null;
}

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
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <header class="main-header header-style-one">
            <section class="header-top">
                <div class="container">
                    <div class="header">
                        <div class="header-top-left">
                            <ul>
                                <li><a href="https://www.instagram.com/<?= contact('INSTAGRAM') ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.twitter.com/<?= contact('TWITTER') ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.facebook.com/<?= contact('FACEBOOK') ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>
                        <div class="header-top-right">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?= contact('EMAIL') ?></a>
                                </li>
                                <li>
                                    <p><i class="fa fa-phone" aria-hidden="true"></i></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--/header_top_area-->

            <!--/Header Top-->
            <section class="mainmenu-area">
                <div class="container">
                    <div class="logo pull-left">
                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                    </div>
                    <nav class="main-menu pull-left">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="index.php">Home</a>
                                </li>
                                <li><a href="index.php?r=site/about">About</a></li>
                                <li class="dropdown"><a href="index.php?r=site/gallery">Gallery</a>
                                </li>
                                <li class="dropdown"><a href="index.php?r=site/blog">Blog</a>
                                </li>
                                <li class="dropdown"><a href="index.php?r=site/causes">Causes</a>
                                </li>
                                <li class="dropdown"><a href="index.php?r=site/event">Event</a>
                                </li>
                                <li><a href="index.php?r=site/contact">Contact</a></li>
                            </ul>
                            <ul class="mobile-menu clearfix">
                                <li class="current dropdown"><a href="index.php">Home</a>
                                </li>
                                <li><a href="index.php?r=site/about">About</a></li>
                                <li class="dropdown"><a href="index.php?r=site/gallery">Gallery</a>
                                </li>
                                <li class="dropdown"><a href="index.php?r=site/blog">Blog</a>
                                </li>
                                <li class="dropdown"><a href="index.php?r=site/causes">Causes</a>
                                </li>
                                <li class="dropdown"><a href="index.php?r=site/event">Event</a>
                                </li>
                                <li><a href="index.php?r=site/contact">Contact</a></li>

                            </ul>
                        </div>
                    </nav>
                    <div class="signup">
                        <ul>
                            <li><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>login</a></li>
                            <li><a href="#"><span></span><i class="fa fa-user" aria-hidden="true"></i>signup</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--Main-Mane-->
            <section class="bounce-in-header">
                <div class="container">
                    <div class="logo pull-left">
                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                    </div>
                    <nav class="main-menu pull-left">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <!-- <li class="current dropdown"><a href="index.php">Home</a> -->
                                    <!-- <ul> -->
                                        <li class="current dropdown"><a href="index.php">Home</a>
                                        </li>
                                        <li><a href="index.php?r=site/about">About</a></li>
                                        <li class="dropdown"><a href="index.php?r=site/gallery">Gallery</a>
                                        </li>
                                        <li class="dropdown"><a href="index.php?r=site/blog">Blog</a>
                                        </li>
                                        <li class="dropdown"><a href="index.php?r=site/causes">Causes</a>
                                        </li>
                                        <li class="dropdown"><a href="index.php?r=site/event">Event</a>
                                        </li>
                                        <li><a href="index.php?r=site/contact">Contact</a></li>
                                    </ul>
                                    <ul class="mobile-menu clearfix">

                                        <li class="current dropdown"><a href="index.php">Home</a>
                                        </li>
                                        <li><a href="index.php?r=site/about">About</a></li>
                                        <li class="dropdown"><a href="index.php?r=site/gallery">Gallery</a>
                                        </li>
                                        <li class="dropdown"><a href="index.php?r=site/blog">Blog</a>
                                        </li>
                                        <li class="dropdown"><a href="index.php?r=site/causes">Causes</a>
                                        </li>
                                        <li class="dropdown"><a href="index.php?r=site/event">Event</a>
                                        </li>
                                        <li><a href="index.php?r=site/contact">Contact</a></li>
                                    </ul>
                        </div>
                    </nav>
                    <div class="signup">
                        <ul>
                            <li><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>login</a></li>
                            <li><a href="#"><span></span><i class="fa fa-user" aria-hidden="true"></i>signup</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--/Main-Menu-->
        </header>
        <main>
            <div>
                <?= $content ?>
            </div>
        </main>

        <!--.footer-section-->
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="footer-item">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="widget">
                                <h2>Information</h2>
                                <p>Lorem ipsum dolor sit amet, consecttur adipiscing egestas rhoncus Praesent Nunc pretium est placerat congue</p>
                                <h5><i class="fa fa-map-marker" aria-hidden="true"></i>8, Haji Mohshin road, Khulna</h5>
                                <h5><i class="fa fa-envelope-o" aria-hidden="true"></i>support@user.com</h5>
                                <h5><i class="fa fa-phone" aria-hidden="true"></i>1234 - 5678 - 9101</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="date-widget">
                                <h2>Latest Works</h2>
                                <h4>Food is Giving to them</h4>
                                <p>July 29, 2017 BY Donald</p>
                                <h4>Buy some candy for children</h4>
                                <p><span>February 15, 2017 BY</span> regaldev</p>
                                <h4>Build a building for shelter</h4>
                                <p>July 29, 2017 BY Donald</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feed-widget">
                                <h2>twitter feed</h2>
                                <div class="footercarosule">
                                    <div class="item">
                                        <p>Have managed to checkout successfully?
                                            We can help,just let us know if you need
                                            help via email (see our website)
                                        </p>
                                        <a href="#">www.themeforest.net</a>
                                        <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i>
                                            <h4>John Doe <span>regaldev</span></h4>
                                            <P>18 hours Ago</P>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>Have managed to checkout successfully?
                                            We can help,just let us know if you need
                                            help via email (see our website)
                                        </p>
                                        <a href="#">www.themeforest.net</a>
                                        <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i>
                                            <h4>John Doe <span>regaldev</span></h4>
                                            <P>18 hours Ago</P>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>Have managed to checkout successfully?
                                            We can help,just let us know if you need
                                            help via email (see our website)
                                        </p>
                                        <a href="#">www.themeforest.net</a>
                                        <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i>
                                            <h4>John Doe <span>regaldev</span></h4>
                                            <P>18 hours Ago</P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="gallery-widget">
                                <h2>Instagram Photos</h2>
                                <ul class="gallery">
                                    <li>
                                        <div class="img-holder">
                                            <img src="images/gallery/1.jpg" alt="Images">
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <img src="images/gallery/2.jpg" alt="Images">
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <img src="images/gallery/3.jpg" alt="Images">
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <img src="images/gallery/4.jpg" alt="Images">
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <img src="images/gallery/5.jpg" alt="Images">
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-holder">
                                            <img src="images/gallery/6.jpg" alt="Images">
                                            <div class="overlay">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p><span><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span> </p>
            </div>
        </footer>
        <!--/footer-section-->
    </div>




    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>