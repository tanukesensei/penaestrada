<?php

include_once 'Carrega.class.php';

class Viagens
{
  private $id;
  private $categoria;
  private $titulo;
  private $descricao;
  private $inclui;
  private $levar;
  private $roteiro;
  private $itinerario;
  private $vagas;
  private $dicas;
  private $valor;
  private $promocao;
  private $cidade;
  private $empresa;
  private $ivg;

  /*
  Inclui: o que inclui o pacote da viagem. Ex: café da manhã, almoço, etc.

  Levar: o que levar na viagem. Ex: comida, água, barraca.

  IVG: Imagens de Viagens de Grupo.
  */

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

  public function CreateViagens()
  {
    $sql    = "INSERT INTO viagens ( titulo, categoria, descricao, oqueinclui, oquelevar, roteiro, itinerario, vagas, dicas, valor, promocao, cidade, empresa, imagens_viagens_grupos)
                      VALUES ('$this->titulo',
                              '$this->categoria',
                              '$this->descricao',
                              '$this->roteiro',
                              '$this->inclui',
                              '$this->levar',
                              '$this->itinerario',
                              '$this->vagas',
                              '$this->dicas',
                              '$this->valor',
                              '$this->promocao',
                              '$this->cidade',
                              '$this->empresa',
                              '$this->ivg')";
    $return = pg_query($sql);
    return $return;
  }

  public function ListViagens()
  {
    $sql       = "SELECT * FROM viagens ORDER BY id DESC";
    $resultado = pg_query($sql);
    $return    = NULL;

    while ($registro = pg_fetch_assoc($resultado))
    {
      $object             = new Viagens();
      $object->id         = $registro["id"];
      $object->empresa    = $registro["empresa"];
      $object->titulo     = $registro["titulo"];
      $object->itinerario = $registro["itinerario"];

      $return[] = $object;
    }
    return $return;
  }

  public function ListViagensByID()
  {
    # code...
  }

  public function UpdateViagens()
  {
    $return = NULL;
    $sql    = "UPDATE viagens SET titulo                = '$this->titulo',
                                  empresa               = '$this->empresa',
                                  itinerario            = '$this->itinerario',
                                  categoria             = '$this->categoria',
                                  descricao             = '$this->descricao',
                                  roteiro               = '$this->roteiro',
                                  oqueinclui            = '$this->inclui',
                                  oquelevar             = '$this->levar',
                                  vagas                 = '$this->vagas',
                                  dicas                 = '$this->dicas',
                                  valor                 = '$this->valor',
                                  promocao              = '$this->promocao',
                                  cidade                = '$this->cidade',
                                  imagens_viagens_grupo = '$this->ivg'
                              WHERE id = $this->id";
    $return = pg_query($sql);
    return $return;
  }

  public function DeleteViagens()
  {
    $sql    = "DELETE FROM viagens WHERE id = $this->id";
    $return = pg_query($sql);
    return $return;
  }

  public function EditViagens($id='')
  {
    $sql       = "SELECT * FROM viagens WHERE id = $id ";
    $resultado = pg_query($sql);
    $return    = NULL;

    while ($registro = pg_fetch_assoc($resultado))
    {
      $object             = new Viagens();
      $object->id         = $registro["id"];
      $object->titulo     = $registro["titulo"];
      $object->itinerario = $registro["itinerario"];
      $object->categoria  = $registro["categoria"];
      $object->descricao  = $registro["descricao"];
      $object->roteiro    = $registro["roteiro"];
      $object->inclui     = $registro["oqueinclui"];
      $object->levar      = $registro["oquelevar"];
      $object->vagas      = $registro["vagas"];
      $object->dicas      = $registro["dicas"];
      $object->valor      = $registro["valor"];
      $object->promocao   = $registro["promocao"];
      $object->cidade     = $registro["cidade"];
      $object->empresa    = $registro["empresa"];
      $object->ivg        = $registro["imagens_viagens_grupo"];

      $return = $object;
    }
    return $return;
  }

}

 ?>
