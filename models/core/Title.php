<?php

namespace app\models\core;

use app\models\core;

class Title extends DecoratorPage {

    private $page;

    function prints() {
        //$this->warp->Post();
        echo '<h1>Title</h1>'.$this->page->prints();
    }

    function __construct(core\IPage $page) { 
        $this->page = $page;
        //$this->warp = $Page;
    }

}
