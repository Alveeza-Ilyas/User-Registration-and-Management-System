<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>
</head>
<body style="font-family: Arial; background-color:#f9f9f9;">

<h2 style="text-align:center;">Registered Users</h2>

<table border="1" cellpadding="10" cellspacing="0"
       style="margin:auto; background:white;">

<tr style="background:#ddd;">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Actions</th>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
