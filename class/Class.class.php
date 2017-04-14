<?php
/**
 *
 */

//include_once 'Carrega.class.php';

  class Class
  {
    private $;
    private $;
    private $;
    private $;
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

    public function CreateClass()
    {
      $sql    = "INSERT INTO  () VALUES ('$this->')";
      $return = pg_query($sql);
      return $return;
    }

    public function ListClass()
    {
      $sql       = "SELECT * FROM  ORDER BY id DESC";
      $resultado = pg_query($sql);
      $return    = NULL;

      while ($registro = pg_fetch_assoc($resultado))
      {
        $object            = new ();
        $object->id        = $registro["id"];
        $object-> = $registro[""];

        $return[] = $object;
      }
      return $return;
    }

    public function ListClassByID()
    {
      # code...
    }

    public function UpdateClass()
    {
      $return = NULL;
      $sql    = "UPDATE  SET  ='$this->' WHERE id = $this->id";
      $return = pg_query($sql);
      return $return;
    }

    public function DeleteClass()
    {
      $sql    = "DELETE FROM  WHERE id = $this->id";
      $return = pg_query($sql);
      return $return;
    }

    public function EditClass($value='')
    {
      $sql       = "SELECT * FROM  WHERE id = $id ";
      $resultado = pg_query($sql);
      $return    = NULL;

      while ($registro = pg_fetch_assoc($resultado))
      {
        $object            = new ();
        $object->id        = $registro["id"];
        $object-> = $registro[""];

        $return = $object;
      }
      return $return;
    }

  }

?>
