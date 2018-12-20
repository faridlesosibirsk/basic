<?php

namespace app\models\core;

use app\models\core\iPage;

class DecoratorPage implements iPage {
    public function Print() {
    echo "DecoratorPage";
    }
}

