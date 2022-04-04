<?php
namespace frontend\controllers;
use common\companents\Controller;
use common\models\CreateWork;
class CreateWorkController extends Controller
{
    public $model = CreateWork::class;

    public function createWork(){
        $this->render('create-work');
    }

    public function create(){
        $model = new $this->model;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $res = $model->create($_POST);
            if ($res == 'ok'){
                $this->render('notification');
            }else{
                $this->render('create-work', ['res'=>$res]);
            }
            return 'какая-то другая ошибка';
        }
        $this->render('create');
    }


}