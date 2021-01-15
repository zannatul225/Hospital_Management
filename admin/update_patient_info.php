<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Info</title>
    <link rel="stylesheet" href="admin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="utf-8">
    <title>Update Info</title>
    <style>
      div {
        background-color: ;
      }
      body {font-family: Arial;}
      .form{
        margin-left: 20%;
      	height: 100%;
      	width: 50%;
      	position: absolute;
      	left: 0px;
      	overflow: hidden;
      }

        .form .f{
    	font-size: 20px;
    	margin: 50px;

    }

     .f h2, .f input{
    	text-transform: capitalize;
    	display: block;
    	color: grey;

    }

    .f input{
    	width: 100%;
    	height: 40px;
    	margin-top: 20px;
    	margin-bottom: 20px;
    	border-radius: 20px;
    	padding: 0px 10px;
    }

    .f textarea{
    	width: 100%;
    	height: 200px;
    	margin-top: 10px;
    	margin-bottom: 20px;
    	border-radius: 20px;
    	padding: 10px 11px;
    	font-size: 15px;
    	color: #808080;
    }

    .f input[type=submit]{
    	background-color: #23B2DA;
    	color: white;
    	font-size: 20px;
    	border-radius: 20px;

    }
        .button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
    }



    .button2:hover {
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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

    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Admin Panel</header>
    <ul>
      <li><a href="admin_home.php"><i class="fas fa-stream"></i>Home Page</a></li>
      <li><a href="admin_view.php"><i class="fas fa-stream"></i>Dashboard</a></li>
      <li><a href="update_patient_info.php"><i class="fas fa-stream"></i>Insert New Patient</a></li>
      <li><a href="#"><i class="fas fa-stream"></i>Update Doctor</a></li>
      <li><a href="#"><i class="fas fa-stream"></i>Update Employee</a></li>
      <li><a href="#"><i class="fas fa-stream"></i>Delete Patient</a></li>

    </ul>
    </div>

        <div style="margin-left:80%" class="search-container">
          <form action="../doctor/doctor_search.php" method="post">
            <input type="text" placeholder="Search Patient with Patient ID" name="p_id">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

      <div style="margin-left:20%">
        <!--Update patient information-->
        <h1>New Enrolled Patient Information</h1>

      <div class="form">
			<div class="f">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<input type="text"  name="p_id" placeholder="Patient ID">
        <input type="text" placeholder="Name" name="p_name" >
        <input type="text" placeholder="Phone NO." name="phn" >
        <input type="text" placeholder="Address" name="add" ><br><br>
        <input type="text" placeholder="Test Report" name="t_r" >
        <input type="text" placeholder="Doctor ID" name="d_id" >
        <input type="text" placeholder="Room No" name="room" >
        <input type="text" placeholder="pass:" name="pass" >
        <button class="button button2" type="submit" name="submit">Enroll</button>
			</div>
		</div>

<!---insert new patient--->
    <?php
    include_once '../db.php';
    if (isset($_POST['submit'])) {

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
    ?>

    <div style="margin-top: 7%; margin-right:10%; font-size: 40px;font-weight: bold; padding:15px; background: #D5DBDB">
      <h1 style="margin:0px; padding:0px;">Updated info of Patient</h1>
      <?php

    $sql = "SELECT P_ID, P_Name, P_Phone_no, P_Address, Test_Report, D_ID, Room_No FROM patient WHERE P_ID = '$p_id';";

    $res = mysqli_query($db,$sql);

    $row = mysqli_fetch_assoc($res);

        echo "Patient id: " . $row["P_ID"];
        echo "<br>Name: " . $row["P_Name"];
        echo "<br>Phone No: " . $row["P_Phone_no"];
        echo "<br>Address: "  . $row["P_Address"];
        echo "<br>Test Report: " . $row["Test_Report"];
        echo "<br>Doctor ID: " . $row["D_ID"];
        echo "<br>Room Allocated: "  . $row["Room_No"]."<br>";
      }
        ?>


  </body>
</html>
