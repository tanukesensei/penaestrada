<?php

class IVG
{
  /*Imagens de Viagens de Grupo.*/
  private $id;
  private $titulo;

  public function __construct()
  {
    $this->bd = new BD();
    $this->tabela = "";
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

  public function CreateIVG()
  {
    # code...
  }

  public function ListIVG()
  {
    # code...
  }

  public function ListIVGByID()
  {
    # code...
  }

  public function UpdateIVG()
  {
    # code...
  }

  public function DeleteIVG()
  {
    # code...
  }

  public function EditIVG($value='')
  {

  }

}

 ?>
