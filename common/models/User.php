<?php
namespace common\models;
use common\companents\Module;
use Exception;
use go\DB\Helpers\Iterators\Objects;

class User extends Module
{

    public function create($post){
        $errors = array();
        if ($post['email'] && $post['phone'] && $post['password']){
            try {
                $UserOne = $this::db()->query('SELECT `email`, `phone` FROM `users` WHERE `email`=? OR `phone`=?', [$post['email'], $post['phone']])->assoc();
            } catch (Exception $e) {
                 array_push($errors, 'Ошибка проверка при работе с базой данных: ',  $e->getMessage(), "\n" );
            }
            if ($UserOne) {
                if (in_array($post['email'], array_column($UserOne, 'email'))) {
                      array_push($errors, "Эл. адрес уже существует");
                }
                if (in_array($post['phone'], array_column($UserOne, 'phone'))) {
                    array_push($errors, "Phone уже существует");
                }
            }
            if (count($errors) == 0) {
                $values = [
                    [$post['email'], $post['phone'], md5($post['password']), date('Y-m-d')]
                ];

                $pattern = 'INSERT INTO `users` (`email`, `phone`, `password`, `date`) VALUES ?v';
                $data = [$values];

                try {
                    $this::db()->query($pattern, $data);
                } catch (Exception $e) {
                    array_push($errors, 'Ошибка при работе с базой данных: ',  $e->getMessage(), "\n" );
                }
                setcookie('email', $post['email'], time() + (86400 * 1), "/"); // 86400 = 1 day
                setcookie('status', "Вы вошли в систему", time() + (60), "/"); // 60 sec
                return 'ok';
            }
            return $errors;

        }else{
            array_push($errors, "Email, Phone, Password значение должно быть заполнено");
            return $errors;
        }
    }

    public function login($post){
        $errors = array();
        if ($post['email'] && $post['password']){
            try {
                $UserOne = $this::db()->query('SELECT `email` FROM `users` WHERE `email`=? AND `password`=?', [$post['email'], md5($post['password'])])->assoc();
            } catch (Exception $e) {
                array_push($errors, 'Ошибка проверка при работе с базой данных: ',  $e->getMessage(), "\n" );
            }
            if ($UserOne) {
                setcookie('email', $post['email'], time() + (86400 * 1), "/"); // 86400 = 1 day
                setcookie('status', "Вы вошли в систему", time() + (60), "/"); // 60 sec
                return 'ok';
            }
            array_push($errors, "логин или пароль неверный");
            return $errors;

        }else{
            array_push($errors, "Email, Phone, Password значение должно быть заполнено");
            return $errors;
        }
    }
}