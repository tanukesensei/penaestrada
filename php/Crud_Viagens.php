<?php

include_once "../class/Carrega.class.php";

if (isset($_POST['cadastrar']))
{
  $object             = new Viagens();
  $object->titulo     = $_POST['titulo'];
  $object->categoria  = $_POST['categoria'];
  $object->cidade     = $_POST['cidade'];
  $object->descricao  = $_POST['descricao'];
  $object->itinerario = $_POST['itinerario'];
  $object->inclui     = $_POST['inclui'];
  $object->levar      = $_POST['levar'];
  $object->roteiro    = $_POST['roteiro'];
  $object->vagas      = $_POST['vagas'];
  $object->dicas      = $_POST['dicas'];
  $object->valor      = $_POST['valor'];
  $object->promocao   = $_POST['promocao'];
  $object->empresa    = $_POST['empresa'];
  $object->ivg        = $_POST['ivg'];

  $object->CreateViagens();
  header("Location:../index.php");
}
elseif (isset($_POST['atualizar']))
{
  $object             = new Viagens();
  $object->id         = $_POST['id'];
  $object->titulo     = $_POST['titulo'];
  $object->categoria  = $_POST['categoria'];
  $object->cidade     = $_POST['cidade'];
  $object->descricao  = $_POST['descricao'];
  $object->itinerario = $_POST['itinerario'];
  $object->inclui     = $_POST['inclui'];
  $object->levar      = $_POST['levar'];
  $object->roteiro    = $_POST['roteiro'];
  $object->vagas      = $_POST['vagas'];
  $object->dicas      = $_POST['dicas'];
  $object->valor      = $_POST['valor'];
  $object->promocao   = $_POST['promocao'];
  $object->empresa    = $_POST['empresa'];
  $object->ivg        = $_POST['ivg'];

  $object->UpdateViagens();
  header("Location:../index.php");
}
elseif (isset($_POST['excluir']))
{
  $object     = new Viagens();
  $object->id = $_POST['id'];

  $object->DeleteViagens();
  header("Location:../index.php");
}

 ?>
