 <?php
session_start();

$cookie_name1='username';
$cookie_name2='password';
unset($_COOKIE['username']);
unset($_COOKIE['password']);
setcookie($cookie_name1, '', time()-3600);
setcookie($cookie_name2, '', time()-3600);

if(session_destroy()){
header("Location:../index.php");
exit;
}

?>

