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
    # code...
  }

  public function ListLocalByID()
  {
    # code...
  }

  public function UpdateLocal()
  {
    # code...
  }

  public function DeleteLocal()
  {
    # code...
  }

  public function EditLocal($value='')
  {

  }

}

?>
