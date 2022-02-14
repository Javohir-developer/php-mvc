<?php
namespace backend\controllers;
use common\companents\Controller;
use go\DB\DB;
use common\models\User;
class SiteController extends Controller
{
    
    public function index(){
        $this->render('index');
    }

    public function login(){
        $user = new User();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $res = $user->login($_POST);
            if ($res == 'ok'){
                $UserOne = User::db()->query('SELECT `rule` FROM `users` WHERE `email`=?', [$_POST['email']])->assoc();
                if ($UserOne[0]['rule'] === 'Admin'){
                    $this->redirect('/');
                }
            }else{
                $this->render('login', ['res'=>$res]);
            }
            return 'какая-то другая ошибка';
        }
        $this->render('login');
    }

    public function logout(){
        if (isset($_COOKIE['email'])) {
            unset($_COOKIE['email']);
            setcookie('email', '', time() - 3600, '/');
        }
        $this->redirect('/');
    }

}