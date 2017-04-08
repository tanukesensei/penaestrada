<?php

/**
 *
 */
class Upload
{

  private $nome;  //nome doinput que o usuário colocará a imagem
  private $pasta; //nome da pasta que receberá a imagem
  private $nome_substituto; //nome que irá sobscrever o nome da imagem atual
  private $permite; //Tipo de imagem, ex: png, jpg, gif, pjpeg, jpeg...

  public function uploadImagem($nome_img, $pasta_destino, $nome_principal, $tipo_img) {
    if (!empty($_FILES[$nome_img][''tmp_name''])) {
      $tipo_permitido = explode(",", $tipo_img);

      $this->nome = $_FILES[$nome_img];
      $this->pasta = $pasta_destino;
      $nome = $this->nome[''nome''];

      $extensao = end(explode(".", $this->nome[''nome'']));

      $this->nome_substituto = $nome_principal;

      $upload_arquivo = $this->pasta.$this->nome_substituto.".".$extensao;

      foreach ($tipo_permitido as $key => $tipo) {
        $this->permite[] = $tipo;
      }

      if (!empty($nome) and in_array($this->nome[''type''], $this->permite)) {
        # faz algo...
      } else {
        //faça algo caso não seja 
      }
    }
  }
}


 ?>
