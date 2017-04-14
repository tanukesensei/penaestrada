<?php

include_once 'Carrega.class.php';

class Local
{
  private $id;
  private $data;

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

  public function CreateLocal()
  {
    $sql    = "INSERT INTO local (data) VALUES ('$this->data')";
    $return = pg_query($sql);
    return $return;
  }

  public function ListLocal()
  {
    $sql       = "SELECT * FROM local ORDER BY id DESC";
    $resultado = pg_query($sql);
    $return    = NULL;

    while ($registro = pg_fetch_assoc($resultado))
    {
      $object       = new Local();
      $object->id   = $registro["id"];
      $object->data = $registro["data"];

      $return[] = $object;
    }
    return $return;
  }

  public function ListLocalByID()
  {
    # code...
  }

  public function UpdateLocal()
  {
    $return = NULL;
    $sql    = "UPDATE local SET  data ='$this->data' WHERE id = $this->id";
    $return = pg_query($sql);
    return $return;
  }

  public function DeleteLocal()
  {
    $sql    = "DELETE FROM local WHERE id = $this->id";
    $return = pg_query($sql);
    return $return;
  }

  public function EditLocal($id='')
  {
    $sql       = "SELECT * FROM local WHERE id = $id ";
    $resultado = pg_query($sql);
    $return    = NULL;

    while ($registro = pg_fetch_assoc($resultado))
    {
      $object       = new Local();
      $object->id   = $registro["id"];
      $object->data = $registro["data"];

      $return = $object;
    }
    return $return;
  }

}

?>
