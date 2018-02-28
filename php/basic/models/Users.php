<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/30
 * Time: 16:32
 */

namespace app\models;

use yii\db\ActiveRecord;


class Users extends ActiveRecord
{
    const SCENARIO_LOGIN = "login";
    const SCENARIO_REGISTER = "register";

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_LOGIN] = ['username', 'password'];
        $scenarios[self::SCENARIO_REGISTER] = ['username', 'email', 'password'];
        return $scenarios;
    }

    public function rules()
    {
        return [
          [["name","email","subject","body"],"required"],

          ["email","email"]
        ];
    }
}