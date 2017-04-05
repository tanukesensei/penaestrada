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
      # code...
    }

    public function ListClass()
    {
      # code...
    }

    public function ListClassByID()
    {
      # code...
    }

    public function UpdateClass()
    {
      # code...
    }

    public function DeleteClass()
    {
      # code...
    }

    public function EditClass($value='')
    {

    }

  }

?>
