<?php

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class Title extends ActiveRecord {

    public function rules() {
        return [
            [['name'], 'required'],
        ];
    }

}
