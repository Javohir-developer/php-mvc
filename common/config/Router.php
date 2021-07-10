<?php
namespace common\config;

class Router
{
    public function run()
    {
        $route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        $routing = [
//            SiteController uchun puthlar
            '/'         => ['controller' => 'Site', 'action' => 'index'],
            '/create'   => ['controller' => 'Site', 'action' => 'create'],
            '/update'   => ['controller' => 'Site', 'action' => 'update'],
            '/view'     => ['controller' => 'Site', 'action' => 'view'],
            '/delete'   => ['controller' => 'Site', 'action' => 'delete'],
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