<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>About Page</title>
        <style media="screen">
          html,body{
            width: 100%;
            height: 80%;
            font-size: 14px;
            font-weight: normal;
            font-family: sans-serif;
            }
          .background{

            background-image: url(image2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100%;
            }
            div {
    					width: 100%;
    					height: 100px;
    					background: #728FCE;
    					transition: width 2s, height 2s, transform 2s;
    				}
        </style>

    </head>
    <body bgcolor=LIGHTBLUE>
      <marquee width="100%" direction="left" height="70px">
        <h1 style="color: #728FCE">
        * * * * * * * * * * * * * *  For emergency dial 01728326786,826572929 * * * * * * * * * * * * * *
        </h1>

      </marquee>
        <div class="background">

            <center><font size=10cn><b><u>About Hospital</u><b></font></center>
            </div>

                <div style="margin-top: 1%; font-size: 20px;font-weight: bold">
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
