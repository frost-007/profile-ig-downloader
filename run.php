<?php
//https://stackoverflow.com/questions/61577868/read-json-with-php-from-instagram-a-1
//github.com/pajaar

$user = "pajaarx";
$link = "https://instagram.com/".$user."?__a=1";
//decode json
$json = json_decode(file_get_contents($link));

//parse json
$link = $json->graphql->user->profile_pic_url_hd;

echo "<h1>User: $user";
echo "<br><br>";
echo "<img src=$link>";
?>
