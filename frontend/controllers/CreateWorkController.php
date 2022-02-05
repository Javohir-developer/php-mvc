<?php
namespace frontend\controllers;
use common\companents\Controller;
use go\DB\DB;
use common\models\User;
class CreateWorkController extends Controller
{

    public function createWork(){
        $this->render('create-work');
    }


}