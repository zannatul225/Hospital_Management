<?php
include_once 'db.php';
session_start();
$allot= "Allocated";
$null= "NULL";

              //Update emplyee information
$e_id = mysqli_real_escape_string($db, $_POST['e_id']);
$shift = mysqli_real_escape_string($db, $_POST['shift']);
$desig = mysqli_real_escape_string($db, $_POST['desig']);

$sql = "UPDATE employee SET Shift = '$shift', Designation = '$desig' WHERE E_ID = '$e_id';";
mysqli_query($db, $sql);

              //Enroll Patient
$p_id = mysqli_real_escape_string($db, $_POST['p_id']);
$p_name = mysqli_real_escape_string($db, $_POST['p_name']);
$phn = mysqli_real_escape_string($db, $_POST['phn']);
$add = mysqli_real_escape_string($db, $_POST['add']);
$t_r = mysqli_real_escape_string($db, $_POST['t_r']);
$d_id = mysqli_real_escape_string($db, $_POST['d_id']);
$room = mysqli_real_escape_string($db, $_POST['room']);
$pass = mysqli_real_escape_string($db, $_POST['pass']);

$sql = "INSERT INTO patient (P_ID, P_Name, P_Phone_no, P_Address, Test_Report, D_ID, Room_No, pass)
        VALUES ('$p_id', '$p_name', '$phn', '$add', '$t_r', '$d_id', '$room', '$pass');";
mysqli_query($db, $sql);

            //update room information
$sql = "UPDATE wards_and_rooms SET Room = '$allot' WHERE Room_No = '$room';";
mysqli_query($db, $sql);

        //update room to null
$p_id_d = mysqli_real_escape_string($db, $_POST['p_id_d']);
$sql2 = "SELECT P_ID, Room_No FROM patient where P_ID='$p_id_d';";

$res = mysqli_query($db,$sql2);
$check = mysqli_num_rows($res);

if ($check > 0) {
  $get = mysqli_fetch_assoc($res);
  $room_n = $get['Room_No'];
}
$sql3 = "UPDATE wards_and_rooms SET Room = '$null' WHERE Room_No = '$room_n';";
mysqli_query($db, $sql3);

          //delete patient

$sql4 = "DELETE * FROM patient WHERE P_ID = '$p_id_d';";
mysqli_query($db, $sql4);

          //admin search for patient
$p_id_s = mysqli_real_escape_string($db, $_POST['p_id_s']);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
  </head>
  <body text="BLACK" bgcolor ="#8BF7C8">
    <center>
      <h1>Updated info of Employee</h1>
      <?php
      $sql = "SELECT * FROM employee WHERE E_ID = '$e_id';";

      $res = mysqli_query($db,$sql);
      $check = mysqli_num_rows($res);

      if ($check > 0) {
        while($row = mysqli_fetch_assoc($res)) {?>
          <h3><?php
        echo "Employee_id: " . $row["E_ID"]. " <br>Shift: " . $row["Shift"]. "<br>Designation: "  . $row["Designation"]. "<br>";
        ?>
      </h3>
        <?php
      }
    }
       ?>
    </center><br>

    <center>
      <h1>New enrolled patient</h1>
      <?php
      $sql = "SELECT P_ID, P_Name, P_Phone_no, P_Address, Test_Report, D_ID, Room_No FROM patient WHERE P_ID = '$p_id';";

      $res = mysqli_query($db,$sql);
      $check = mysqli_num_rows($res);

      if ($check > 0) {
        while($row = mysqli_fetch_assoc($res)) {?>
          <h3><?php
        echo "Patient id: " . $row["P_ID"]. " <br>Name: " . $row["P_Name"]. "<br>Phone No: "  . $row["P_Phone_no"]. "<br>Address: "  . $row["P_Address"]. "
         <br>Test Report: "  . $row["Test_Report"]. "<br>Doctor ID: "  . $row["D_ID"]. "<br>Room Allocated: "  . $row["Room_No"]."<br>" ;
        ?>
      </h3>
        <?php
      }
    }
       ?>
    </center><br>
    <center>
      <h1>Searched patient</h1>
      <?php
      //View searched patient info and bills

     $sql = "SELECT P_ID, P_Name, P_Phone_No, P_Address, Test_Report, Disease, Bill FROM patient NATURAL JOIN disease_and_diagnosis NATURAL JOIN bills_and_payment WHERE P_ID= '$p_id_s';";

     $res = mysqli_query($db,$sql);
     $check = mysqli_num_rows($res);

     if ($check > 0) {
       while($row = mysqli_fetch_assoc($res)) {?>
         <div style="margin-top: 1%; margin-left:35%; margin-right:35%; font-size: 20px;font-weight: bold">
         <?php
       echo "Patient ID: " . $row["P_ID"]. " <br>Patient name: " . $row["P_Name"]. "Phone no:". $row["P_Phone_No"]."<br>Address:". $row["P_Address"]."<br>Test Report: "
        . $row["Test_Report"]. "<br>Disease:". $row["Disease"]."<br>Bill: "
        . $row["Bill"]. "<br>";
       ?>
     </div>
       <?php
     }
   }
      ?>
    </center>

  </body>
</html>
