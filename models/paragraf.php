<?php

namespace app\models;

use yii\db\ActiveRecord;

class paragraf extends ActiveRecord {

    //public $name;

    public function rules() {
        return [
            [['name'], 'required'],
        ];
    }

}

