<?php

/**
 * Classe de ligação com o bando do Pé Na Estrada.
 */
class DB
{

  public function __construct() {
    pg_connect("host=localhost user=postgres password=senha5 dbname=penaestrada port=5432")
      or die("Erro ao conectar com o servidor.");
  }

  public function __destruct() {
    //pg_close();
  }

}
 ?>
