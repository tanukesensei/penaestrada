<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon"  href="images/logo.png">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="http://malsup.github.com/chili-1.7.pack.js"></script>
        <script type="text/javascript" src="http://malsup.github.com/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/cycle.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        $(function() {
        $('#slider').cycle({
        fx:     'fade',
        speed:   200,
        timeout: 3000,
        next:   '#slider',
        pause:   1
        });
        });
        </script>       
        <title>Pé Na Estrada</title>        
    </head>

<body>
<?php include 'nav.php'; ?>
<div class="container"> 
  <div class="row">        
    <div id="slider" class="pics">
       <img src="slide/banner1.png" />
       <img src="slide/banner2.png" />
       <img src="slide/banner3.png"  />
       <img src="slide/banner4.png"  />
    </div>
  </div>        
</div>
<div class="container">
  <div class="row" id="categoria">
     <div class="col-md-4">
        <a href="categoria_completo.php"><img src="images/bateevolta.png" class="categoria_img"></a>
     </div>
     <div class="col-md-4">
        <a href="#"><img src="images/fimdesemana.png"class="categoria_img"></a>
     </div>
     <div class="col-md-4">
        <a href="#"><img src="images/feriados.png"class="categoria_img"></a>
     </div>
     <div class="col-md-4">
        <a href="#"><img src="images/ferias.png"class="categoria_img"></a>
     </div>
     <div class="col-md-4">
        <a href="#"><img src="images/festas.png"class="categoria_img"></a>
     </div>
     <div class="col-md-4">
        <a href="#"><img src="images/todos.png"class="categoria_img"></a>
     </div>
 </div>
</div>
<div class="container" >
    <div class="destaques-titulo"><h1>Destaques Pé Na Estrada</h1></div>
    <div class="row"id="destaques">
        <div class="thumbnails">
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
<?php include "footer.php";?>
</body>