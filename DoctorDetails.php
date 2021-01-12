<html>
  <head>
    <style>
        table {
          width: 100%;
          border-collapse: collapse;
        }

        table, td, th {
          border: 1px solid black;
          padding: 5px;
        }

        th {text-align: left;}
    </style>
  </head>
  <body>

      <?php
          $q = intval($_GET['q']);
          if($q == 1)
            {
              $req='Neurologist';
            }
          if($q == 2)
            {
              $req='Nephrologist';
            }
          include 'db.php';
          $sql= "SELECT * FROM doctor WHERE category = '".$req."'";
          $result = mysqli_query($db,$sql);
          $check = mysqli_num_rows($result);
          echo($check);
          echo "<table>
              <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Age</th>
                  <th>Hometown</th>
              </tr>";
          while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
              echo "<td>" . $row['D_Name'] . "</td>";
              echo "<td>" . $row['Qualification'] . "</td>";
              echo "<td>" . $row['D_Phone_no'] . "</td>";
              echo "<td>" . $row['D_Address'] . "</td>";

            echo "</tr>";
          }
          echo "</table>";

      ?>
  </body>
</html>
