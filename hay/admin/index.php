<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<style>
body{
    background-color: green;
}
.login{
    width: 400px;
    height: 170px;
    background-color: yellow;
    color: black;
    text-align: center;
    margin: auto;
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
}
</style>

<body>
    <div class="login">
    <form role="form" action="cek_login.php" method="POST" name="login">
        <br>
        <div class="form-group">
            <label for="username"><img src="img/icon login.png" width="20px"> Username </label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
        </div>
        <br>
        <div class="form-group">
            <label for="password"><img src="img/icon password.png" width="20px"> Password </label>
            <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>
        <br>
        <button type="submit" class="btn btn-success btn-block" value="login"><img src="img/icon masuk.png" width="20px"> Login</button>
    </form>
</body>
</html>