<!DOCTYPE html>
<?php
include 'app/include/header.php';
include 'app/database/functions_table.php';
require 'app/database/connect.php';

$data = selectInfoById("post", $_GET['id']);
?>
<!--Maint content(single post)-->
<div class="container">
    <div class="content row">
        <div class="main-content col-md-9">
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <?= "<img src=\"" . $data['post_img'] . "\" class=\"post image\" alt=\"" . $data['post_title'] . "\">"; ?>
                </div>
                <div class="post_text col-12 col-md-8">
                    <h1>
                        <?= $data['post_title']; ?>
                    </h1>
                    <i>
                        <?= $data['post_year']; ?>
                    </i>
                    <p class="preview-text">
                        <?= $data['post_description']; ?>
                    </p>
                </div>
                <div>
                    <video controls>
                        <source src="assets/video/test.mp4" type="video/mp4">
                        <source src="assets/video/test.mp4" type="video/ogg">
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Main content(posts) END-->
<?php
include_once 'app/include/comment.php';
?>
</html>