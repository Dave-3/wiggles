<?

use frontend\assets\IndexAsset;
use yii\helpers\Html;

IndexAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js" lang="<?= Yii::$app->language ?>">
	
<!-- Mirrored from rockstheme.com/rocks/lopard-live/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jun 2020 17:51:53 GMT -->
<head>
		<meta charset="<?= Yii::$app->charset ?>"">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Home-1 | Lopard</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php $this->registerCsrfMetaTags() ?>
        	<title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">
	</head>
		<body>
<?php $this->beginBody() ?>
<?= $this->render('nav.php')?>


    
	<?= $content ?>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

       
     
        <!--End of Blog Area-->
        <!-- Start Footer bottom Area -->
        <footer class="footer1">
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="footer-content logo-footer">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                    	<a class="footer-black-logo" href="#"><img src="img/logo/logo2.png" alt=""></a>
                                    </div>
                                    <p>
                                        Are you looking for professional advice for your new business. Are you looking for professional advice for your new business. Are you looking for professional advice for your new business.
                                    </p>
                                    <div class="subs-feilds">
                                        <div class="suscribe-input">
                                            <input type="email" class="email form-control width-80" id="sus_email" placeholder="Type Email">
                                            <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Services Link</h4>
                                    <ul class="footer-list">
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Agency </a></li>
                                        <li><a href="#">Social media</a></li>
                                        <li><a href="#">Branding</a></li>
                                        <li><a href="#">Design </a></li>
                                    </ul>
                                    <ul class="footer-list hidden-sm">
										<li><a href="#">Search engine</a></li>
                                        <li><a href="#">Online support</a></li>
                                        <li><a href="#">Development</a></li>
                                        <li><a href="#">Pay per click</a></li>
                                        <li><a href="#">Event activation</a></li>
									</ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="footer-content last-content">
                                <div class="footer-head">
                                    <h4>Information</h4> 
                                    <div class="footer-contacts">
										<p><span>Tel :</span> +0890-564-5644</p>
										<p><span>Email :</span> info@lopard3.com</p>
										<p><span>Location :</span> House- 65/4, London</p>
									</div> 
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2019
                                    <a href="#">Lopard</a> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		
	<!-- all js here -->

	</body>
<?php $this->endBody() ?>
<!-- Mirrored from rockstheme.com/rocks/lopard-live/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jun 2020 17:53:54 GMT -->
</html>
<?php $this->endPage() ?>