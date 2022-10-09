<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Fruta{

  
  public $codigo;

  public $nome;

 
  public $peso;

  public $preco;

  public function cadastrar(){
    //INSERIR A FRUTA NO BANCO
    $obDatabase = new Database('frutas');
    $this->codigo = $obDatabase->insert([
                                      'codigo'    => $this->codigo,
                                      'nome'      => $this->nome,
                                      'peso'      => $this->peso,
                                      'preco'     => $this->preco
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  public function atualizar(){
    return (new Database('frutas'))->update('codigo = '.$this->codigo,[
                                                                'codigo'    => $this->codigo,
                                                                'nome'      => $this->nome,
                                                                'peso'      => $this->peso,
                                                                'preco'     => $this->preco
                                                              ]);
  }

  
  public function excluir(){
    return (new Database('frutas'))->delete('codigo = '.$this->codigo);
  }

  
  public static function getFrutas($where = null, $order = null, $limit = null){
    return (new Database('frutas'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  
  public static function getFruta($codigo){
    return (new Database('frutas'))->select('codigo = '.$codigo)
                                  ->fetchObject(self::class);
  }

}