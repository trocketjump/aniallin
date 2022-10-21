<?php
require_once 'get_data_post.php';
function postShow(){
    foreach ($rows as $row) {
        $array = $row;
        print_r($array);
    }

}
postShow();