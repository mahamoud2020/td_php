<?php

require_once 'vendor/autoload.php';
require_once 'config/bdd.php';
require_once 'Models/jeux_videos.php';
$jeux_video = jeux_videos::all();

echo '<pre>';
print_r($jeux_video);




?>
