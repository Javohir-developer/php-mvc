<?php
namespace backend\config;

class Router
{
    public function run()
    {
        $route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        $routing = [

//            Controller Site
            '/' => ['controller' => 'Site', 'action' => !empty($_COOKIE['email']) ? 'index' : 'login'],
            '/login' => ['controller' => 'Site', 'action' => 'login'],
            '/logout' => ['controller' => 'Site', 'action' => 'logout'],

//            controller News
            '/news/index' => ['controller' => 'News', 'action' => 'index'],
            '/news/create' => ['controller' => 'News', 'action' => 'create'],
            '/news/update' => ['controller' => 'News', 'action' => 'update'],
            '/news/delete' => ['controller' => 'News', 'action' => 'delete'],

//            controller News
            '/works/index' => ['controller' => 'Works', 'action' => 'index'],
        ];
        if (isset($routing[$route])){
            $controller_name = 'backend\\controllers\\'.$routing[$route]['controller'].'Controller';
            $action_name = (string)$routing[$route]['action'];
            $controller_obj = new $controller_name();
            $controller_obj->$action_name();
        }else{
            echo "siz izlayotgan sahifa topilmadi: 404";
        }
    }

}