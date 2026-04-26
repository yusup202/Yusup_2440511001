<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="hero">
    <h1>Login </h1>

    <form action="proses_login.php" method="POST">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <button type="submit">Login</button>
    </form>

    <div class="hasil-card" style="margin-top:20px; text-align:center;">
        <p>Username: <b>admin</b></p>
        <p>Password: <b>123</b></p>
    </div>
</div>

</body>
</html>