<?php

class ImgViagens
{
  private $id;
  private $foto;
  private $ivg;

  /*ivg: Imagens de Viagens de Grupo*/

  public function __construct()
  {
    $this->bd = new BD();
    $this->tabela = "imagens_viagens_grupo";
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
    # code...
  }

  public function ListImgViagens()
  {
    # code...
  }

  public function ListImgViagensByID()
  {
    # code...
  }

  public function UpdateImgViagens()
  {
    # code...
  }

  public function DeleteImgViagens()
  {
    # code...
  }

  public function EditImgViagens($value='')
  {

  }

}

 ?>
