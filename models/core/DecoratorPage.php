<?php

namespace app\models\core;

use app\models\core;

abstract class DecoratorPage implements IPage {

    abstract function prints();
}
