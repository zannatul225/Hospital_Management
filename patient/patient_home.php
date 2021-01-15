<?php
include_once '../db.php';

session_start();
if(isset($_SESSION['p_id'])){
      $p_id= $_SESSION['p_id'];
    }
      else {
        header("location: Employee_login.php");
      }
//patient table query
    $sql = "SELECT * FROM patient NATURAL JOIN disease_and_diagnosis NATURAL JOIN bills_and_payment where P_ID='$p_id';";
    $res = mysqli_query($db,$sql);
 ?>

 <!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
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

    .tab .search-container {
      float: right;
    }

    .tab input[type=text] {
      padding: 6px;
      margin-top: 8px;
      font-size: 17px;
      border: none;
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
    </head>
    <body>

        <div class="tab">
            <a href="patient_home.php"><button class="tablinks">Home</button></a>
            <button class="tablinks" onclick="openCity(event, 'Test_Report')">Test_Report</button>
            <button class="tablinks" onclick="openCity(event, 'Billing_Status')">Billing Status</button>
            <a href="../logout.php"><button class="tablinks">Logout</button></a>

            <div class="search-container">
              <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
        </div>

        <h1>
        <?php
            while($row = mysqli_fetch_array($res)){
              echo $row['P_Name'];
              echo "<br>Patient ID: " . $row['P_ID'];
              echo "<br>Address: " . $row['P_Address'];
              echo "<br>Phone no: " . $row['P_Phone_no'];
              echo "<br>Doctor ID: " . $row['D_ID'];
              echo "<br>Disease: " . $row["Disease"];

         ?></h1>

        <div id="Test_Report" class="tabcontent">
          <h3>Your Test Report:</h3>

          <p>
            <?php
            echo "Disease: " . $row["Disease"] . "<br>";
            echo "Result: " . $row["Test_Report"];
           ?>
          </p>
        </div>

        <div id="Billing_Status" class="tabcontent">
          <h3>Billing Status</h3>
          <p>
            <?php
            echo "Disease: " . $row["Disease"] . "<br>";
            echo "Receipt No : " . $row["Receipt_No"] . "<br>";
            echo "Total Bill : " . $row["Bill"] . "<br>";
            echo "Payment Status: " . $row["Payment_Status"] . "<br>";
            }
             ?>
          </p>
        </div>

        <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        </script>

    </body>
</html>
