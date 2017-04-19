<?php

include_once "../class/Carrega.class.php";

if (isset($_POST['cadastrar']))
{
  $object       = new Local();
  $object->data = $_POST['data'];

  $object->CreateLocal();
  header("Location:../index.php");
}
elseif (isset($_POST['atualizar']))
{
  $object       = new Local();
  $object->id   = $_POST['id'];
  $object->data = $_POST['data'];

  $object->UpdateLocal();
  header("Location:../index.php");
}
elseif (isset($_POST['excluir']))
{
  $object     = new Local();
  $object->id = $_POST['id'];

  $object->DeleteLocal();
  header("Location:../index.php");
}

 ?>
