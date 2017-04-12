<?php

include_once 'Carrega.class.php';

class ViagensClientes
{
  private $idCliente;
  private $idViagem;
  private $titulo;
  private $status;
  private $valor;

  public function __construct()
  {
    $this->bd = new BD();
    $this->tabela = "viagens_clientes";
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

  public function CreateViagensClientes()
  {
    # code...
  }

  public function ListViagensClientes()
  {
    # code...
  }

  public function ListViagensClientesByID()
  {
    # code...
  }

  public function UpdateViagensClientes()
  {
    # code...
  }

  public function DeleteViagensClientes()
  {
    # code...
  }

  public function EditViagensClientes($value='')
  {

  }

}

 ?>
