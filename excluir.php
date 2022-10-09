<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Fruta;

//VALIDAÇÃO DO ID
if(!isset($_GET['codigo']) or !is_numeric($_GET['codigo'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA A VAGA
$obFruta = Fruta::getFruta($_GET['codigo']);

//VALIDAÇÃO DA Fruta
if(!$obFruta instanceof Fruta){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

  $obFruta->excluir();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';