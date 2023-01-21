<?php
require 'app5.php';
function incluirTemplateEquipo(string $nombre){
    include TEMPLATES_URL."/${nombre}.php" ;
}