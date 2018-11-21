<?php

namespace app\controllers;

use app\models\core;
use yii\web\Controller;
use Yii;
use app\models\core\Page;
use app\models\core\Title;
use app\models\core\Paragraph;
use app\models\rrrr;


class SiteController extends Controller {

    public function actionIndex() {
        return "Hello World!";
    }

    public function actionIts() {        
        //$model = new Page();
        $model = new Paragraph(new Title(new Page()));
        $this->layout = '@app/views/layouts/mainits';
        return $this->render('its', ['model' => $model]);
    }
    
    public function actionRrrr() {
        $model= new \app\models\rrrr();
        
        return $this->render('rrrr', ['model' => $model]);
    }

}
