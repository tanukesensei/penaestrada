<?php

include_once 'Carrega.class.php';

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
    $sql    = "INSERT INTO imagens_viagens_grupo (titulo) VALUES ('$this->titulo')";
    $return = pg_query($sql);
    return $return;
  }

  public function ListIVG()
  {
    $sql       = "SELECT * FROM imagens_viagens_grupo ORDER BY id DESC";
    $resultado = pg_query($sql);
    $return    = NULL;

    while ($registro = pg_fetch_assoc($resultado))
    {
      $object         = new IVG();
      $object->id     = $registro["id"];
      $object->titulo = $registro["titulo"];

      $return[] = $object;
    }
    return $return;
  }

  public function ListIVGByID()
  {
    # code...
  }

  public function UpdateIVG()
  {
    $return = NULL;
    $sql    = "UPDATE imagens_viagens_grupo SET titulo ='$this->titulo' WHERE id = $this->id";
    $return = pg_query($sql);
    return $return;
  }

  public function DeleteIVG()
  {
    $sql    = "DELETE FROM imagens_viagens_grupo WHERE id = $this->id";
    $return = pg_query($sql);
    return $return;
  }

  public function EditIVG($id='')
  {
    $sql       = "SELECT * FROM imagens_viagens_grupo WHERE id = $id ";
    $resultado = pg_query($sql);
    $return    = NULL;

    while ($registro = pg_fetch_assoc($resultado))
    {
      $object         = new IVG();
      $object->id     = $registro["id"];
      $object->titulo = $registro["titulo"];

      $return = $object;
    }
    return $return;
  }

}

 ?>
