<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body style="font-family: Arial; background-color: #f2f2f2;">

<h2 style="text-align:center;">User Registration Form</h2>

<form method="POST" action="insert.php" 
      style="width:300px; margin:auto; padding:20px; background:white; border-radius:5px;">

    <label>Name:</label><br>
    <input type="text" name="name" required
           style="width:100%; padding:8px; margin:5px 0;"><br>

    <label>Email:</label><br>
    <input type="email" name="email" required
           style="width:100%; padding:8px; margin:5px 0;"><br>

    <label>Password:</label><br>
    <input type="password" name="password" required
           style="width:100%; padding:8px; margin:5px 0;"><br>

    <input type="submit" value="Register"
           style="width:100%; padding:10px; background:green; color:white; border:none;">
</form>

<br>
<p style="text-align:center;">
    <a href="view.php">View Registered Users</a>
</p>

</body>
</html>
