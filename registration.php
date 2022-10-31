<!DOCTYPE html>
<?php
include 'app/include/header.php';
?>
<!--registration form-->
<div class="container form_registration">
    <div class="row">
        <form action="php/registration.php" method="post">
            <div class="mb-3 col-12 col-md-4">
                <label for="InputName" class="form-label">Name:</label>
                <input type="text" name="username" id="InputName" class="form-control">
            </div>
            <div class="mb-3 col-12 col-md-4">
                <label for="InputBirthday" class="form-label">Birthday:</label>
                <input type="date" name="birthday" id="InputBirthday" class="form-control">
            </div>
            <div class="mb-3 col-12 col-md-4">
                <label for="InputEmail" class="form-label">Email:</label>
                <input type="email" name="email" id="InputEmail" class="form-control">
            </div>
            <div class="mb-3 col-12 col-md-4">
                <label for="InputPassword" class="form-label">Password:</label>
                <input type="password" name="password" id="InputPassword" class="form-control">
            </div>
            <div class="mb-3 col-12 col-md-4">
                <label for="RepeatPassword" class="form-label">Repeat password:</label>
                <input type="password" name="" id="RepeatPassword" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">OK</button>
        </form>
    </div>
</div>
<!--registration formEND-->
</body>
</html>