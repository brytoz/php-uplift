<?php
require 'query.php';
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <title>Registration and Login</title>
</head>
<body>
    <h2>Register</h2>
   <?php echo '<form method="POST" action="'.register($conn).'">'; ?>
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required><br>
        <label for="reg">Reg No:</label>
        <input type="text" id="reg" name="reg" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="serial">Serial:</label>
        <input type="text" id="serial" name="serial" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Register</button>
    </form>

    <h2>Login</h2>
       <?php echo '<form method="POST" action="'login($conn)'">' ; ?>
        <label for="reg">Reg No:</label>
        <input type="text" id="reg" name="reg" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
