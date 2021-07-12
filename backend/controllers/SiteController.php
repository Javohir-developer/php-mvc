<?php
namespace backend\controllers;
use backend\companents\Controller;

class SiteController extends Controller
{
    public function index(){
        $this->render('index', ['id'=>10]);
    }


    public function create(){
//        echo $_GET['id'];
        $this->render('index', ['id'=>10]);
    }

}