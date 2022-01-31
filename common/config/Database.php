<?php
namespace common\config;
use go\DB\DB;

class Database
{
    public static function db(){
        $params = array(
            'host'     => 'localhost',
            'username' => 'root',
            'password' => '@Javohir1998',
            'dbname'   => 'tourism',
            'charset'  => 'utf8',
            '_debug'   => true,
            '_prefix'  => 'p_',
        );
        $db = DB::create($params, 'mysql');
        return $db;
    }

}