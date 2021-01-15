<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>About Page</title>
        <style media="screen">
          html,body{
            background-image: url(images/bg4.jpg);
            background-repeat: no-repeat;
            width: 100%;
            height: 80%;
            font-size: 14px;
            font-weight: normal;
            font-family: sans-serif;
            }
          .background{
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
            }
            div {
    					width: 100%;
    					height: 100px;
    					transition: width 2s, height 2s, transform 2s;
    				}
        </style>

    </head>
    <body>
      <div class="w3-bar w3-black" style="height:36px;">
        <a href="index.php" class="w3-bar-item w3-button">Home</a>
        <a href="about.php" class="w3-bar-item w3-button">About page</a>
        <a href="Login.php" class="w3-bar-item w3-button">Login</a>
      </div>

      <marquee width="100%" direction="left" height="70px" style="background-color: #BCC6CC;">
        <h1 style="color: Black">
        * * * * * * * * * * * * * *  For emergency dial 01728326786,826572929 * * * * * * * * * * * * * *
        </h1>
      </marquee>
        <div class="background" style="margin-top: 1%; font-size: 20px; font-weight: bold">
            <center><font size=10cn><b><u>About Hospital</u><b></font></center>
                  <center>Welcome to Care and Cure Hospital.<br>
                  "Save lives, Save Humanity."</center>
          </div>
          <div id="demo">
            <button  type="button"  onclick="loadDoc(),play()">Visitng Hours</button>
          </div>



        <script>
        function loadDoc() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("demo").innerHTML =
              this.responseText;
            }
          };
          xhttp.open("GET", "ajax.txt", true);
          xhttp.send();
        }
        function play() {
        		var beepsound = new Audio(
        'https://www.soundjay.com/misc/sounds/small-bell-ring-01a.mp3');
        beepsound.play(); }
        </script>

    </body>
</html>
