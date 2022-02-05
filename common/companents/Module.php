<?php


namespace common\companents;
use common\config\Database;

class Module extends Database
{

    public static function find() {
        $class = get_called_class();
        return $newObj = new $class;
    }
    public function all(){
        return Module::find()->query(' SELECT * FROM ' . $this::find());
    }
    public function all1(){
        return Module::find()->query(' SELECT * FROM ' . $this->table_name1);
    }
}