<?php



session_start();



include 'koneksi.php';



if (isset($_POST["login"])) {



  $Username = $_POST["username"];

  $Password = $_POST["password"];

  # code...



  if($result = mysqli_query($koneksi,"select user from login where user = '$Username'")); {

  # code...



  // cek username

  if (mysqli_num_rows($result) === 1) {

    $row=mysqli_query($koneksi,"select pass from login where pass = '$Password'");

    if (mysqli_num_rows($row) === 1) {



      // set session

      $_SESSION["login"] = true;



    header("Location: User/mainclass1.php");

    exit;

  }

}

}



 if($result = mysqli_query($koneksi,"select username from admin where username = '$Username'"));{

  # code...



  // cek username

  if (mysqli_num_rows($result) === 1) {

    $row=mysqli_query($koneksi,"select password from admin where password = '$Password'");

    if (mysqli_num_rows($row) === 1) {



      // set session

      $_SESSION["login"] = true;



    header("Location: Admin/mainclass1.php");

    exit;

  }

}

}

   $error = true;



}





?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>َSpliter Viewer Login</title>

    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="dist/img/latranss.png">

  </head>

  <body>

<form class="box" action="" method="post">

    <img src="dist/img/la.png" width="100" height="100" class="image">

  <h1><strong>Lintasarta</strong></h1>

  <br>

   <?php if(isset($error)) : ?>



    <P style="color: red;font-style: italic;">Invalid Username / Password</P>

    <?php  endif; ?>

<br>

  <input type="text" name="username" placeholder="Username">

  <input type="password" name="password" placeholder="Password">

  <input type="submit" name="login" value="Login">

</form>





  </body>

</html>

