<?
session_start();
$l_account = $_POST["l_account"];
$l_password = $_POST["l_password"];



$link = mysqli_connect("localhost", "root", "12345678", "shop");
$sql = "select * from login where account = '$l_account'";
$rs = mysqli_query($link, $sql);


if ($record = mysqli_fetch_assoc($rs)) {
    if ($l_password == $record['password']) {
        $_SESSION['username'] = $record['username'];
        $_SESSION['account'] = $record['account'];
        $_SESSION['password'] = $record['password'];
        header('location:index.php');

    }else {
        $error="密碼錯誤，請重新輸入";
        header("location:login.php?error=$error");
    
    }
}
else if(mysqli_num_rows($rs)==0) {
        $error="帳號不存在，請重新確認或進行會員註冊";
        header("location:login.php?error=$error");
}



?>

