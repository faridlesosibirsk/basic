<?php

namespace app\models;

use yii\db\ActiveRecord;

class title extends ActiveRecord {

    public $name;

    public function rules() {
        return [
            [['name'], 'required'],
        ];
    }

    public function createCommand($param0, $param1) {
        
    }

}

