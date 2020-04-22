<?php
session_start();

if (!isset($_SESSION["login"])) {
  # code...
  header("Location: ../index.php");
  exit();
}
?>
<?php

include '../tampil/Admin/header.php';
include '../tampil/Admin/sidebar.php';
include 'contenInput.php';
include '../tampil/footer.php';
?>