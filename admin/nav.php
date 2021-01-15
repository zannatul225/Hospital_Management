<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style media="screen">
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');
    *{
      padding: 0;
      margin: 0;
      list-style: none;
      text-decoration: none;
    }
    body {
      font-family: 'Roboto', sans-serif;
    }
    .sidebar {
      position: fixed;
      left: -250px;
      width: 250px;
      height: 100%;
      background: #042331;
      transition: all .5s ease;
    }
    .sidebar header {
      font-size: 22px;
      color: white;
      line-height: 70px;
      text-align: center;
      background: #063146;
      user-select: none;
    }
    .sidebar ul a{
      display: block;
      height: 100%;
      width: 100%;
      line-height: 65px;
      font-size: 20px;
      color: white;
      padding-left: 40px;
      box-sizing: border-box;
      border-bottom: 1px solid black;
      border-top: 1px solid rgba(255,255,255,.1);
      transition: .4s;
    }
    ul li:hover a{
      padding-left: 50px;
    }
    .sidebar ul a i{
      margin-right: 16px;
    }
    #check{
      display: none;
    }
    label #btn,label #cancel{
      position: absolute;
      background: #042331;
      border-radius: 3px;
      cursor: pointer;
    }
    label #btn{
      left: 40px;
      top: 25px;
      font-size: 35px;
      color: white;
      padding: 6px 12px;
      transition: all .5s;
    }
    label #cancel{
      z-index: 1111;
      left: -195px;
      top: 17px;
      font-size: 30px;
      color: #0a5275;
      padding: 4px 9px;
      transition: all .5s ease;
    }
    #check:checked ~ .sidebar{
      left: 0;
    }
    #check:checked ~ label #btn{
      left: 250px;
      opacity: 0;
      pointer-events: none;
    }
    #check:checked ~ label #cancel{
      left: 195px;
    }
    #check:checked ~ section{
      margin-left: 250px;
    }

    .b1{
      position: fixed;
      height: 100%;
      margin-left: 20%;
      margin-right: 2%;
      margin-top: 2%;
    }

    </style>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="sidebar">
    <ul>
      <li><a href="admin_home.php"><i class="fas fa-stream"></i>Home</a></li>
      <li><a href="all_doctor.php"><i class="fas fa-stream"></i>View Doctors</a></li>
      <li><a href="all_patient.php"><i class="fas fa-stream"></i>View Patient</a></li>
      <li><a href="all_employee.php"><i class="fas fa-stream"></i>View Employee</a></li>
      <li><a href="room_details.php"><i class="fas fa-stream"></i>View Room</a></li>
    </ul>
    </div>
  </body>
</html>
