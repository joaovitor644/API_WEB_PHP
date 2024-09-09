<?php
require_once './routes/Route.php'; 

header('Content-Type: application/json');

$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
//echo $url;
Route::resolve($url,$method);



?>
