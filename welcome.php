<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>welcome</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Hello, <?php echo $_SESSION['user_name'];?></h1>
        <form action="./logout.php" method="post">
            <button type="submit">Logout</button>
        </form>
    </body>
    </html>

    <?php
}
else{
    header("Location: index.php");
    exit();
}
?>