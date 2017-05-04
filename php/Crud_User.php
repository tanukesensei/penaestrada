<?php

include_once "../class/Carrega.class.php";

if (isset($_POST['cadastrar'])) {
  $object                 = new Users();
  $object->nome           = $_POST['nome'];
  $object->endereco       = $_POST['endereco'];
  $object->dataNascimento = $_POST['nascimento'];
  $object->telefone       = $_POST['telefone'];
  $object->celular        = $_POST['celular'];
  $object->foto           = $_POST['foto'];
  $object->bairro         = $_POST['bairro'];
  $object->cidade         = $_POST['cidade'];
  $object->estado         = $_POST['estado'];
  $object->cep            = $_POST['cep'];
  $object->email          = $_POST['email'];
  $object->username       = $_POST['usuario'];
  $object->senha          = $_POST['senha'];
  $object->ativo          = $_POST['ativo']; //
  $object->tipo           = $_POST['tipo'];

  $object->CreateUsers();
  header("Location:../index.php");
}
elseif (isset($_POST['atualizar']))
{
  $object                 = new Users();
  $object->id             = $_POST['id'];
  $object->nome           = $_POST['nome'];
  $object->endereco       = $_POST['endereco'];
  $object->dataNascimento = $_POST['nascimento'];
  $object->telefone       = $_POST['telefone'];
  $object->celular        = $_POST['celular'];
  $object->foto           = $_POST['foto'];
  $object->bairro         = $_POST['bairro'];
  $object->cidade         = $_POST['cidade'];
  $object->estado         = $_POST['estado'];
  $object->cep            = $_POST['cep'];
  $object->email          = $_POST['email'];
  $object->username       = $_POST['usuario'];
  $object->senha          = $_POST['senha'];
  $object->ativo          = $_POST['ativo']; //
  $object->tipo           = $_POST['tipo'];

  $object->UpdateUsers();
  header("Location:../index.php");
}
elseif (isset($_POST['excluir']))
{
  $object     = new Users();
  $object->id = $_POST['id'];

  $object->DeleteUsers();
  header("Location:../index.php");
}

 ?>
