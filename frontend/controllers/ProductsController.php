<?php

namespace frontend\controllers;

class ProductsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionErp()
    {
        return $this->render('erp');
    }
    public function actionOdoo()
    {
        return $this->render('odoo');
    }
}
