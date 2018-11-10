<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\EntryForm;
use app\models\title;
use app\models\paragraf;
use Yii;
//use GuzzleHttp\Client; // подключаем Guzzle
use yii\helpers\Url;
use yii\httpclient\Client;

class SiteController extends Controller {

    public function actionIndex() {
        return "Hello World!";
    }

    public function actionEntry() {
        $model = new EntryForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены
            // делаем что-то полезное с $model ...
            $model->save();
            $model::updateAll(['email' => '0'], ['name' => 'name']);
            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('entry', ['model' => $model]);
        }
    }
    
    public function actionAdmin() {
        $title = new title();
        $paragraf = new paragraf();

        if (($title->load(Yii::$app->request->post()) && $title->validate())
            and ($paragraf->load(Yii::$app->request->post()) && $paragraf->validate())) {
            return $this->render('kafedra', ['title' => $title, 
                'paragraf' => $paragraf]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('admin', ['title' => $title, 
                'paragraf' => $paragraf]);
        }
    }

}
