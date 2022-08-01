<?php

require_once("config.php");

$joao = new Usuario();

$joao->loadById(3);

echo $joao;







?>