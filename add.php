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

    <form method="POST" class="form form2" action="#" style="width: 50%;">

      <p1 style="padding-left: 10px;">Add new Patient</p1>
      <br />
      <br />
      <input type="text" name="name" placeholder="Patient name"
          class="input input2" />
      <input type="date" name="admission" placeholder="Admission date"
          class="input input2" style="width: 250px;"/>
      <input type="date" name="discharge"  placeholder="Discharge date"
          class="input input2" style="width: 250px;"/>
      <br />
      <input type="text" name="address" placeholder="Address"
          class="input input2" style="width: 430px;"/>
      <p2 style="padding-left: 10px;">Female</p2>
      <input type="checkbox" name="gender" placeholder="Female"
          class="input" />
      <input type="tel" name="tel"  placeholder="Phone number"
          class="input input2" />
      <br />
      <input type="submit" name="submit" value="Add new Patient" style="margin: 15px 0px 0px 8px;"
          class="button button2-addnew" />
    </form>



    <br />
    <br />

    <?php
      $conn = new mysqli('localhost', 'root', 'Pr0sTiTute', 'example');

      if(isset($_POST['submit'])){
          $name = $_POST['name'];

        echo "<error>Added successfully.</error>";
          // queries
        //$query = "INSERT INTO * VALUES('$name') ";
        //$id = 0;

      };
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
