<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/28
 * Time: 14:19
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = "Login";
?>
<h1><?= Html::encode($this->title)?></h1>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name')->label("请输入正确的姓名") ?>
<?= $form->field($model,"password")->label("请输入你的密码")->passwordInput()?>
<?= $form->field($model, 'email')->label("请输入正确的邮箱")?>
<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end() ?>
