<html>
    <head>
        <script>
          function setCookie(cname,cvalue,exdays) {
          var d = new Date();
          d.setTime(d.getTime() + (exdays*24*60*60*1000));
          var expires = "expires=" + d.toGMTString();
          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
          }

          function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for(var i = 0; i < ca.length; i++)
            {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
              }
            if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
            }
          }
          return "";
        }

        function checkCookie() {
          var user=getCookie("username");
          if (user != "") {
            alert("Welcome again " + user);
          } else {
             user = prompt("Please enter your name:","");
             if (user != "" && user != null) {
               setCookie("username", user, 30);
             }
          }
        }
        </script>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Insert</title>
        <link rel="stylesheet" href="admin_insert.css" type="text/css">
        <style>
          div {
            background-color: lightblue;
          }
        </style>
    </head>
    <body text="BLACK" bgcolor ="#8BF7C8">

        <form action="Admin_Update.php" method="post">


            <!--Update emplyee information-->
      <div style="margin-top:8%">
      <h1>Update employee Information</h1>
      <h3>Employee ID:
      <input type="text" name="e_id" >
      Shift:
      <input type="text" name="shift" >
      Designation:
      <input type="text" name="desig" >

      <input type="submit" value="Update"></h3>
      </div>

    </form>

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


</body>
</html>
