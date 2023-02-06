<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Subpagina</h1>

    <a href="forum.php">klik hier</a>
    
    <form action="actionpage.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="uname" value="Name">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" value="Password">
        <br>
        <input type="submit" value="submit">

    </form>

<?php echo date("l") . "<br>";
echo date("l jS \of F Y h:i:s A"). "<br>";
?>
</body>
</html>