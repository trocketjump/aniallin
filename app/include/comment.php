<?php
include_once __DIR__ . '/../database/functions_table.php';
//вывод блока комментов
if(isset($_COOKIE["username"])) {
    echo <<<END
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<form method="post" action="#">
    <input type="text" name="text">
    <button type="submit">Ok</button>
</form>
</body>
</html>
END;
}
//запись коммента в бд
if(isset($_POST['text'])){
    insert("comment", ["comment_text", "username", "post_title"],
    [$_POST['text'], $_COOKIE['username'], $data['post_title']]);
}

//вывод всех комментов
$all_comments = selectAll("comment", ["post_title" => $data['post_title']]);

foreach ($all_comments as $key => $value) {
    echo $value['username'] . "<br>" . $value['comment_text'] . "<br>";
}
