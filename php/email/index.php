<html>
<head>
    <meta charset="utf-8">
    <title>发送邮件</title>
</head>
<body>

<?php
header("content-type:text/html;charset=utf-8");
ini_set("magic_quotes_runtime",0);
require './phpmailer/class.phpmailer.php';
require './phpmailer/class.smtp.php';
try {
    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->CharSet='UTF-8'; //设置邮件的字符编码，这很重要，不然中文乱码
    $mail->SMTPAuth = true; //开启认证
    $mail->Port = 25;
    $mail->Host = "smtp.163.com";
    $mail->Username = "17852018887@163.com";
    $mail->Password = "fm0825";
//$mail->IsSendmail(); //如果没有sendmail组件就注释掉，否则出现“Could not execute: /var/qmail/bin/sendmail ”的错误提示
    $mail->AddReplyTo("1217215022@qq.com","mckee");//回复地址
    $mail->From = "17852018887@163.com";
    $mail->FromName = "test.email";
    $to = "1217215022@qq.com";
    $mail->AddAddress($to);
    $mail->Subject = "phpmailer测试标题";
    $mail->Body = "<h1>phpmail演示</h1>这是php点点通（<font color=red>www.phpddt.com</font>）对phpmailer的测试内容";
    $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; //当邮件不支持html时备用显示，可以省略
    $mail->WordWrap = 80; // 设置每行字符串的长度
//$mail->AddAttachment("f:/test.png"); //可以添加附件
    $mail->IsHTML(true);
    $mail->Send();
    echo '邮件已发送';
} catch (phpmailerException $e) {
    echo "邮件发送失败：".$e->errorMessage();
}
?>

</body>
</html>