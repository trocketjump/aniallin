<!DOCTYPE html>
<?php
include 'app/database/functions_table.php';
include 'app/include/header.php';
require 'app/database/connect.php';
require_once 'app/include/pagination.php';

$data = selectAll("post");
$part_of_data = pagination($data, 'page', 5, 'post');

foreach ($part_of_data as $key=>$value): ?>
<!--Maint content(posts)-->
<div class="container">
    <div class="content row">
        <div class="main-content col-md-9">
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <?= "<img src=\"" . $value['post_img'] . "\" class=\"post image\"" . "alt=\"" . $value['post_title'] . "\">"; ?>
                </div>
                <div class="post_text col-12 col-md-8">
                    <a href="single_post.php?id=<?= $value['ID']?>"><h2>
                         <?= $value['post_title']; ?>
                    </h2></a>
                    <i>
                        <?= $value['post_year']; ?>
                    </i>
                    <p class="preview-text">
                        <?= $value['post_description']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    <br>
    <br>
    <br>
    <br>
<?php
endforeach;
?>
<!--Main content(posts) END-->

<?php
include 'app/include/footer.php';
?>
