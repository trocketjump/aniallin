<!DOCTYPE html>
<?php
include 'app/include/header.php';
include 'app/database/functions_table.php';
?>
<!--authorization-->
<div class="container form_registration">
    <div class="row">
        <form method="post" action="php/login.php">
        <div class="mb-3 col-12 col-md-4">
            <label for="InputLogin" class="form-label">Login</label>
            <input type="text" class="form-control" id="InputLogin" name="username">
        </div>
        <div class="mb-3 col-12 col-md-4">
            <label for="InputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="InputPassword" name="password">
        </div>
        <button type="submit" class="btn btn-primary">LogIn</button>
            <a href="registration.php">Registration</a>
    </form>
    </div>
</div>
<!--authorization END-->
<?php
include 'app/include/footer.php';
?>
</html>