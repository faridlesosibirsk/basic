<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\EntryForm;
use Yii;
use app\models\Title;
use app\models\Paragraph;

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

    public function actionIts() {
        //$title = new Title();
        $title = Title::findOne('1');
        //$paragraph = new Paragraph();
        $paragraph = Paragraph::findOne('1');
        
        if (($title->load(Yii::$app->request->post()) && $title->validate()) &&
                ($paragraph->load(Yii::$app->request->post()) && $paragraph->validate())) {
            // данные в $model удачно проверены
            // делаем что-то полезное с $model ...
            //$title->save();
            //$title::updateAll(['id' => '1'], ['name' => 'name']);
            $title->id=1;
            $title->save();
            $title->update();
            //$paragraph->save();
            //$paragraph::updateAll(['id' => '1'], ['name' => 'name']);
            $paragraph->id=1;
            $paragraph->save();
            $paragraph->update();
            return $this->render('its-admin', ['title' => $title, 'paragraph' => $paragraph]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('its', ['title' => $title, 'paragraph' => $paragraph]);
        }
    }

}
