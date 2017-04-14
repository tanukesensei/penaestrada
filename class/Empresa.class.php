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


  public function __construct()
  {
    $this->bd = new BD();
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
    $sql    = "INSERT INTO empresa (titulo, foto, descricao, comoTrab, sonho, missao, valores) VALUES ('$this->titulo', '$this->foto', '$this->descricao', '$this->comoTrab'
                '$this->sonho', '$this->missao', '$this->valores')";
    $return = pg_query($sql);
    return $return;
  }

  public function ListEmpresa()
  {
    $sql       = "SELECT * FROM empresa ORDER BY id DESC";
    $resultado = pg_query($sql);
    $return    = NULL;

    while ($registro = pg_fetch_assoc($resultado))
    {
      $object         = new Empresa();
      $object->id     = $registro["id"];
      $object->titulo = $registro["titulo"];

      $return[] = $object;
    }
    return $return;
  }

  public function ListEmpresaByID($id='')
  {
    # code...
  }

  public function UpdateEmpresa()
  {
    $return = NULL;
    $sql    = "UPDATE empresa SET titulo ='$this->titulo',
                                  foto      = '$this->foto',
                                  descricao = '$this->descricao',
                                  comoTrab  = '$this->comoTrab',
                                  sonho     = '$this->sonho',
                                  missao    = '$this->missao',
                                  valores   = '$this->valores'
                              WHERE id = $this->id";
    $return = pg_query($sql);
    return $return;
  }

  public function DeleteEmpresa()
  {
    $sql    = "DELETE FROM empresa WHERE id = $this->id";
    $return = pg_query($sql);
    return $return;
  }

  public function EditEmpresa()
  {
    $sql       = "SELECT * FROM empresa WHERE id = $id ";
    $resultado = pg_query($sql);
    $return    = NULL;

    while ($registro = pg_fetch_assoc($resultado))
    {
      $object            = new Empresa();
      $object->id        = $registro["id"];
      $object->titulo    = $registro["titulo"];
      $object->foto      = $registro["foto"];
      $object->descricao = $registro["descricao"];
      $object->comoTrab  = $registro["comoTrab"];
      $object->sonho     = $registro["sonho"];
      $object->missao    = $registro["missao"];
      $object->valores   = $registro["valores"];

      $return = $object;
    }
    return $return;
  }
?>
