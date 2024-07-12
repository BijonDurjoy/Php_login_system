<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="./login.php" method="post">
        <h2>PHP Login System</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <input type="text" name="uname" placeholder="Enter Username">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <br>
        <button type="submit">Login</button>
    </form>
</body>

</html> 