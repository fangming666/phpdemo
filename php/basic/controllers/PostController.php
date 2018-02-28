<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/29
 * Time: 13:57
 */

namespace app\controllers;

use yii\web\Controller;

class PostController extends Controller
{
    public function actionView($id,$version=null){
        return $this->render("view");
    }

}