<?php
$email="subins2000@gmail.com";
list($id, $domain) = split("@",$email);
$headers = get_headers("https://profiles.google.com/s2/photos/profile/".$id, 1);
$url = $headers[‘Location’];
?>