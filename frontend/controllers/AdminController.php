<?php
namespace frontend\controllers;
use common\companents\Controller;
use go\DB\DB;
use common\models\User;
class AdminController extends Controller
{
    
    public function index(){
        
        $this->render('index');
    }
}