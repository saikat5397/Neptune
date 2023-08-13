<?php 
session_start();
$name =$_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];
$confirm_password =$_POST['confirm_password'];
$flag = false;
$preg_maa = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);




if ($name) {
  $_SESSION['old_name_'] = $name;
 $flag = true;
}
else {
     $_SESSION['name_erro']="Name is missing";
}
if ($email) {
  $_SESSION['old_email'] = $email;
  $flag = true;
}
else {
     $_SESSION['email_erro']="email is missing";
   
}
if ($password) {
 
  $_SESSION['old_password']= $password;
  $flag = true;
}
else {
     $_SESSION['password_erro']="password is missing";
   
}
if ($confirm_password) {
  $_SESSION['old_confirm_password'] = $confirm_password;
  $flag = true;
}
else {
     $_SESSION['confirm_password_erro']="confirm_password is missing";
     
}
if ($password != $confirm_password) {
  $flag=true;
  $_SESSION['confirm_password_match_erro']="password & confirm password not matching";
}
else {
if ($preg_maa!=1) {
  $flag=true;
  $_SESSION['prematch_password_match_erro']="you password shuld be not upper case";
  header('location: singup.php');
}
}
if ($flag!=1) {
  header('location: singup.php');

}
else{
 $enqrement_password=md5($password);
  $db_connect=mysqli_connect('localhost','root','','nuptune');
 $validaty_query="SELECT COUNT(*) AS 'validaty' FROM users WHERE email ='$email'";
 $validaty_final=mysqli_query($db_connect,$validaty_query);
 $validaty_after_assoc=mysqli_fetch_assoc($validaty_final)['validaty'];
 if ($validaty_after_assoc==1) {
     header('location: singup.php');
     $_SESSION['email_dub_error']="$email this email already exist";
 }



  $insert_squel="INSERT INTO users(name,email,password)VALUES('$name','$email','$enqrement_password ')";
  mysqli_query($db_connect,$insert_squel);

  header('location: login.php');
  $_SESSION['login_success']="$name your account creat successfully";
}
?>
