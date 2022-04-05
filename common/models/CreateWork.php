<?php
namespace common\models;
use common\companents\Module;
use common\companents\WgetCompanent;
use Exception;

class CreateWork extends Module
{

    public function create($post){
        $errors = array();
        $index = 1;
        $index1 = 1;
        $wget = new WgetCompanent();
        foreach($post as $p=>$val){
            if (empty($val)){
                array_push($errors, $p.' значение должно быть заполнено');
            }
        }
        if ((count($errors) == 0 && !empty($post['g-recaptcha-response'])) && (!empty($_FILES['images']) && !empty($_FILES['files']))){

            foreach($_FILES['files']['size'] as $p=>$val){
                if ($val > 5242880){
                    array_push($errors, '('.number_format($val / 1048576, 2).') каждый файл не должен быть больше 5MB');
                }
            }
            foreach($_FILES['images']['size'] as $p=>$val){
                if ($val > 5242880){
                    array_push($errors, '('.number_format($val / 1048576, 2).') каждый файл не должен быть больше 5MB');
                }
            }
            if ($_FILES['video']['size'] > 10485760){
                array_push($errors, '('.number_format($val / 1048576, 2).') каждый файл не должен быть больше 10MB');
            }
            $video_name = 10000 * microtime(true).'a'.$_FILES["video"]['name'];
            $wget->uploade($_FILES["video"]['tmp_name'],  '../web/assets/files/work-video/'.$video_name);
            if(count($errors) == 0){
                $id = $this::db()->query('SELECT `id` FROM users WHERE `email`=?', [$_COOKIE['email']])->row();
                foreach(array_combine($_FILES['files']['tmp_name'], $_FILES['files']['name']) as $tmp_name => $name){
                    $file_name = 10000 * microtime(true).'b'.$name;
                    $file_uploade = $wget->uploade($tmp_name,  '../web/assets/files/work-files/'.$file_name);
                    $val_file[$index++] = isset($file_uploade) ?  $file_name : false;
                }

                foreach(array_combine($_FILES['images']['tmp_name'], $_FILES['images']['name']) as $tmp_name1 => $name1){
                    $image_name1 = 10000 * microtime(true).'c'.$name1;
                    $image_uploade1 = $wget->uploade($tmp_name1,  '../web/assets/files/work-images/'.$image_name1);
                    $val_image1[$index1++] = isset($image_uploade1) ?  $image_name1 : false;
                }
                $values = [
                    [
                        $id['id'],          $post['name'],      $post['age'],
                        $post['adress'],    $post['telegram'],  $post['tell'],
                        $post['title'],     $post['price'],     $post['begin_date'],
                        $post['end_date'],  $post['country'],   $post['commit'],
                        $video_name,        $post['humo_card'], json_encode($val_file),    json_encode($val_image1),
                    ]
                ];
                $pattern = 'INSERT INTO `application` (`user_id`, `name`, `age`, `address`, `telegram`, `tell`, `title`, `price`, `begin_date`, `end_date`, `country`, `commit`, `video`,  `humo_card`, `files`, `images`) VALUES ?v';
                $data = [$values];
                try {
                    $this::db()->query($pattern, $data);
                } catch (Exception $e) {
                    array_push($errors, 'Ошибка при работе с базой данных: ',  $e->getMessage(), "\n" );
                }
                return 'ok';
            }else{
                $errors[]='Размер файла должен быть не более 5МБ.';
            }
            return $errors;
        }else{
            array_push($errors, "все поля должны быть заполнены");
            return $errors;
        }
    }
}