<?php
require 'app2.php';
function incluirTemplateAdmin(string $nombre,bool $inicio = false){
    include TEMPLATES_URL."/${nombre}.php" ;
}

