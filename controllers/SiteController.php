<?php

namespace app\controllers;

use app\models\core;
use yii\web\Controller;
use app\models\EntryForm;
use Yii;
use app\models\itsController;
use app\models\core\Page;


class SiteController extends Controller {

    public function actionIndex() {
        return "Hello World!";
    }

    public function actionIts() {        
        $model = new Page();
        $this->layout = '@app/views/layouts/mainits';
        return $this->render('its', ['model' => $model]);
    }

}
