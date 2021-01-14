<?php
  include_once '../db.php';

  session_start();

  $p_id = mysqli_real_escape_string($db, $_POST['p_id']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);

  $sql = "SELECT P_ID,P_Name,pass FROM patient WHERE P_ID = '$p_id';";

  $res = mysqli_query($db,$sql);
  $check = mysqli_num_rows($res);

if ($check > 0) {
  $get = mysqli_fetch_assoc($res);

  if($p_id === $get['P_ID'] && $pass === $get['pass'])
  {
    $_SESSION['p_name'] = $get['P_Name'];
    $_SESSION['p_id'] = $get['P_ID'];

      header("location: Patient_home.php");
  }
  else {
    header("location: Patient_login.php");
  }
}
else {
    header("location: Patient_login.php");
}
 ?>
