<html>
<head>
    <meta charset="UTF-8">
    <title>高级</title>
</head>
<body>
<?php
/**********1.时间函数*************/
echo date("Y/M/D") . "<br/>";
echo time() . "<br/>";
echo strtotime("now") . "<br/>"; //当前时间的时间戳
echo mktime(2, 2, 2, 12, 12, 2017) . "<br/>"
?>
<!----------2.include/require：引入外部的PHP文件----->
<?php include "head.php" ?>
</body>
</html>