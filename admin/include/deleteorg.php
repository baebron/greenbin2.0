<?php
require('../../include/db.php');

// Check if the admin is logged in
if (!isset($_SESSION['isAdminLoggedIn'])) {
  echo "<script>window.location.href='adminLogin.php';</script>";
  exit();
}

$admin_id = $_SESSION['admin_id'];

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $query = "DELETE FROM orgs WHERE id=$id AND admin_id=$admin_id";

  $run = mysqli_query($db, $query);
  if ($run) {
    echo "<script>window.location.href='../admin.php?organizationsetting=true';</script>";
    exit();
  }
}
?>