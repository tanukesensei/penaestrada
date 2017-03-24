<?php

include_once "../class/Carrega.class.php";

if (isset($_POST['cadastrar'])) {
  $objUsuario = new Users();
  $objUsuario->nome = $_POST['nome'];
  $objUsuario->endereco = $_POST['endereco'];
  $objUsuario->dataNascimento = $_POST['nascimento'];
  $objUsuario->telefone = $_POST['telefone'];
  $objUsuario->celular = $_POST['celular'];
  $objUsuario->foto = $_POST['foto'];
  $objUsuario->bairro = $_POST['bairro'];
  $objUsuario->cidade = $_POST['cidade'];
  $objUsuario->estado = $_POST['estado'];
  $objUsuario->cep = $_POST['cep'];
  $objUsuario->email = $_POST['email'];
  $objUsuario->username = $_POST['usuario'];
  $objUsuario->senha = $_POST['senha'];
  $objUsuario->ativo = $_POST['ativo']; //
  $objUsuario->tipo = $_POST['tipo'];

  $objUsuario->inserir();
  header("Location:../index.php");
}

 ?>
