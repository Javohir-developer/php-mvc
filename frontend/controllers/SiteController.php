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
        $news = $new::db()->query('SELECT * FROM `news` LIMIT 6')->objects();
        $this->render('index', ['news' => $news]);
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