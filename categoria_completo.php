<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon"  href="images/logo.png">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript">
      var j = jQuery.noConflict();
      $j( document ).ready(function() {
    $j("[rel='tooltip']").tooltip();    
 
    $j('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});

      </script>        
        <title>Pé Na Estrada | Categorias</title>
        
    </head>

<body>
  <?php include 'nav.php'; ?>
<div class="clear"></div>
<div class="container" >
    <div class="destaques-titulo"><h1>Bate e Volta</h1></div>
    <div class="row"id="destaques">
        <div class="thumbnails">
            <div class="col-md-4">
              <div class="thumbnail">
                <img src="images/imagem.png" alt="">
                <div class="caption">
                  <h3>Viagem</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                    aliquip ex ea commodo consequa</p>
                  <p align="center"><a href="visualizar.php" class="btn btn-vejamais">Veja +</a></p>
                </div>
              </div>
            </div>
              <div class="col-md-4">
              <div class="thumbnail">
                <img src="images/imagem.png" alt="ALT NAME">
                <div class="caption">
                  <h3>Viagem</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                    aliquip ex ea commodo consequa</p>
                  <p align="center"><a href="visualizar.php" class="btn btn-vejamais">Veja +</a></p>
                </div>
              </div>
            </div>
              <div class="col-md-4">
              <div class="thumbnail">
                <img src="images/imagem.png" alt="ALT NAME">
                <div class="caption">
                  <h3>Viagem</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                    aliquip ex ea commodo consequa</p>
                  <p align="center"><a href="visualizar.php" class="btn btn-vejamais">Veja +</a></p>
                </div>
              </div>
            </div>
              <div class="col-md-4">
              <div class="thumbnail">
                <img src="images/imagem.png" alt="ALT NAME">
                <div class="caption">
                  <h3>Viagem</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                    aliquip ex ea commodo consequa</p>
                 <p align="center"><a href="visualizar.php" class="btn btn-vejamais">Veja +</a></p>
                </div>
              </div>
            </div>
              <div class="col-md-4">
              <div class="thumbnail">
                <img src="images/imagem.png" alt="ALT NAME">
                <div class="caption">
                  <h3>Viagem</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                    aliquip ex ea commodo consequa</p>
                 <p align="center"><a href="visualizar.php" class="btn btn-vejamais">Veja +</a></p>
                </div>
              </div>
            </div>
              <div class="col-md-4">
              <div class="thumbnail">
                <img src="images/imagem.png" alt="ALT NAME">
                <div class="caption">
                  <h3>Viagem</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                    aliquip ex ea commodo consequa</p>
                  <p align="center"><a href="visualizar.php" class="btn btn-vejamais">Veja +</a></p>
                </div>
              </div>
            </div>
             
        </div>
    </div>
</div>
</div>
<?php include "footer.php";?>
</body>