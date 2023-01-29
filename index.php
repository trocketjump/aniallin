<!DOCTYPE html>
<?php
include 'app/database/functions_table.php';
include 'app/include/header.php';
include 'app/database/select_table.php';
require 'app/database/connect.php';
require_once 'app/include/pagination.php';

/*$page = $_GET['page'] ?? 1;
$limit = 5;
$total_pages = round(countRow('post') / $limit);
if(!$page || $page < 1 || is_string($page)){
    $page = 1;
}
if($page > $total_pages){
    $page = $total_pages;
}
$offset = $limit * ($page - 1);*/




?>
<!--Maint content(posts)-->
<h1>Смотреть аниме</h1>
<?php
$data = select_all_info("post");

/*for($i = 1; $i <= $total_pages; $i++){
    echo "<a href='?page=$i'>" . $i . " " . "</a>";
}*/


//$part_of_data = array_slice($data, $offset, $limit);
$part_of_data = pagination($data, 'page', 5, 'post');
foreach ($part_of_data as $key=>$value){
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
