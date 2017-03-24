 <!DOCTYPE html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon"  href="images/logo.png">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="http://malsup.github.com/chili-1.7.pack.js"></script>
        <script type="text/javascript" src="http://malsup.github.com/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/cycle.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Pé Na Estrada | Contato</title>
        
    </head>

<body> 

<?php include 'nav.php'; ?>         
<div class="container" id="contact">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
            <h3 class="contato_titulo">Entre em Contato Conosco</h3>
            <div class="form-group">
                 <input type="text" class="form-control" id="name" name="name" placeholder="Digite Seu Nome:" required>
            </div>
            <div class="form-group">
                 <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu E-mail:" required>
            </div>
            <div class="form-group">
                 <input type="text" class="form-control" id="address" name="address" placeholder="Digite seu Telefone: " required>
            </div>
            <div class="form-group">
                 <input type="text" class="form-control" id="subject" name="subject" placeholder="Digite seu Assunto:" required>
            </div>
            <div class="form-group">
                 <textarea class="form-control" type="textarea" id="message" placeholder="Digite sua Mensagem:" maxlength="140" rows="7"></textarea>
             </div>            
            <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Enviar Mensagem</button>        
        </form>
    </div>
</div>
<div class="col-md-6">
    <div id="info">
        <p>Telefone :(53)981196888  | (53)984361410</p>
        <p>E-mail : penaestradaturismoo@gmail.com</p>
        <p>Horário de Funcionamento : Sempre Aberto</p>                                                                                        
    </div>
</div>    
</div>
<?php include "footer.php";?>
</body>