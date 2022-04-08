<?php
namespace frontend\config;

class Router
{
    public function run()
    {
        $route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        $routing = [

//            controller Site
            '/'             => ['controller' => 'Site', 'action' => 'index'],
            '/view'         => ['controller' => 'Site', 'action' => 'view'],
            '/views'        => ['controller' => 'Site', 'action' => 'views'],
            '/helped'       => ['controller' => 'Site', 'action' => 'helped'],
            '/payment'      => ['controller' => 'Site', 'action' => 'payment'],
            '/news'         => ['controller' => 'Site', 'action' => 'news'],
            '/newsViews'    => ['controller' => 'Site', 'action' => 'newsViews'],
            '/faq'          => ['controller' => 'Site', 'action' => 'faq'],
            '/attention'    => ['controller' => 'Site', 'action' => 'attention'],
            '/testimonials' => ['controller' => 'Site', 'action' => 'testimonials'],

//            controller CreateWork
            '/create-work/create-work'  => ['controller' => 'CreateWork', 'action' => 'createWork'],
            '/create-work/create'       => ['controller' => 'CreateWork', 'action' => 'create'],

//            controller Users
            '/user/registration'    => ['controller' => 'Users', 'action' => 'registration'],
            '/user/login'           => ['controller' => 'Users', 'action' => 'login'],
            '/user/logout'          => ['controller' => 'Users', 'action' => 'logout'],
        ];

        if (isset($routing[$route])){
            $controller_name = 'frontend\\controllers\\'.$routing[$route]['controller'].'Controller';
            $action_name = (string)$routing[$route]['action'];
            $controller_obj = new $controller_name();
            $controller_obj->$action_name();
        }else{
            echo "siz izlayotgan sahifa topilmadi: 404";
        }
    }

}