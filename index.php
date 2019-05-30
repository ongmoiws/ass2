<html>
  <head>
    <title>Demo Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
  </head>

  <body>
    <form method="POST" class="form form1" action="manager.php">
      <cap>Username</cap>
      <input type="text" name="username" class="input input1"></input>
      <cap>Password</cap>
      <input type="password" name="password" class="input input1"></input>
      <br />
      <input type="submit" class="button button1" style="margin: 10px 0px 0px 50px;"/>
    </form>

    <?php
    // Login?
    session_start();
    if ( ! empty( $_POST ) ) {
        if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
            // Getting submitted user data from database
            $conn = new mysqli('localhost', 'root', 'password', example);
        }
    }
    ?>


  </body>

  <footer>
      <f1>Assignment 2 - SQL</f1><br />
      <f2>Designed by Nhat Nguyen, Tien Huynh, Tuan Pham, Ho Vo, Quan Nguyen</f2><br />
  </footer>
</html>
