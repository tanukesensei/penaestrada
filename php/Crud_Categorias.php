<?php

include_once "../class/Carrega.class.php";

if (isset($_POST['cadastrar']))
{
  $object            = new Categorias();
  $object->categoria = $_POST['categoria'];

  $object->CreateCategorias();
  header("Location:../index.php");
}
elseif (isset($_POST['atualizar']))
{
  $object            = new Categorias();
  $object->id        = $_POST['id'];
  $object->categoria = $_POST['categoria'];

  $object->UpdateCategorias();
  header("Location:../index.php");
}
elseif (isset($_POST['excluir']))
{
  $object     = new Categorias();
  $object->id = $_POST['id'];

  $object->DeleteCategorias();
  header("Location:../index.php");
}

 ?>
