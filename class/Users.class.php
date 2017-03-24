<?php
include_once "BD.class.php";
class Users
{
      private $id;
      private $nome;
      private $endereco;
      private $dataNascimento;
      private $telefone;
      private $celular;
      private $foto;
      private $bairro;
      private $cidade;
      private $estado;
      private $cep;
      private $email;
      private $username;
      private $senha;
      private $ativo;
      private $tipo;

/* "Tipo" é o tipo de usuário. Se é Admin ou cliente. */

      public function __construct(){
        $this->bd = new BD();
        $this->tabela = "users";
      }
      public function __destruct(){
        unset($this->bd);
      }
      public function __get($key){
        return $this->key;
      }
      public function __set($key, $value){
        $this->$key = $value;
      }

      //TENTATIVA DE INSERÇÃO NO BANCO DE DADOS.
      public function inserir(){
        $sql = "INSERT INTO $this->tabela (nome, endereco, dataNascimento, telefone, celular, foto, bairro, cidade, estado, cep, email, username, senha, ativo, tipo) VALUES('$this->nome', '$this->endereco',
        '$this->dataNascimento', '$this->telefone', '$this->celular', '$this->foto', '$this->bairro', '$this->cidade', '$this->estado', '$this->cep', '$this->email', '$this->username', '$this->senha', '$this->ativo', '$this->tipo')";

      $retorno = mysqli_query($sql);
      return $retorno;
      }


}

 ?>
