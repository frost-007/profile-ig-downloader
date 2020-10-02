<?php
//https://stackoverflow.com/questions/61577868/read-json-with-php-from-instagram-a-1
//github.com/pajaar
$username = "pajaarx";
$profileUrl = "https://instagram.com/{$username}?__a=1";
$json = json_decode(@file_get_contents($profileUrl));

@ $profilePhotoUrl = $json->graphql->user->profile_pic_url_hd;

if (filter_var($profilePhotoUrl, FILTER_VALIDATE_URL) === false) {
	exit("[!] Profile not found!");
}

$photo = @file_get_contents($profilePhotoUrl);
if (! $photo) {
	exit("[!] Something went wrong...!");
}
file_put_contents("$username.jpg", $photo);
exit("[i] Done!");
?>
