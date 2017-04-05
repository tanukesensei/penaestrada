<?php

class Viagens
{
  private $id;
  private $categoria;
  private $descricao;
  private $inclui;
  private $levar;
  private $roteiro;
  private $itinerario;
  private $vagas;
  private $dicas;
  private $valor;
  private $promocao;
  private $local_grupo;
  private $empresa;
  private $ivg;

  /*
  Inclui: o que inclui o pacote da viagem. Ex: café da manhã, almoço, etc.

  Levar: o que levar na viagem. Ex: comida, água, barraca.

  IVG: Imagens de Viagens de Grupo.
  */

  public function __construct()
  {
    $this->bd = new BD();
    $this->tabela = "viagens";
  }

  public function __destruct()
  {
     unset($this->bd);
  }

  public function __get($key)
  {
     return $this->$key;
  }

  public function __set($key, $value)
  {
     $this->$key = $value;
  }

  public function CreateViagens()
  {
    # code...
  }

  public function ListViagens()
  {
    # code...
  }

  public function ListViagensByID()
  {
    # code...
  }

  public function UpdateViagens()
  {
    # code...
  }

  public function DeleteViagens()
  {
    # code...
  }

  public function EditViagens($value='')
  {

  }

}

 ?>
