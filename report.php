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

    <p0 style="margin-left: 90px;">Report</p0>
    <br />

    <p1 style="margin-left: 90px;">Name: </p1><p2>Placeholder</p2>
    <p1 style="margin-left: 90px;">Admission date: </p1><p2>Placeholder</p2>
    <p1 style="margin-left: 90px;">Discharge date: </p1><p2>Placeholder</p2>
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
      <tr>
        <td>1</td>
        <td>Demo Name</td>
        <td>0918181818</td>
        <td>5/11/2019</td>
        <td>5/12/2019</td>
      </tr>
    </table>

  </body>

  <footer>
      <f1>Assignment 2 - SQL</f1><br />
      <f2>Designed by Nhat Nguyen, Tien Huynh, Tuan Pham, Ho Vo, Quan Nguyen</f2><br />
  </footer>
</html>
