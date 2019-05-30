<html>
  <head>
    <title>Demo Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
  </head>

  <body>
    <div>
      <p2>Logged in as </p2>
      <p1>Manager</p1>
    </div>
    <div style="margin-right: 15px; float:right">
      <button class="menu" onclick="window.location.href = 'manager.php';">Search</button>
      <button class="menu" onclick="window.location.href = 'add.php';">Add patient</button>
      <button class="menu" onclick="window.location.href = 'doctors.php';">Doctors manager</button>
      <button class="menu" onclick="window.location.href = 'report.php';">Report</button>
    </div>
    <br />
    <br />

    <form method="POST" class="form form2" action="#" style="width: 30%;">

      <p1 style="padding-left: 50px;">Doctor Data</p1>
      <br />
      <br />
      <select name="doctor_list" class="input input1" >
        <?php
        $conn = new mysqli('localhost', 'root', 'Pr0sTiTute', 'example');
        /* $name = $_POST['name']; */

        $query = "SELECT name FROM doctor";       // queries
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($result))
        {
          echo "<option value='" . $row['name'] ."'>" . $row['name'] . "</option>";
        }
        /* mysqli_close($conn); */
        ?>
      </select>

      <br />
      <input type="submit" name="submit" style="margin: 15px 0px 0px 48px;"
          class="button button2-submit" />
    </form>

    <?php
      if(isset($_POST['submit'])){
        $doctorname = $_POST['doctor_list'];
        $query = "SELECT name FROM doctor WHERE name = '$doctorname'"; // queries
        $result = mysqli_query($conn,$query);
      }
    ?>

    <br />
    <br />

    <table style="width:85%; align: auto;">
      <tr>
        <th>ID</th>
        <th>Full name</th>
        <th>Phone number</th>
        <th>Admission date</th>
        <th>Discharge date</th>
      </tr>
      <?php
        while($row = mysqli_fetch_array($result))
        {
          echo "<tr>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['name'] . "</td>";
          echo "</tr>";
        }
      ?>
    </table>

  </body>

  <?php
    //mysqli_close($conn);
  ?>

  <footer>
      <f1>Assignment 2 - SQL</f1><br />
      <f2>Designed by Nhat Nguyen, Tien Huynh, Tuan Pham, Ho Vo, Quan Nguyen</f2><br />
  </footer>
</html>
