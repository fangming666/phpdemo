<html>
<head>
    <meta charset="UTF-8">
    <title>base</title>
</head>
<body>
<?php
$a = mb_strlen("你好世界", 'utf-8');
echo $a;
echo PHP_EOL;
echo "<br/>";


$x = "hello";
$y = "world";
print_r($x . "" . $y);
echo PHP_EOL;
echo "<br/>";


print_r(explode('.', $x));
echo PHP_EOL;
$a0 = 0;
$b0 = 0;
echo $a0++;
echo ++$b0;
echo PHP_EOL;
echo "<br/>";


//魔术方法
//line为在文本中的行数
echo "这是第" . __LINE__ . "行";
echo "<br/>";

//__FILE__返回文件路径和文件夹名称
echo __file__;
echo "<br/>";

//__FUNCTION__返回函数名
function Test()
{
    echo "函数名称为" . __FUNCTION__;
}

;
Test();
echo "<br/>";


//面向对象
class Animation
{
    var $name;
    public $a;
    private $b;

    public function Af($info)
    {
        echo $this->a . $info . $this->b;
    }

    public function Other()
    {
        echo $this->b;
    }

    private function Bf()
    {
        echo "this is private function";
    }

    function say($info)
    {
        echo $this->name . "say" . $info . "<br/>";
    }

    function __construct($name, $a = 1)
    {
        $this->name = $name;
        $this->a = $a;
    }
}

$cat = new Animation("cat");
$cat->say("miao");
$dog = new Animation("dog");
$dog->say("wang");
$dog->Other();

//继承
class Ani extends Animation
{
    public function Af($info)
    {
        parent::Af($info);
    }
}

$ani = new Animation("niu");
$ani->Af("mou");
$ani->say("mou");

//接口：接口是通过 interface 关键字来定义的,要实现一个接口，使用 implements 操作符
interface iTemplate
{
    public function setVal($name);

    public function setHtml($template);
}

class Template implements iTemplate
{
    public static $static;

    public function __construct()
    {
        self::$static = "one";
    }

    public function setVal($name)
    {
        $this->vars["name"] = $name;
    }

    private $vars = array();

    public function setHtml($template)
    {
        $result = $template . "result" . $this->vars["name"];
        return $result;
    }
}

class Smtem extends Template
{
    static function setVals()
    {
        echo parent::$static . "<br/>";
    }
}

$template = new Template();
$template->setVal("fangMing");
echo $template->setHtml("zhangsan") . "<br/>";
echo Template::$static . '<br/>';
Smtem::setVals();


//fina关键字，如果父类的方法和属性被final声明， 则子类无法覆盖其方法，如果类被final声明了，那么它无法被继承
final class Test1
{
    public $a;
    private $name;

    public function __get($name)
    {
        if($name =="name"){
            return $this->$name;
        }

    }

    final public function say()
    {
        echo "say HEllo" . "<br/>";
    }
}

/*下面这段代码会报错*/
//class TestChild1 extends Test1{
//    public function say(){
//        echo "say Hi"."<br/>";
//    }
//}
$test1 = new Test1();
//$test1->$name = "fang";
//echo "123".$test1->$name;
echo "<br/>";


$arr1 = ["name" => "fangming", "age" => 18, "add" => "shanDong"];
forEach ($arr1 as $key => $value) {
    echo $key . ":" . $value . "<br/>";
}

$text = file_get_contents("./test.json");
$ObjText = json_decode($text, true);
$arr01 = ["add" => "shanDong"];
$arr02 = array_merge($ObjText, $arr01);
$ObjText2 = json_encode($arr02);
file_put_contents("./test.json", $ObjText2);


$yuan = file_get_contents("https://www.yuandingbang.cn");
var_dump($yuan);
$weiXin = file_get_contents("http://test.mschool.cn/report/wechat/exam/report-course?exam_id=38&student_id=42868&course_id=B3#");
var_dump($weiXin);


?>
</body>
</html>
