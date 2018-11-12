<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class EntryForm extends ActiveRecord {

    //public $name;
    //public $email;

    public function rules() {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }

}
