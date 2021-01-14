<?php
  include_once '../db.php';

  session_start();

  $d_id = mysqli_real_escape_string($db, $_POST['d_id']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);

  $sql = "SELECT D_ID,D_Name,pass FROM doctor WHERE D_ID = '$d_id';";

  $res = mysqli_query($db,$sql);
  $check = mysqli_num_rows($res);

if ($check > 0) {
  $get = mysqli_fetch_assoc($res);

  if($d_id === $get['D_ID'] && $pass === $get['pass'])
  {
    $_SESSION['d_name'] = $get['D_Name'];
    $_SESSION['d_id'] = $get['D_ID'];

      header("location: doctor_home.php");
  }
  else {
    header("location: Doctor_login.php");
  }
}
else {
    header("location: Doctor_login.php");
}
 ?>
