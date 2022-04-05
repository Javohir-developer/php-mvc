<?php
namespace frontend\controllers;
use common\companents\Controller;
use common\models\News;
use go\DB\DB;
use common\models\User;
class SiteController extends Controller
{
    public $model = News::class;
    
    public function index(){
        $new = new $this->model;
        $news = $new::db()->query('SELECT id, title_ru, text_ru, image, date FROM `news` WHERE status = 1 ORDER BY id DESC LIMIT 6')->objects();
        $applications = $new::db()->query('SELECT id, title, price, images, files FROM `application` WHERE status = 1 and status_help = 0 ORDER BY id DESC LIMIT 12')->objects();
        $this->render('index', ['news' => $news, 'applications' => $applications]);
    }

    public function view(){
        $this->render('view');
    }
    public function helped(){
        $this->render('helped');
    }

    public function news(){
        $new =  new $this->model;
        $news = $new::db()->query('SELECT * FROM `news` LIMIT 9')->objects();
        $this->render('news', ['news' => $news]);
    }

    public function newsViews(){
        $new = new $this->model;
        $news = $new::db()->query('SELECT * FROM `news` WHERE `id`=?i', [$_GET['id']])->row();
        $this->render('newsViews', ['news' => $news]);
    }

    public function faq(){
        $this->render('faq');
    }

    public function testimonials(){
        $this->render('testimonials');
    }


    public function createWork(){
        $this->render('create-work');
    }

    public function attention(){
        $this->render('attention');
    }

    public function registration(){
        $this->render('registration');
    }

}