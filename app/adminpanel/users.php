<!doctype html>
<?php
require_once "../database/functions_table.php";

$data = selectAll('user');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
<a href="../../php/admin_menu.php">Back</a>
<table>
    <tr>
        <th>username</th>
        <th>birthday</th>
        <th>email</th>
        <th> </th>
    </tr>
    <?php foreach ($data as $key => $value):?>
    <tr>
        <td><?php echo $value['username']; ?></td>
        <td><?php echo $value['birthday']; ?></td>
        <td><?php echo $value['email']; ?></td>
        <td><button onclick="">Delete</button></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
