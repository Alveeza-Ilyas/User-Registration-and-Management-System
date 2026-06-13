<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "UPDATE users SET
          name='$name',
          email='$email',
          password='$password'
          WHERE id=$id";

mysqli_query($conn, $query);

header("Location: view.php");
?>
