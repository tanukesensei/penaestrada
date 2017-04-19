<?php

include_once "../class/Carrega.class.php";

if (isset($_POST['cadastrar']))
{
  $object            = new ViagensClientes();
  $object->titulo    = $_POST['titulo'];
  $object->status    = $_POST['status'];
  $object->valor     = $_POST['valor'];
  $object->idCliente = $_POST['idCliente'];
  $object->idViagem  = $_POST['idViagem'];

  $object->CreateViagensClientes();
  header("Location:../index.php");
}
elseif (isset($_POST['atualizar']))
{
  $object            = new ViagensClientes();
  $object->id        = $_POST['id'];
  $object->titulo    = $_POST['titulo'];
  $object->status    = $_POST['status'];
  $object->valor     = $_POST['valor'];
  $object->idCliente = $_POST['idCliente'];
  $object->idViagem  = $_POST['idViagem'];

  $object->UpdateViagensClientes();
  header("Location:../index.php");
}
elseif (isset($_POST['excluir']))
{
  $object     = new ViagensClientes();
  $object->id = $_POST['id'];

  $object->DeleteViagensClientes();
  header("Location:../index.php");
}

 ?>
