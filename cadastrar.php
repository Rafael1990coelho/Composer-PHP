<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Fruta');

use \App\Entity\Fruta;
$obFruta = new Fruta;

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['peso'],$_POST['preco'])){

  $obFruta->nome = $_POST['nome'];
  $obFruta->peso     = $_POST['peso'];
  $obFruta->preco     = $_POST['preco'];
  $obFruta->cadastrar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';