<?php
include_once '../db.php';

session_start();
if(isset($_SESSION['eid'])){
      $e_id= $_SESSION['eid'];
    }
      else {
        header("location: Employee_login.php");
      }

    $sql = "SELECT E_ID,E_Name,Shift,Designation,address, phone, E_Salary  FROM employee NATURAL JOIN financial_update where E_ID='$e_id';";
    $res = mysqli_query($db,$sql);
    $check = mysqli_num_rows($res);
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

    .tab input[type=text] {
      padding: 6px;
      margin-top: 8px;
      font-size: 20px;
      border: none;
      width: 20%;
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
            <a href="employee_home.php"><button class="tablinks">Home</button></a>
            <button class="tablinks" onclick="openCity(event, 'Shift')">Shift</button>
            <button class="tablinks" onclick="openCity(event, 'E_Salary')">Salary</button>
            <button class="tablinks" onclick="openCity(event, 'Protocols')">Protocols</button>
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
              echo $row['E_Name'];
              echo "<br>" .$row['phone'];
              echo "<br>" .$row['address'];
              echo "<br>" .$row['Designation'];
         ?></h1>

        <div id="Shift" class="tabcontent">
          <h3>Your shift details:</h3>
          <p>
            <?php
              echo $row['Shift'];
             ?>
          </p>
        </div>

        <div id="E_Salary" class="tabcontent">
          <h3>Your salary details</h3>
          <p>
            <?php
              echo $row['E_Salary'] . "BDT";
            }
             ?>

          </p>
        </div>

        <div id="Protocols" class="tabcontent">
          <h3>Protocols</h3>
          1)	Be honest and respect your work.<br>
          2)	We care our patients as our family member so be kind  to them.<br>
          3)	Every member should perform their responsibilities properly.<br>
          4)	Entry time and exit time is strictly maintained. If any employee is late or leaves early he or she will be given penalty.<br>

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
