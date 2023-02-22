<?php
include_once __DIR__ . '/../database/functions_table.php';
function pagination($data, $get_parameter, $limit, $database): array{
    $page = $_GET[$get_parameter] ?? 1;
    $page = (int) $page;
    $total_pages = round(countRow($database) / $limit);

    if(!$page || $page < 1 || is_string($page)){
        $page = 1;
    }
    if($page > $total_pages){
        $page = $total_pages;

    }
    $offset = $limit * ($page - 1);

    $part_of_data = array_slice($data, $offset, $limit);
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if(str_contains($url, '?')) {
        if(str_contains($url, '&')){
            $url = strstr($url, '&', true);
            for($i = 1; $i <= $total_pages; $i++) {
                echo "<a href='$url&$get_parameter=$i'>$i</a>";
            }
        } else {
            if (str_contains($url, $get_parameter)) {
                $url = strstr($url, '?', true);
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<a href='$url?$get_parameter=$i'>$i</a>";
                }
            } else {
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<a href='$url&$get_parameter=$i'>$i</a>";
                }
            }
        }
    }else{
        for($i = 1; $i <= $total_pages; $i++){
            echo "<a href='?$get_parameter=$i'>$i</a>";
        }
    }


    return $part_of_data;
}