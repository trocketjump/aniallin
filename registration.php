<?php
include 'app/include/header.php';
include_once 'app/controllers/users.php';

$action_value = '';
if($isSubmit == true){
    $action_value = 'php/registration.php';
}else{
    $action_value = 'registration.php';
}
echo $isSubmit;
?>

<!--registration form-->
<div class="container form_registration">
    <div class="row">
        <form action="<?= $action_value; ?>" method="post">
            <div class="mb-3 col-12 col-md-4 error">
                <p><?= $errormsg ?></p>
            </div>
            <div class="mb-3 col-12 col-md-4">
                <label for="InputName" class="form-label">Name:</label>
                <input type="text" value="<?= $username;?>" name="username" id="InputName" class="form-control">
            </div>
            <div class="mb-3 col-12 col-md-4">
                <label for="InputBirthday" class="form-label">Birthday:</label>
                <input type="date" value="<?= $birthday;?>" name="birthday" id="InputBirthday" class="form-control">
            </div>
            <div class="mb-3 col-12 col-md-4">
                <label for="InputEmail" class="form-label">Email:</label>
                <input type="email" value="<?= $email;?>" name="email" id="InputEmail" class="form-control">
            </div>
            <div class="mb-3 col-12 col-md-4">
                <label for="InputPassword" class="form-label">Password:</label>
                <input type="password" name="password" id="InputPassword" class="form-control">
            </div>
            <div class="mb-3 col-12 col-md-4">
                <label for="RepeatPassword" class="form-label">Repeat password:</label>
                <input type="password" name="repeat-password" id="RepeatPassword" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="btn-registr">OK</button>
        </form>
    </div>
</div>
<!--registration formEND-->

</body>
</html>
