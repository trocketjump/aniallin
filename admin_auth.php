<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
<form method="post" action="php/admin.php">
    <div class="mb-3 col-12 col-md-4">
        <label for="InputLogin" class="form-label">Login</label>
        <input type="text" class="form-control" id="InputLogin" name="username">
    </div>
    <div class="mb-3 col-12 col-md-4">
        <label for="InputPassword" class="form-label">Password</label>
        <input type="password" class="form-control" id="InputPassword" name="password">
    </div>
    <button type="submit" name="submit">Ok</button>
</form>
</body>
</html>
