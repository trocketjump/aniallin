<!DOCTYPE html>
<?php
include 'app/include/header.php';
include 'app/database/select_table.php';
require 'app/database/connect.php';
?>
<!--Maint content(single post)-->
<?php
$data = select_single_info("post", $_GET['id']);
?>
<div class="container">
    <div class="content row">
        <div class="main-content col-md-9">
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <?php echo "<img src=\"" . $data['post_img'] . "\" class=\"post image\">"; ?>
                </div>
                <div class="post_text col-12 col-md-8">
                    <h2>
                        <?php echo $data['post_title']; ?>
                    </h2>
                    <i>
                        <?php echo $data['post_year']; ?>
                    </i>
                    <p class="preview-text">
                        <?php echo $data['post_description']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

?>
<!--Main content(posts) END-->
<?php
include 'app/include/footer.php';
?>
</html>