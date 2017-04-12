<?php

include_once 'Carrega.class.php';

class Empresa
{
  private $id;
  private $titulo;
  private $foto;
  private $descricao;
  private $comoTrab;
  private $sonho;
  private $missao;
  private $valores;
}

  public function __construct()
  {
    $this->bd = new BD();
    $this->tabela = "empresa";
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

  public function CreateEmpresa()
  {
    # code...
  }

  public function ListEmpresa()
  {
    # code...
  }

  public function ListEmpresaByID($id='')
  {
    # code...
  }

  public function UpdateEmpresa()
  {
    # code...
  }

  public function DeleteEmpresa()
  {
    # code...
  }

  public function EditEmpresa()
  {

  }
?>
