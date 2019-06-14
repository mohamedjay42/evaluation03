<?php


function get($resource){
    $apiUrl = 'http://evaluation03/wp-json';
    $json = file_get_contents($apiUrl.$resource);
    $result = json_decode($json);
    return $result;
}

$pages = get('/wp/v2/evenements');
 
foreach($pages as $page) {
    echo 'Page ' . $page->id . ' : ' . $page->slug . '<br>';
}

foreach($pages as $page) {
    echo 'Page ' . $page->id . ' : ' . $page->date_gmt . '<br>';
}


//var_dump($pages);
