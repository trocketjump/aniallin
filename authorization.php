<!DOCTYPE html>
<?php
include 'app/include/header.php';
?>
<!--authorization-->
<div class="container form_registration">
    <div class="row">
        <form method="post" action="">
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col-12 col-md-4">
            <label for="InputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="InputPassword">
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