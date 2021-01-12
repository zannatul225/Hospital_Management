<?php
include_once 'db.php';
$sql = "SELECT * FROM wards_and_rooms;";

$res = mysqli_query($db,$sql);
$check = mysqli_num_rows($res);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>DoctorDetails</title>
        <style>
        div {
          background-color: lightblue;
        }
        </style>
    </head>
    <body>
                <center><h2> Room details of our hospital </h2></center>
                <?php
                if ($check > 0) {
                  while($row = mysqli_fetch_assoc($res)) {?>
                    <div style="margin-top: 1%; margin-left:35%; margin-right:35%">
                      <font size=5cn>
                    <?php
                    echo "Room no: " . $row["Room_No"]. " <br>Ward: " . $row["Ward"]. "<br>Floor: "  . $row["Floor"]. "<br>Room: " . $row["Room"]. "<br>";
                    ?>
                      </font>
                  </div>
                    <?php
                  }
                } ?>
              <br>

    </body>
</html>
