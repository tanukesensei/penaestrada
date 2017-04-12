<?php

include_once 'Carrega.class.php';

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

      public function __construct()
      {
        $this->bd = new BD();
        $this->tabela = "users";
      }
      public function __destruct()
      {
        unset($this->bd);
      }
      public function __get($key)
      {
        return $this->key;
      }
      public function __set($key, $value)
      {
        $this->$key = $value;
      }

      //TENTATIVA DE INSERÇÃO NO BANCO DE DADOS.
      public function CreateUsers()
      {
        $sql = "INSERT INTO $this->tabela (nome, endereco, dataNascimento, telefone, celular, foto, bairro, cidade, estado, cep, email, username, senha, ativo, tipo) VALUES('$this->nome', '$this->endereco',
                '$this->dataNascimento', '$this->telefone', '$this->celular', '$this->foto', '$this->bairro', '$this->cidade', '$this->estado', '$this->cep', '$this->email', '$this->username', '$this->senha', '$this->ativo', '$this->tipo')";

        $retorno = pg_query($sql);
        return $retorno;
      }

      public function ListUsers()
      {
        $sql    = "SELECT * FROM $this->tabela ORDER BY id";
        $result = pg_query($sql);
        $return = null;

        while($info = pg_fetch_assoc($result))
        {
          $object       = new Users();
          $object->id   = $info['id'];
          $object->nome = $info['nome'];

          $return[] = $object;
        }
        return $return;
      }

      public function ListUsersByID($id='')
      {
        $sql    = "SELECT * FROM $this->tabela WHERE id = $id";
        $result = pg_query($sql);
        $return = null;

        while($info = pg_fetch_assoc($result))
        {
          $object       = new Users();
          $object->id   = $info['id'];
          $object->nome = $info['nome'];

          $return = $object;
        }
        return $return;
      }


      public function DeleteUsers()
      {
        $sql    = "DELETE FROM $this->tabela WHERE id = $this->id";
        $return = pg_query($sql);
        return $return;
      }

      public function UpdateUsers()
      {
        $sql = "UPDATE $this->tabela SET nome = $this->nome,
                               endereco       = $this->endereco,
                               dataNascimento = $this->dataNascimento,
                               telefone       = $this->telefone,
                               celular        = $this->celular,
                               foto           = $this->foto,
                               bairro         = $this->bairro,
                               cidade         = $this->cidade,
                               estado         = $this->estado,
                               cep            = $this->cep,
                               email          = $this->email,
                               username       = $this->username,
                               senha          = $this->senha,
                               ativo          = $this->ativo,
                               tipo           = $this->tipo
              WHERE id = $this->id";

        $retorno = pg_query($sql);
        return $retorno;
      }

}

 ?>
