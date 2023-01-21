<?php
require 'app4.php';
function incluirTemplateGaleria(string $nombre){
    include TEMPLATES_URL."/${nombre}.php" ;
}