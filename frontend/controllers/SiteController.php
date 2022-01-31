<?php
namespace frontend\controllers;
use common\companents\Controller;
use go\DB\DB;
use common\models\User;
class SiteController extends Controller
{
    
    public function index(){
        
        $this->render('index');
    }


    public function helped(){
        $this->render('helped');
    }

    public function news(){
        $this->render('news');
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

}