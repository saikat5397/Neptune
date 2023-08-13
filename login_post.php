<?php 
session_start();
$email=$_POST['email'];
$password=md5($_POST['password']);


if ($email) {
    $_SESSION['old_email']="$email";
}
else {
  
}
 if ($password) {
  $_SESSION['old_password']="$password";
 }

$db_connect=mysqli_connect('localhost','root','','nuptune');

$count_query="SELECT COUNT(*) AS 'results' FROM users WHERE email='$email' AND password='$password '";


$select_final= mysqli_query($db_connect,$count_query);

$after_assoc= mysqli_fetch_assoc($select_final)['results'];
 if ($after_assoc==1) {
     header('location: backhand/dashboard.php');
    $_SESSION['s_email']="$email";
    $select_s_qury="SELECT id,name FROM users WHERE email='$email'";
    $select_final=mysqli_query($db_connect,$select_s_qury);
    $after_s_assoc=mysqli_fetch_assoc( $select_final);
    

    $_SESSION['s_id']=$after_s_assoc['id'];
    $_SESSION['s_name']=$after_s_assoc['name'];




 }
 else {
    header('location: login.php');
    $_SESSION['login_error']=" your password ar not match";
 }

?>