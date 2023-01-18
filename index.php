<!DOCTYPE html>
<?php
include 'app/database/functions_table.php';
include 'app/include/header.php';
include 'app/database/select_table.php';
require 'app/database/connect.php';


$page = $_GET['page'] ?? 1;
$limit = 2;
$offset = $limit * ($page - 1);
$total_pages = round(countRow('post') / $limit, 0);

?>
<!--Maint content(posts)-->
<h1>Смотреть аниме</h1>
<?php
$data = select_all_info("post");
foreach ($data as $key=>$value){
?>
<div class="container">
    <div class="content row">
        <div class="main-content col-md-9">
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <?php echo "<img src=\"" . $value['post_img'] . "\" class=\"post image\">"; ?>
                </div>
                <div class="post_text col-12 col-md-8">
                    <a href="single_post.php?id=<?php echo $value['ID']?>"><h2>
                         <?php echo $value['post_title']; ?>
                    </h2></a>
                    <i>
                        <?php echo $value['post_year']; ?>
                    </i>
                    <p class="preview-text">
                        <?php echo $value['post_description']; ?>
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
}
?>
<!--Main content(posts) END-->

<?php
include 'app/include/footer.php';
?>
