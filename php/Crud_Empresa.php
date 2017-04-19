<?php

include_once "../class/Carrega.class.php";

if (isset($_POST['cadastrar'])) {
  $object            = new Empresa();
  $object->titulo    = $_POST['titulo'];
  $object->descricao = $_POST['descricao'];
  $object->comoTrab  = $_POST['comoTrab'];
  $object->sonho     = $_POST['sonho'];
  $object->missao    = $_POST['missao'];
  $object->foto      = $_POST['foto'];
  $object->valores   = $_POST['valores'];

  $object->CreateEmpresa();
  header("Location:../index.php");
}
elseif (isset($_POST['atualizar']))
{
  $object            = new Empresa();
  $object->id        = $_POST['id'];
  $object->titulo    = $_POST['titulo'];
  $object->descricao = $_POST['descricao'];
  $object->comoTrab  = $_POST['comoTrab'];
  $object->sonho     = $_POST['sonho'];
  $object->missao    = $_POST['missao'];
  $object->foto      = $_POST['foto'];
  $object->valores   = $_POST['valores'];

  $object->UpdateEmpresa();
  header("Location:../index.php");
}
elseif (isset($_POST['excluir']))
{
  $object     = new Empresa();
  $object->id = $_POST['id'];

  $object->DeleteEmpresa();
  header("Location:../index.php");
}

 ?>
