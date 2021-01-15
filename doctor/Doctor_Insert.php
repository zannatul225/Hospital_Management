<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Info</title>
    <meta charset="utf-8">
    <title>Update</title>
    <style>
      div {
        background-color: ;
      }
      body {font-family: Arial;}

      /* Style the tab */
      .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
      }

      /* Style the buttons inside the tab */
      .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 25px;
        margin-right: 7%;
      }

      /* Change background color of buttons on hover */
      .tab button:hover {
        background-color: #ddd;
      }

      /* Create an active/current tablink class */
      .tab button.active {
        background-color: #ccc;
      }

      /* Style the tab content */
      .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
      }

      .tab input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 20px;
        border: none;
        width: 40%;
      }

      .tab .search-container button {
        float: right;
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: #ddd;
        font-size: 20px;
        border: none;
        cursor: pointer;
      }

      .tab .search-container button:hover {
        background: #ccc;
      }

      @media screen and (max-width: 600px) {
        .tab .search-container {
          float: none;
        }
        .tab a, .tab input[type=text], .tab .search-container button {
          float: none;
          display: block;
          text-align: left;
          width: 100%;
          margin: 0;
          padding: 14px;
        }
        .tab input[type=text] {
          border: 1px solid #ccc;
        }
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
  <body>

    <div class="tab">
        <a href="doctor_home.php"><button class="tablinks">Home</button></a>
        <a href="Doctor_Insert.php"><button class="tablinks" onclick="openCity(event, 'Update_Report')">Update Report</button></a>
        <a href="../logout.php"><button class="tablinks">Logout</button></a>


        <div class="search-container">
          <form action="doctor_search.php" method="post">
            <input type="text" placeholder="Search Patient with Patient ID" name="p_id">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <!--Update patient information-->
    <h1>Update patient Information</h1>

    <input type="text" name="p_id" placeholder="Patient ID:">
    <input type="text" name="t_r" placeholder="Test Report:">
    <button type="submit" name="submit">Update</button></h3>

    <?php
    include_once '../db.php';
    if (isset($_POST['submit'])) {

                  //Updated patient information
    $p_id = mysqli_real_escape_string($db, $_POST['p_id']);
    $t_r = mysqli_real_escape_string($db, $_POST['t_r']);


    $sql = "UPDATE patient SET Test_Report = '$t_r' WHERE P_ID = '$p_id';";
    mysqli_query($db, $sql);
     ?>

        <div style="margin-top: 4%; margin-left:25%; margin-right:10%; font-size: 40px;font-weight: bold; padding:15px; background: #D5DBDB">
          <h1 style="margin:0px; padding:0px;">Updated info of Patient</h1>
          <?php
          $sql = "SELECT P_ID, P_Name, Test_Report, D_ID FROM patient WHERE P_ID = '$p_id';";
          $res = mysqli_query($db,$sql);

          $row = mysqli_fetch_array($res);

            echo "Patient ID: " . $row["P_ID"];
            echo "<br>Patient name: " . $row["P_Name"];
            echo "<br>Test Report: "  . $row["Test_Report"];
            echo "<br>Doctor ID:". $row["D_ID"]."<br>";
            ?>
          </div>
            <?php
          }
          ?>
  </body>
</html>
