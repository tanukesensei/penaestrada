<?php

include_once "../class/Carrega.class.php";

if (isset($_POST['cadastrar']))
{
  $object       = new ImgViagens();
  $object->foto = $_POST['foto'];
  $object->ivg  = $_POST['ivg'];;

  $object->CreateImgViagens();
  header("Location:../index.php");
}
elseif (isset($_POST['atualizar']))
{
  $object       = new ImgViagens();
  $object->id   = $_POST['id'];
  $object->foto = $_POST['foto'];
  $object->ivg  = $_POST['ivg'];;

  $object->UpdateImgViagens();
  header("Location:../index.php");
}
elseif (isset($_POST['excluir']))
{
  $object     = new ImgViagens();
  $object->id = $_POST['id'];

  $object->DeleteImgViagens();
  header("Location:../index.php");
}

 ?>
