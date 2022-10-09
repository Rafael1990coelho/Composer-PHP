<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar fruta');

use \App\Entity\Fruta;

//VALIDAÇÃO DO ID
if(!isset($_GET['codigo']) or !is_numeric($_GET['codigo'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA A Fruta
$obFruta = Fruta::getFruta($_GET['codigo']);

//VALcodigoAÇÃO DA Fruta
if(!$obFruta instanceof Fruta){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['peso'],$_POST['preco'])){

  $obFruta->nome    = $_POST['nome'];
  $obFruta->peso = $_POST['peso'];
  $obFruta->preco     = $_POST['preco'];
  $obFruta->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';