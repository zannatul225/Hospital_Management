<?php
  include_once 'db.php';

  session_start();

  $e_id = mysqli_real_escape_string($db, $_POST['e_id']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);

  $sql = "SELECT E_ID,E_Name,pass FROM Employee WHERE E_ID = '$e_id';";


  $res = mysqli_query($db,$sql);
  $check = mysqli_num_rows($res);

if ($check > 0) {
  $get = mysqli_fetch_assoc($res);

  if($e_id === $get['E_ID'] && $pass === $get['pass'])
  {

      $_SESSION['e_name'] = $get['E_Name'];
      $_SESSION['eid'] = $get['E_ID'];
      header("location: Employee_Details.php");
  }
  else {

    header("location: Employee_login.php?");
  }
}
else {
    header("location: Employee_login.php");
}
 ?>
