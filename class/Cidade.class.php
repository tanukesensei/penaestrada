<?php

include_once 'Carrega.class.php';

class Cidade
{
  private $id;
  private $cidade;
  private $horario;
  private $local;
  private $local_grupo;
  private $bd;

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

  public function CreateCidade()
  {
    $sql    = "INSERT INTO cidade (cidade, horario, local, local_grupo) VALUES ('$this->cidade', '$this->horario', '$this->local', '$this->local_grupo')";
    $return = pg_query($sql);
    return $return;
  }

  public function ListCidade()
  {
    $sql       = "SELECT * FROM cidade ORDER BY id DESC";
    $resultado = pg_query($sql);
    $return    = NULL;

    while ($registro = pg_fetch_assoc($resultado))
    {
      $object         = new Cidade();
      $object->id     = $registro["id"];
      $object->cidade = $registro["cidade"];

      $return[]       = $object;
    }
    return $return;
  }

  public function ListCidadeByID()
  {
    # code...
  }

  public function UpdateCidade()
  {
    $return = NULL;
    $sql    = "UPDATE cidade SET cidade ='$this->cidade',
                                  local ='$this->local',
                                  horario ='$this->horario',
                                  local_grupo ='$this->local_grupo'
                            WHERE id = $this->id";
    $return = pg_query($sql);
    return $return;
  }

  public function DeleteCidade()
  {
    $return = NULL;
    $sql    = "DELETE FROM cidade WHERE id = $this->id";
    $return = pg_query($sql);
    return $return;
  }

  public function EditCidade($id='')
  {
    $sql       = "SELECT * FROM cidade WHERE id = $id ";
    $resultado = pg_query($sql);
    $return    = NULL;

    while ($registro = pg_fetch_assoc($resultado))
    {
      $object              = new Cidade();
      $object->id          = $registro["id"];
      $object->cidade      = $registro["cidade"];
      $object->local       = $registro["local"];
      $object->local_grupo = $registro["local_grupo"];
      $object->horario     = $registro["horario"];

      $return = $object;
    }
    return $return;
  }

}

?>
