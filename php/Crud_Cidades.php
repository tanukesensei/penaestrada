<?php

include_once "../class/Carrega.class.php";

if (isset($_POST['cadastrar']))
{
  $object              = new Cidade();
  $object->cidade      = $_POST['cidade'];
  $object->horario     = $_POST['horario'];
  $object->local       = $_POST['local'];
  $object->local_grupo = $_POST['local_grupo'];

  $object->CreateCidade();
  header("Location:../index.php");
}
elseif (isset($_POST['atualizar']))
{
  $object              = new Cidade();
  $object->id          = $_POST['id'];
  $object->cidade      = $_POST['cidade'];
  $object->horario     = $_POST['horario'];
  $object->local       = $_POST['local'];
  $object->local_grupo = $_POST['local_grupo'];

  $object->UpdateCidade();
  header("Location:../index.php");
}
elseif (isset($_POST['excluir']))
{
  $object     = new Cidade();
  $object->id = $_POST['id'];

  $object->DeleteCidade();
  header("Location:../index.php");
}

 ?>
