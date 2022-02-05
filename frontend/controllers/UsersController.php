<?php
namespace frontend\controllers;
use common\companents\Controller;
use go\DB\DB;
use common\models\User;
class UsersController extends Controller
{

    public function registration(){
        $user = new User();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $res = $user->create($_POST);
            if ($res == 'ok'){
                $this->redirect('/create-work/create-work');
            }else{
                $this->render('registration', ['res'=>$res]);
            }
            return 'какая-то другая ошибка';
        }
        $this->render('registration');
    }

    public function login(){
        $user = new User();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $res = $user->login($_POST);
            if ($res == 'ok'){
                $UserOne = $this::db()->query('SELECT `rule` FROM `users` WHERE `email`=?', [$_COOKIE['email']])->assoc();
                if ($UserOne['rule'] === 'Admin'){
                    $this->redirect('admin');
                }
                $this->redirect('/create-work/create-work');
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