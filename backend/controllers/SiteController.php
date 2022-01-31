<?php
namespace backend\controllers;
use common\companents\Controller;
use go\DB\DB;
use common\models\User;
class SiteController extends Controller
{
    
    public function index(){
        $this->render('index', ['id'=>10]);
    }


    public function create(){
        $this->render('create', ['id'=>10]);
    }

}