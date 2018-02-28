<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        label span:nth-child(3), label span:nth-child(4) {
            color: red;
        }
    </style>
</head>
<body>
<?php
$Obj = $_POST;
$names = getParam("names");//这样接受就行了
$sex = getParam("sex");
$age = getParam("age");
var_dump($_SERVER);
function isPOST(){
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        return true;
    return false;
}
echo $sex;
function getParam($key,$defeat = ''){
    return trim(isset($_REQUEST[$key])?$_REQUEST[$key]:$defeat);
}

$regular = "/^[a-zA-Z ]*$/"

?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <label for="names">
        <span>姓名：</span><input type="text" id="names" name="names"
                               value="<?php echo empty($Obj["names"]) ? '' : $Obj["names"] ?>">
        <?php
        if ((isset($Obj["names"])) &&(empty($Obj["names"]))) {
            ?>
            <span>*姓名不能为空</span>
        <?php }
         if((isset($Obj["names"])) &&(!preg_match("/^[a-zA-Z ]*$/", $Obj["names"]))){
            ?>
        <span style="color:springgreen">姓名必须为字母和空格</span>
        <?php
        } ?>
    </label>
    <br>
    <label for="age">
        <span>年龄：</span>
        <select name="age" id="age">
            <option <?php echo (isset($Obj["age"]) && $Obj['age'] == "11") ? 'selected' : '' ?>>11</option>
            <option <?php echo (isset($Obj["age"]) && $Obj['age'] == "12") ? 'selected' : '' ?>>12</option>
            <option <?php echo (isset($Obj["age"]) && $Obj['age'] == "13") ? 'selected' : '' ?>>13</option>
        </select>
    </label>
    <br>
    <label for="sex">
        <span id="sex">性别</span>
        <input type="checkbox" name="sex"
               value="man" <?php echo (isset($Obj["sex"]) && $Obj["sex"] == 'man') ? 'checked' : '' ?>>男
        <input type="checkbox" name="sex"
               value="women" <?php echo (isset($Obj["sex"]) && $Obj["sex"] == 'women') ? 'checked' : '' ?>>女
        <?php
        if ($sex=='' && isPOST()) {
        ?>
            <span>*性别不能为空</span>
        <?php } ?>
    </label>
    <br/>
    <input type="submit" value="提交">
</form>
<?php if ((!empty($Obj["names"])) && (!empty($Obj["age"])) && (!empty($Obj["sex"])) &&(preg_match("/^[a-zA-Z ]*$/", $Obj["names"]))) { ?>
<div>
    您输入的信息为:
    <p>姓名为<span><?php echo $Obj["names"] ?></span></p>
    <p>年龄为<span><?php echo $Obj["age"] ?></span></p>
    <p>性别为<span><?php echo $Obj["sex"] ?></span></p>
</div>
<?php } ?>
</body>
</html>