<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    xmlhttp.open("GET","doctor/DoctorDetails.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
</head>
    <body>

          <div class="w3-bar w3-black">
            <a href="index.php" class="w3-bar-item w3-button">Home</a>
            <a href="about.php" class="w3-bar-item w3-button">About page</a>
            <a href="Login.php" class="w3-bar-item w3-button">Login</a>
          </div>

          <form>
          <select name="users" onchange="showUser(this.value)">
            <option value="">Select a Doctor:</option>
            <option value="1">Neurologist</option>
            <option value="2">Nephrologist</option>
            <option value="3">Cardiologist</option>
            <option value="4">Orthopedist</option>
            <option value="5">Gynecologist</option>
            <option value="6">Pediatrician</option>
            </select>
          </form>
          <br>
        <div id="txtHint"><b>Person info will be listed here...</b></div>
    </body>
</html>
