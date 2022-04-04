<?php
namespace common\models;
use common\companents\Module;
use common\companents\WgetCompanent;
use Exception;

class News extends Module
{

    public function create($post){
        $errors = array();
        $wget = new WgetCompanent();
        if (!empty($post['title_ru']) &&  strlen($post['text_ru']) > 20 && !empty($_FILES['image']['name'])){
            if($_FILES['image']['size'] < 2097152){
                $file_name = 10000 * microtime(true).$_FILES["image"]['name'];
                if ($wget->uploade($_FILES["image"]['tmp_name'],  '../../frontend/web/assets/files/news/'.$file_name)) {
                    $values = [
                        [$post['title_ru'], $post['text_ru'], isset($post['status'])  ? $post['status'] : 0, $file_name, !empty($post['date']) ? $post['date'] : date('Y-m-d') ]
                    ];
                    $pattern = 'INSERT INTO `news` (`title_ru`, `text_ru`, `status`, `image`, `date`) VALUES ?v';
                    $data = [$values];
                    try {
                        $this::db()->query($pattern, $data);
                    } catch (go\DB\Exceptions\Query $e) {
                        array_push($errors, 'Ошибка при работе с базой данных: ',  $e->getError(), "\n" );
                    }
                    return 'ok';
                } else {
                    $errors[]='ошибка загрузки файла';
                }
            }else{
                $errors[]='Размер файла должен быть не более 2МБ.';
            }
            return $errors;
        }else{
            array_push($errors, "title, Image, text значение должно быть заполнено");
            return $errors;
        }
    }
    public function update($post, $id){
        $errors = array();
        $wget = new WgetCompanent();
        if (!empty($post['id'])){
            if(!empty($_FILES['image']['name']) &&  $_FILES['image']['size'] < 2097152){
                $file_name = 10000 * microtime(true).$_FILES["image"]['name'];
                if (!$wget->uploade($_FILES["image"]['tmp_name'],  '../../frontend/web/assets/files/news/'.$file_name)) {
                    $errors[]='ошибка загрузки файла';
                }
            }else{
                $errors[]='Размер файла должен быть не более 2МБ.';
            }
            $set = [
                'title_ru' => !empty($post['title_ru']) ? $post['title_ru'] : null,
                'text_ru' => !empty($post['text_ru']) ? $post['text_ru'] : null,
                'status' => !empty($post['status'])  ? $post['status'] : null,
                'image' => !empty($file_name)  ? $file_name : null,
                'date' => !empty($post['date']) ? $post['date'] : null,
            ];
            $pattern = 'UPDATE `news` SET ?set WHERE `id`=?';
            $data = [$set, $id];
            try {
                $this::db()->query($pattern, $data);
            } catch (go\DB\Exceptions\Query $e) {
                array_push($errors, 'Ошибка при работе с базой данных: ',  $e->getError(), "\n" );
            }
            return 'ok';
        }else{
            array_push($errors, "Id значение неть");
        }
        return $errors;
    }

    public function delete($id){
        try {
            $this::db()->query('DELETE FROM news WHERE `id`=?', [$id]);
        } catch (go\DB\Exceptions\Query $e) {
            return $e->getError(); exit();
        }
        return 'ok';
    }

}