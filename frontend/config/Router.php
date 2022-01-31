<?php
namespace frontend\config;

class Router
{
    public function run()
    {
        $route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        $routing = [
//            SiteController uchun puthlar
            '/'         => ['controller' => 'Site', 'action' => 'index'],
            '/helped'   => ['controller' => 'Site', 'action' => 'helped'],
            '/news'   => ['controller' => 'Site', 'action' => 'news'],
            '/faq'     => ['controller' => 'Site', 'action' => 'faq'],
            '/testimonials'   => ['controller' => 'Site', 'action' => 'testimonials'],
            '/create-work'   => ['controller' => 'Site', 'action' => 'createWork'],
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