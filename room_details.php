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
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
    </head>
    <body>
                <center><h2> Room details of our hospital </h2></center>
                <?php
                echo "<table>
                    <tr>
                        <th>Room no</th>
                        <th>Ward</th>
                        <th>Floor</th>
                        <th>Room</th>
                    </tr>";
                while($row = mysqli_fetch_array($res)) {
                  echo "<tr>";
                    echo "<td>" . $row['Room_No'] . "</td>";
                    echo "<td>" . $row['Ward'] . "</td>";
                    echo "<td>" . $row['Floor'] . "</td>";
                    echo "<td>" . $row['Room'] . "</td>";

                  echo "</tr>";
                }
                echo "</table>";

                ?>
              <br>
    </body>
</html>
