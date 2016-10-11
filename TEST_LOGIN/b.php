<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include("ConnectDB.php");
$id = $_POST['username'];
$pw = $_POST['password'];
echo $id;
echo $pw;
//搜尋資料庫資料
$sql = "SELECT * FROM user where username = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        echo '登入成功!';
}
else
{
        echo '登入失敗!';
}
?>


