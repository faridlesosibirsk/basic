<?php

namespace app\controllers;

use app\models\core;
use yii\web\Controller;
use app\models\EntryForm;
use Yii;
use app\models\itsController;
use app\models\core\Page;
use app\models\core\DecoratorPage;
use app\models\core\iPage;
use app\models\core\Title;

class SiteController extends Controller {

    public function actionIndex() {
        //return "Hello World!";
    }

    public function actionIts() {        
        $model = new Title(new Page);
        $this->layout = '@app/views/layouts/sibgu';
        return $this->render('its', ['model' => $model]);
    }

}
