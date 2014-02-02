<?php
$path = dirname($_SERVER['PHP_SELF']);
$path_array = explode('/', $path);
$title = ucwords(str_replace("-", " ", end($path_array)));
$inc = $_SERVER['DOCUMENT_ROOT'].'/stfrancisdesales/';
include $inc.'sub_index.php';
?>