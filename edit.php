<?php
include "db.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body style="font-family: Arial;">

<h2 style="text-align:center;">Edit User</h2>

<form method="POST" action="update.php"
      style="width:300px; margin:auto;">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

Name:<br>
<input type="text" name="name" value="<?php echo $row['name']; ?>" style="width:100%;"><br><br>

Email:<br>
<input type="email" name="email" value="<?php echo $row['email']; ?>" style="width:100%;"><br><br>

Password:<br>
<input type="text" name="password" value="<?php echo $row['password']; ?>" style="width:100%;"><br><br>

<input type="submit" value="Update"
       style="width:100%; padding:10px; background:blue; color:white; border:none;">
</form>

</body>
</html>
