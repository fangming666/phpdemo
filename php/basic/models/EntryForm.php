<?php
/**
 * Created by PhpStorm.
 * User: fangMing
 * Date: 2017/11/28
 * Time: 14:02
 */
namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model{
    public $name;
    public $email;
    public $password;

    public function rules(){
        return [
            [['name','email',"password"],'required'],
            ['email','email'],
        ];
    }
    public function attributeLabels()
    {
        return [
            "name" => "fangMing",
            "email" => "1217215022@qq.com"
        ];
    }
}