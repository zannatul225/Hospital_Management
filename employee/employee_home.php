<?php
include_once '../db.php';

session_start();
if(isset($_SESSION['eid'])){
      $e_id= $_SESSION['eid'];
    }
      else {
        header("location: Employee_login.php");
      }

    $sql = "SELECT E_ID,E_Name,Shift,Designation,E_Salary  FROM employee NATURAL JOIN financial_update where E_ID='$e_id';";
    $res = mysqli_query($db,$sql);
    $check = mysqli_num_rows($res);

 ?>

 <!DOCTYPE html>
 <html>
   <head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style>
        * {box-sizing: border-box;}

       body {
             margin: 0;
             font-family: Arial, Helvetica, sans-serif;
           }

           .topnav {
             overflow: hidden;
             background-color: #e9e9e9;
           }

           .topnav a {
             float: left;
             display: block;
             color: black;
             text-align: center;
             padding: 14px 16px;
             text-decoration: none;
             font-size: 17px;
           }

           .topnav a:hover {
             background-color: #ddd;
             color: black;
           }

           .topnav a.active {
             background-color: #2196F3;
             color: white;
           }

           .topnav .search-container {
             float: right;
           }

           .topnav input[type=text] {
             padding: 6px;
             margin-top: 8px;
             font-size: 17px;
             border: none;
           }

           .topnav .search-container button {
             float: right;
             padding: 6px 10px;
             margin-top: 8px;
             margin-right: 16px;
             background: #ddd;
             font-size: 17px;
             border: none;
             cursor: pointer;
           }

           .topnav .search-container button:hover {
             background: #ccc;
           }

           @media screen and (max-width: 600px) {
             .topnav .search-container {
               float: none;
             }
             .topnav a, .topnav input[type=text], .topnav .search-container button {
               float: none;
               display: block;
               text-align: left;
               width: 100%;
               margin: 0;
               padding: 14px;
             }
             .topnav input[type=text] {
               border: 1px solid #ccc;
             }
           }

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
            font-size: 17px;
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
       </style>
   </head>
   <body>

       <div class="topnav">
         <a class="active" href="#home">Home</a>
         <a href="#about">About</a>
         <a href="#contact">Contact</a>
         <div class="search-container">
           <form action="/action_page.php">
             <input type="text" placeholder="Search.." name="search">
             <button type="submit"><i class="fa fa-search"></i></button>
           </form>
         </div>
       </div>

       <div style="padding-left:16px">
         <h2>
         <?php
            while($row = mysqli_fetch_array($res)){
              echo $row['E_Name'];
            }
          ?></h2>

         <p>Navigation bar with a search box and a submit button inside of it.</p>
         <p>Resize the browser window to see the responsive effect.</p>
       </div>

       <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'London')">London</button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
        <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
      </div>

      <div id="London" class="tabcontent">
        <h3>London</h3>
        <p>London is the capital city of England.</p>
      </div>

      <div id="Paris" class="tabcontent">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p>
      </div>

      <div id="Tokyo" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
      </div>

   </body>
 </html>
