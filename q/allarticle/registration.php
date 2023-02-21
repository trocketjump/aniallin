<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
<!-- Registration form -->
<form name="registration-form" method="post" action="#">
    <div>
        <label for="username">FirstName</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="repeat-password">Repeat Password</label>
        <input type="password" name="repeat-password" id="repeat-password">
    </div>
    <button type="submit">Ok</button>
</form>
</body>
</html>