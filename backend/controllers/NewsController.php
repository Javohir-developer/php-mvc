<?php
namespace backend\controllers;
use common\companents\Controller;
use common\models\News;
class NewsController extends Controller
{
    
    public function index(){
        $news = News::db()->query('SELECT * FROM `news`')->objects();
        $this->render('index', ['news' => $news]);
    }

    public function create(){
        $news = new News();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $res = $news->create($_POST);
            if ($res == 'ok'){
                $this->redirect('/news/index');
            }else{
                $this->render('create', ['res'=>$res]);
            }
            return 'какая-то другая ошибка';
        }
        $this->render('create');
    }

    public function update(){
        $news = new News();
        $news_data = $news::db()->query('SELECT * FROM `news` WHERE `id`=?i', [$_GET['id']])->row();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $res = $news->update($_POST, $_GET['id']);
            if ($res == 'ok'){
                $this->redirect('/news/index');
            }else{
                $this->render('update?id='.$_GET['id'], ['res'=>$res, 'news'=>$news_data]);
            }
            return 'какая-то другая ошибка';
        }
        $this->render('update', ['news'=>$news_data]);
    }

    public function delete(){
        $news = new News();
        if (!empty($id = $_GET['id'])){
            $news->delete($id);
            if (isset($_COOKIE['errors'])) {
                unset($_COOKIE['errors']);
                setcookie('errors', '', time() - 3600, '/'); // empty value and old timestamp
            }
            $this->redirect('/news/index');
        }else{
            setcookie('errors', "Id недоступен", time() + (60), "/"); // 60 sec
            $this->redirect('/news/index');
        }

    }

}