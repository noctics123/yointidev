<?php
require 'app3.php';
function incluirTemplateInfo(string $nombre){
    include TEMPLATES_URL."/${nombre}.php" ;
}