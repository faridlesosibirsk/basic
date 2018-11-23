<?php

namespace app\models;

use yii\base\Model;

class Rrrr extends Model {

    public $y = array();
    public $x = '{';

    public function get() {
        $row = 1;
        if (($handle = fopen("29263.01.11.2018.20.11.2018.1.0.0.ru.utf8.00000000.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                $num = count($data);
                //echo "<p> $num полей в строке $row: <br /></p>\n";
                $row++;
                if ($row > 8) {
                    for ($c = 0; $c < $num; $c++) {
                        //echo $data[$c] . "<br />\n";
                        if ($c == 1) {
                            echo $data[$c] . "<br />\n";
                            //$this->x = $this->x . $row . ':' . $data[$c] . ',';
                            array_push($this->y, array($row-1, $data[$c]));
                        }
                    }
                }
            }
            var_dump($this->y);
            //var_dump($this->x . '}');
            fclose($handle);
        }
    }

}
