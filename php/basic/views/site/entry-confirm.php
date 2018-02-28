<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/28
 * Time: 14:20
 */

use yii\helpers\Html;

?>
<p>
    您输入的信息如下：
</p>
<ul>
    <li><label>Name</label>:<?=Html::encode($model->name) ?></li>
    <li><label>Email</label>:<?=Html::encode($model->email) ?></li>
    <li><label>password</label><?=Html::encode($model->password)?></li>
</ul>
