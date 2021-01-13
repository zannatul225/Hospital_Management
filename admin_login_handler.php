<?php
  include_once 'db.php';

  session_start();

  $user = mysqli_real_escape_string($db, $_POST['user']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);

  $sql = "SELECT name,user,pass FROM login WHERE user = '$user';";


  $res = mysqli_query($db,$sql);
  $check = mysqli_num_rows($res);

if ($check > 0) {
  $get = mysqli_fetch_assoc($res);

  if($user === $get['user'] && $pass === $get['pass'])
  {

      $_SESSION['uname'] = $get['name'];

      header("location: admin_home.php");
  }
  else {
    header("location: Admin_login.php");
  }
}
else {
    header("location: Admin_login.php");
}
 ?>
