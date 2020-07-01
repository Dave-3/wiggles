<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Start Bottom Header -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Contact us</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <div class="map-area area-padding bg-color">
            <div class="container">
                <div class="row">
                    <!-- Start Right Google Map -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start Map -->
                        <div class="map-area">
                            <div id="googleMap" style="width:100%;height:410px;"></div>
                        </div>
                        <!-- End Map -->
                    </div>
                    <!-- End Right Google Map -->
                </div>
            </div>
        </div>
        <!-- Start contact Area -->
        <div class="contact-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="contact-inner">
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-mobile"></i>
                                    <p>
                                        Call : +254727309037
                                        <span>Monday-Friday (10am-18pm)</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-envelope-o"></i>
                                    <p>
                                        Email :  tech.wiggles@gmail.com<br>
                                        <span>Web: www.rockstheme.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-map-marker"></i>
                                    <p>
                                        Location : Nairobi, Westlands<br>
                                        <span>23 house/3 Road</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-6 col-sm-6 col-xs-12">
                         <div class="contact-images">
                             <img src="img/about/cb1.jpg" alt="">
                         </div>
                    </div>
                    <!-- Start Left contact -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="col-lg-5">
                                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    
                                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                    
                                    <?= $form->field($model, 'email') ?>
                    
                                    <?= $form->field($model, 'subject') ?>
                    
                                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                    
                                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                                    ]) ?>
                    
                                    <div class="form-group">
                                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                    </div>
                    
                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>
            </div>
        </div>
        <!-- End Contact Area -->


