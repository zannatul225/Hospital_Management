<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Info</title>
    <meta charset="utf-8">
    <title>Update</title>
    <style>
      div {
        background-color: lightblue;
      }
    </style>

    <script>
    function showUser(str) {
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET","DoctorDetails.php?q="+str,true);
        xmlhttp.send();
      }
    }
    </script>
  </head>
  <body text="BLACK" bgcolor ="#8BF7C8">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <!--Update patient information-->
    <h1>Update patient Information</h1>
    <h3>Patient ID:
    <input type="text" name="p_id" >
    Test Report:
    <input type="text" name="t_r" >

    <button type="submit" name="submit">Update</button></h3>
    <?php
    include_once '../db.php';
    if (isset($_POST['submit'])) {

                  //Update patient information
    $p_id = mysqli_real_escape_string($db, $_POST['p_id']);
    $t_r = mysqli_real_escape_string($db, $_POST['t_r']);


    $sql = "UPDATE patient SET Test_Report = '$t_r' WHERE P_ID = '$p_id';";
    mysqli_query($db, $sql);
     ?>

        <div style="margin-top: 4%; margin-left:0%; margin-right:0%; font-size: 40px;font-weight: bold">
          <center>Updated info of Patient</center></div>
          <?php
          $sql = "SELECT P_ID, P_Name, Test_Report, D_ID FROM patient WHERE P_ID = '$p_id';";

          $res = mysqli_query($db,$sql);
          $check = mysqli_num_rows($res);

          if ($check > 0) {
            while($row = mysqli_fetch_assoc($res)) {?>
              <div style="margin-top: 8%; margin-left:35%; margin-right:35%; font-size: 30px;font-weight: bold">
              <?php
            echo "Patient ID: " . $row["P_ID"]. " <br>Patient name: " . $row["P_Name"]. "<br>Test Report: "  . $row["Test_Report"]. "<br>Doctor ID:". $row["D_ID"]."<br>";
            ?>
          </div>
            <?php
          }
        }
      }
           ?>


  </body>
</html>
