<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="icon"  href="images/logo.png">  
        <title>Pé Na Estrada</title>        
    </head>

<body> 
<?php include "nav.php"; ?>        
<div class="container" id="register">
    <h1>Realize seu Cadastro no Pé Na Estrada</h1>
   <form class="form-horizontal" method="post" action="user_cad.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nome:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Digite seu Nome:" name='nome'required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Endereço</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Digite seu Endereço" name="endereco"required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Data de Nascimento</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputEmail3" name="nascimento"required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Telefone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Digite seu Telefone" name="telefone"required>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Celular</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Digite seu Celular" name="telefone"required>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputEmail3" name="foto"required>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cep</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="cep" placeholder="Digite seu Cep:"required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Bairro</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="bairro" placeholder="Digite seu Bairro:"required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cidade:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="cidade"placeholder="Digite sua Cidade:"required>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Estado:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="estado" placeholder="Digite seu Estado"required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Digite seu Email"required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Usuário:</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="usuario" placeholder="Digite seu Usuario"required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" >Senha:</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputEmail3" name="senha" placeholder="Digite sua Senha"required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" 
                  class="col-sm-2 control-label"></label>
                  <div class="col-sm-10">
                     <input type="hidden" class="form-control" id="inputEmail3" name="tipo" value="2">
                  </div>
                </div>
                 <div class="box-footer">               
                <button type="submit" class="btn btn-info pull-right">Salvar Cadastro</button>
              </div>                
              </div>
                
              </div>
              <!-- /.box-body -->
                         
            </form>
</div>
<?php include "footer.php";?>
</body>