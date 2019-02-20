<?php
if(!isset($_GET['uri'])) {
    $url = 'https://s3.eu-west-3.amazonaws.com/magazine-tm/8/index.html';
}
else {
    $url = 'https://s3.eu-west-3.amazonaws.com/magazine-tm/8/' . $_GET['uri'];
}
@$content = file_get_contents($url);
foreach($http_response_header as $header)
    header($header, FALSE);
die($content);
?>