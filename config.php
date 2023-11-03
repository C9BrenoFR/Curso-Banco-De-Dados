<?php

$mysql = new mysqli('localhost', 'root', '', 'blog');
$mysql->set_charset('utf8');

if ($mysql == true) {
    echo "Conectado";
} else {
    echo "Erro de Conexão";
}


?>