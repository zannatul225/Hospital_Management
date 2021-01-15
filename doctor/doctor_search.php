<?php
include_once '../db.php';

$p_id = mysqli_real_escape_string($db, $_POST['p_id']);

$sql = "SELECT P_ID, P_Name, Test_Report, Disease, D_ID FROM patient NATURAL JOIN disease_and_diagnosis where P_ID='$p_id';";


$res = mysqli_query($db,$sql);
$check = mysqli_num_rows($res);

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Patient Details</title>
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
    </head>
    <body bgcolor='GREY'>
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

      <div style="margin-top: 4%; margin-left:25%; margin-right:10%; font-size: 40px;font-weight: bold; padding:15px; background: #D5DBDB">
        <h1 style="margin:0px; padding:0px;">Patient you searched for</h1>

        <?php

        if ($check > 0) {
          while($row = mysqli_fetch_assoc($res)) {

          echo "Patient id: " . $row["P_ID"]. " <br>Name: " . $row["P_Name"]."<br>Test Report: "
          . $row["Test_Report"]. "<br>Doctor ID: "  . $row["D_ID"]. "<br>Disease: "
           . $row["Disease"]."<br>" ;
          ?>
        </div>
          <?php
        }
      }
         ?>
      </center>

      </body>
      </html>
