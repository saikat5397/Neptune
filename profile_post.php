<?php

session_start();
$db_connect=mysqli_connect('localhost','root','','nuptune');
// profile name cng start
if (isset($_POST['name_cng_btn'])) {
    $name=$_POST['name'];
    $id=$_SESSION['s_id'];
    $name_cng_query="UPDATE users SET name='$name' WHERE id='$id'";
    mysqli_query($db_connect, $name_cng_query);
    $_SESSION['s_name']=$name;
    header('location: profile.php');
}
// profile name cng end
// profile pic cng start 
if (isset($_POST['profile_pic_cng'])) {
  $id=$_SESSION['s_id'];
  
  $photo_name=$_FILES['profile_pic']['name'];
     $after_expord=explode(".", $photo_name);
     $extention=end($after_expord);
    $new_name=$id.'.'.$extention;
    $old_location=$_FILES['profile_pic']['tmp_name'];
    $new_location=('upload\profile_photo/'.$new_name);
    move_uploaded_file($old_location,$new_location);
    $update_profile_photo_query="UPDATE users SET profile_photo='$new_name' WHERE id='$id'";
    mysqli_query($db_connect, $update_profile_photo_query);
    header('location: profile.php');
  }
  // profile pic cng end
  // pass change star 
  if (isset($_POST['pass_cng'])) {
    $id=$_SESSION['s_id'];
    $old_encripted_password= md5($_POST['old_password']);
    $pass_ck_query="SELECT COUNT(*) AS pass_match_re FROM users WHERE password='$old_encripted_password' AND id='$id'";
    $pass_ck_finel=mysqli_query($db_connect,  $pass_ck_query);
    $pass_ck_assos=mysqli_fetch_assoc($pass_ck_finel);
   $old_pass_ck= $pass_ck_assos['pass_match_re'];

   if ($old_pass_ck==1) {
    $id=$_SESSION['s_id'];
     $new_encripted_password=md5($_POST['new_password']);
     $update_pass_cng_query="UPDATE users SET password='$new_encripted_password' WHERE id='$id'";
     mysqli_query($db_connect, $update_pass_cng_query);
     header('location: profile.php');

   }
    
    
  }
  // pass change end

?>