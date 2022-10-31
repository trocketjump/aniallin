<!DOCTYPE html>
<?php
include 'app/include/header.php';
include 'app/database/select_table.php';
require 'app/database/connect.php';
?>

<!--posts-->
<?php
echo "<h1>Новые посты</h1>";
$data = select_all_info("blog");
foreach ($data as $key=>$value){
    ?>
<div class="container">
    <div class="content row">
        <div class="main-content col-md-9">
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <?php echo "<img src=\"" . $value['blog_img'] . "\" class=\"post image\">"; ?>
                </div>
                <div class="post_text col-12 col-md-8">
                    <a href=""><h2>
                       <?php echo $value['blog_title']; ?>
                    </h2></a>
                    <i>
                        <?php echo $value['adding_date']; ?>
                    </i>
                    <p class="preview-text">
                        <?php echo $value['blog_text']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
<!--posts-- END>

<?php
include 'app/include/footer.php';
?>
</html>
