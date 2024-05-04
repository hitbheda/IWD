<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <label for="name">Username:</label><br>
        <input type="text" id="username" name="username"><br>

        <label for="name">Old Password:</label><br>
        <input type="password" id="passwd" name="oldPasswd"><br>

        <label for="name">New Password:</label><br>
        <input type="password" id="passwd" name="newPasswd"><br>

        <label for="name">Verify Password:</label><br>
        <input type="password" id="passwd" name="verifyPasswd"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>