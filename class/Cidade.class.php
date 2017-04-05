<?php

class Cidade
{
  private $id;
  private $cidade;
  private $horario;
  private $local;
  private $local_grupo;

  public function __construct()
  {
    $this->bd = new BD();
    $this->tabela = "cidade";
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

  public function CreateCidade()
  {
    # code...
  }

  public function ListCidade()
  {
    # code...
  }

  public function ListCidadeByID()
  {
    # code...
  }

  public function UpdateCidade()
  {
    # code...
  }

  public function DeleteCidade()
  {
    # code...
  }

  public function EditCidade($value='')
  {

  }

}

?>
