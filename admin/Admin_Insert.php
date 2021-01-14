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

          <!--Search Patient information-->
        <div style="margin-top:8%">
           To search for Patient enter patient ID:
          <input type="text" name="p_id_s" ><input type="submit" value="Search">
        </div>

          <!--Update Patient information-->
        <div style="margin-top:5%">
        <h1>Add new Patient</h1>
        <h3>Patient ID:
        <input type="text" name="p_id" >
        Name:
        <input type="text" name="p_name" >
        Phone NO.:
        <input type="text" name="phn" >
        Address:
        <input type="text" name="add" ><br><br>
        Test Report:
        <input type="text" name="t_r" >
        Doctor:
        <input type="text" name="d_id" >
        Room No:
        <input type="text" name="room" >
        pass:
        <input type="text" name="pass" >

        <input type="submit" value="Enroll"></h3></div>

        <!--Delete Patient information-->

        <div style="margin-top:5%;font-size: 20px;font-weight: bold">

        Delete Patient by Patient ID:
        <input type="text" name="p_id_d" >

        <input type="submit" value="delete"></h3></div>

        </form>


    </body>
</html>
