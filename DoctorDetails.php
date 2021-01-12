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
          if($q == 3)
            {
              $req='Cardiologist';
            }
          if($q == 4)
            {
              $req='Orthopedist';
            }
          if($q == 5)
            {
              $req='Gynecologist';
            }
            if($q == 6)
            {
              $req='Pediatrician';
            }
          include 'db.php';
          $sql= "SELECT * FROM doctor WHERE category = '".$req."'";
          $result = mysqli_query($db,$sql);
          $check = mysqli_num_rows($result);
          echo "Found ";
          echo($check);
          echo " results!<br>";
          echo "Showing results for ";
          echo($req);
          echo ":";
          echo "<table>
              <tr>
                  <th>Doctor's Name</th>
                  <th>Qualification</th>
                  <th>Contact</th>
                  <th>Address</th>
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
