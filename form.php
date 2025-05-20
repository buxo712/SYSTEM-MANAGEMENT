<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Black and White Login Form</title>
<style>
    body {
        background-color: #000;
        color: #fff;
        font-family: Arial, sans-serif;
    }
    .container {
        width: 300px;
        margin: 100px auto;
        padding: 20px;
        background-color: #000;
        border: 2px solid #fff;
    }
    input[type="text"],
    input[type="password"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        display: block;
        border: 1px solid #fff;
        background-color: #000;
        color: #fff;
    }
    input[type="submit"] {
        background-color: #fff;
        color: #000;
        cursor: pointer;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form>
        <input type="text" placeholder="Username" required>
        <input type="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</div>
</body>
</html>
