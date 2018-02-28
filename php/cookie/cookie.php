<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cookie</title>
    <script src="http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<form>
    <label for="names">姓名：</label><input type="text" name="name" id="names" value="<?php echo $_SESSION["names"]?>">
    <label for="pw">密码：</label><input type="password" name="pw" id="pW" value="<?php echo $_SESSION["pw"]?>">
    <button type="button">提交</button>
</form>
<p></p>
<?php
echo $_SESSION["names"];
echo $_SESSION["pw"];
?>
</body>
<script>
    $(function () {
        console.log($("#names").val());

        function result() {
            function Sunmit(url) {
                const promise = new Promise(function (resolve, reject) {
                    const handler = function () {
                        if (this.readyState !== 4) {
                            return;
                        }
                        if (this.status === 200) {
                            resolve(this.response);
                        } else {
                            reject(new Error(this.statusText));
                        }
                    };
                    let formData = new FormData();
                    formData.append("names", $("#names").val());
                    formData.append("pw", $("#pW").val());
                    const client = new XMLHttpRequest();
                    client.open("POST", url);
                    client.onreadystatechange = handler;
                    client.responseType = "json";
                    client.setRequestHeader("Accept", "application/json");
                    client.send(formData);
//                    client.send($("form").serialize());
                });
                return promise;
            }

            Sunmit("./cookie_updata.php").then(function (data) {
                let text = "";
                for (let i in data) {
                    text += `${i}:${data[i]}&nbsp;&nbsp;`;
                    $("p").html(text);
                }
            }, function (error) {
                console("出错了", error)
            })
        }

        $("button").click(() => {
            result();
        })

    })
</script>
</html>