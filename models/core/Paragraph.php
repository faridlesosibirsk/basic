<?php

namespace app\models\core;

use app\models\core;

class Paragraph extends DecoratorPage {

    private $page;

    function prints() {
        //$this->warp->Post();
        echo '<p>paragraf</p>'.$this->page->prints();
    }

    function __construct(core\IPage $page) { 
        $this->page = $page;
        //$this->warp = $Page;
    }

}
