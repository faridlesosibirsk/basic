<?php

namespace app\models\core;

use yii\base\Model;
use app\models\core\iPage;

class page implements iPage {
    public $Page = 'its';
    public function getPage() {
        return 'Page';
        
    }
    public function Print() {
    echo "Print";
    }

}
