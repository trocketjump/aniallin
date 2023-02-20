<?php
include_once 'simple_html_dom.php';

function curlGetPage($url, $referer = 'https//google.com/'){ //url - адресс страницы, referer - адресс с которой перешли страницы
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);//ИГНОРИРУЕТ
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//ПРОВЕРКУ СЕРТЕФИКАТА
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_REFERER, $referer);
    curl_setopt($ch, CURLOPT_HEADER, 0);//отключаем вывод заголовка
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);//ВЫВОДИМ РЕЗУЛЬТАТ
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}
//https://bergerkraus.pl/en_US/c/Excavators/1
echo curlGetPage('https://www.pravda.com.ua/rus/articles/');
$page = curlGetPage('https://animevost.org/');
$html = str_get_html($page);

foreach ($html->find('.f-grid-12') as $post) {//.product-inner-wrap
    $img = $post->find('img', 0);
    echo $img->src;
    echo "<br>";
}
