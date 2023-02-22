<!doctype html>
<?php
    require_once ('../database/functions_table.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add anime title</title>
</head>
<body>
<div>
<a href="admin_menu.php">Back</a>
</div>
<form method="post" action="add.php">
    <div>
        <label for="post-title">Title name</label>
        <input type="text" name="post-title" id="post-title">
    </div>
    <div>
        <label for="post-img">Title photo</label>
        <input type="file" name="post-img" id="post-img">
    </div>
    <div>
        <label for="post-year">Title year</label>
        <input type="text" name="post-year" id="post-year">
    </div>
    <div>
        <label for="post-description">Title description</label>
        <input type="text" name="post-description" id="post-description">
    </div>
    <button type="submit">Add</button>
</form>
</body>
</html>

<?php

$error_msg = '';

If($_SERVER['REQUEST_METHOD'] === 'POST'){
    $post_title = trim($_POST['post-title']);
    $post_img = "assets/img/" . trim($_POST['post-img']);
    $post_year = trim($_POST['post-year']);
    $post_description = trim($_POST['post-description']);
    if($post_title != '' && $post_img != '' && $post_year != '' && $post_description != ''){
        insert('post', ['post_title', 'post_img', 'post_year', 'post_description'],
        ["$post_title", "$post_img", "$post_year", "$post_description"]);
    }else{
        $error_msg = "smthing empty";
        echo $error_msg;
    }
}
?>
