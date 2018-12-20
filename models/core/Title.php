<?php

namespace app\models\core;

use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\core;

class Title extends core\DecoratorPage {

    public $Page;

    public function __construct(iPage $Page) {
        $this->Page = $Page;
    }
    
    public function Print() {
    echo "Title" . $this->Page->Print();
    }
}
