<?php

include_once 'Carrega.class.php';

class ImgViagens
{
  private $id;
  private $foto;
  private $ivg;

  /*ivg: Imagens de Viagens de Grupo*/

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

  public function CreateImgViagens()
  {
    $sql    = "INSERT INTO imagens_viagens (foto, imagens_viagens_grupo) VALUES ('$this->foto', '$this->ivg')";
    $return = pg_query($sql);
    return $return;
  }

  public function ListImgViagens()
  {
    $sql       = "SELECT * FROM imagens_viagens ORDER BY id DESC";
    $resultado = pg_query($sql);
    $return    = NULL;

    while ($registro = pg_fetch_assoc($resultado))
    {
      $object       = new ImgViagens();
      $object->id   = $registro["id"];
      $object->foto = $registro["foto"];
      $object->ivg  = $registro["imagens_viagens_grupo"];

      $return[] = $object;
    }
    return $return;
  }

  public function ListImgViagensByID()
  {
    # code...
  }

  public function UpdateImgViagens()
  {
    $return = NULL;
    $sql    = "UPDATE imagens_viagens SET foto ='$this->foto', imagens_viagens_grupo ='$this->ivg' WHERE id = $this->id";
    $return = pg_query($sql);
    return $return;
  }

  public function DeleteImgViagens()
  {
    $sql    = "DELETE FROM imagens_viagens WHERE id = $this->id";
    $return = pg_query($sql);
    return $return;
  }

  public function EditImgViagens($value='')
  {
    $sql       = "SELECT * FROM imagens_viagens WHERE id = $id ";
    $resultado = pg_query($sql);
    $return    = NULL;

    while ($registro = pg_fetch_assoc($resultado))
    {
      $object       = new ImgViagens();
      $object->id   = $registro["id"];
      $object->foto = $registro["foto"];
      $object->ivg  = $registro["imagens_viagens_grupo"];

      $return = $object;
    }
    return $return;
  }

}

 ?>
