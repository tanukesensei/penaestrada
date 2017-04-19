<?php

include_once "../class/Carrega.class.php";

if (isset($_POST['cadastrar']))
{
  $object         = new IVG();
  $object->titulo = $_POST['titulo'];

  $object->CreateIVG();
  header("Location:../index.php");
}
elseif (isset($_POST['atualizar']))
{
  $object         = new IVG();
  $object->id     = $_POST['id'];
  $object->titulo = $_POST['titulo'];

  $object->UpdateIVG();
  header("Location:../index.php");
}
elseif (isset($_POST['excluir']))
{
  $object     = new IVG();
  $object->id = $_POST['id'];

  $object->DeleteIVG();
  header("Location:../index.php");
}

 ?>
