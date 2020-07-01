<?php

namespace frontend\controllers;

class ServicesController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionPayInter()
    {
        return $this->render('pay-inter');
    }
    public function actionIctConsult()
    {
        return $this->render('ict-consult');
    }
    public function actionDigMarket()
    {
        return $this->render('dig-market');
    }
    
    public function actionWebDesign()
    {
        return $this->render('web-design');
    }
    public function actionSoftwareDev()
    {
        return $this->render('softwaredev');
    }

}
