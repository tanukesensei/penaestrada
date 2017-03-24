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
        <title>Pé Na Estrada | Destinos</title>        
    </head>

<body>
<?php include 'nav.php'; ?>
<div class="clear"></div>
<div class="container"id="destino">
<ul class="nav nav-pills nav-stacked col-md-2">
  <li><a href="#batevolta" data-toggle="pill">Bate E Volta</a></li>
  <li><a href="#fimsemana" data-toggle="pill">Final de Semana</a></li>
  <li><a href="#feriados" data-toggle="pill">Feriados</a></li>
  <li><a href="#festas" data-toggle="pill">Festas</a></li>
  <li><a href="#ferias" data-toggle="pill">Férias</a></li>
</ul>

<div class="tab-content col-md-8">
        <div class="tab-pane" id="batevolta">
            <h2>Viagens Bate E Volta</h2>
               <div class="row">
                            <a href="visualizar.php">
                            <div class="col-md-6">                                 
                                <div class="thumbnail_destino">
                                    <div class="caption_destino">
                                        <h4>20/12/2016</h4>
                                        <p>Viagem</p>                                      
                                    </div>
                                    <img src="images/Banner.jpg" alt="..." id="imagem_caption">
                                </div>                   
                            </div>
                            </a>
                            
                            <a href="#">
                            <div class="col-md-6">                                 
                                <div class="thumbnail_destino">
                                    <div class="caption_destino">
                                        <h4>20/12/2016</h4>
                                        <p>Viagem</p>                                      
                                    </div>
                                    <img src="images/Banner.jpg" alt="..."id="imagem_caption">
                                </div>                   
                            </div>
                            </a>
                </div>
    

        </div>

        
        <div class="tab-pane" id="fimsemana">
             <h2>Viagens de Fim De Semana</h2>
             <div class="row">
                            <a href="#">
                            <div class="col-md-6">                                 
                                <div class="thumbnail_destino">
                                    <div class="caption_destino">
                                        <h4>20/12/2016</h4>
                                        <p>Viagem</p>                                      
                                    </div>
                                    <img src="images/Banner.jpg" alt="..." id="imagem_caption">
                                </div>                   
                            </div>
                            </a>
                            <a href="#">
                            <div class="col-md-6">                                 
                                <div class="thumbnail_destino">
                                    <div class="caption_destino">
                                        <h4>20/12/2016</h4>
                                        <p>Viagem</p>                                      
                                    </div>
                                    <img src="images/Banner.jpg" alt="..."id="imagem_caption">
                                </div>                   
                            </div>
                            </a>
                </div>
        </div>
        <div class="tab-pane" id="feriados">
             <h2>Viagens de Feriados</h2>
            <div class="row">
                            <a href="#">
                            <div class="col-md-6">                                 
                                <div class="thumbnail_destino">
                                    <div class="caption_destino">
                                        <h4>20/12/2016</h4>
                                        <p>Viagem</p>                                      
                                    </div>
                                    <img src="images/Banner.jpg" alt="..." id="imagem_caption">
                                </div>                   
                            </div>
                            </a>
                            <a href="#">
                            <div class="col-md-6">                                 
                                <div class="thumbnail_destino">
                                    <div class="caption_destino">
                                        <h4>20/12/2016</h4>
                                        <p>Viagem</p>                                      
                                    </div>
                                    <img src="images/Banner.jpg" alt="..."id="imagem_caption">
                                </div>                   
                            </div>
                            </a>
                </div>
        </div>
        <div class="tab-pane" id="festas">
             <h2>Viagens a Festas</h2>
            <div class="row">
                            <a href="#">
                            <div class="col-md-6">                                 
                                <div class="thumbnail_destino">
                                    <div class="caption_destino">
                                        <h4>20/12/2016</h4>
                                        <p>Viagem</p>                                      
                                    </div>
                                    <img src="images/Banner.jpg" alt="..." id="imagem_caption">
                                </div>                   
                            </div>
                            </a>
                            <a href="#">
                            <div class="col-md-6">                                 
                                <div class="thumbnail_destino">
                                    <div class="caption_destino">
                                        <h4>20/12/2016</h4>
                                        <p>Viagem</p>                                      
                                    </div>
                                    <img src="images/Banner.jpg" alt="..."id="imagem_caption">
                                </div>                   
                            </div>
                            </a>
                </div>
        </div>
         <div class="tab-pane" id="ferias">
             <h2>Viagens de Férias</h2>
            <div class="row">
                            <a href="#">
                            <div class="col-md-6">                                 
                                <div class="thumbnail_destino">
                                    <div class="caption_destino">
                                        <h4>20/12/2016</h4>
                                        <p>Viagem</p>                                      
                                    </div>
                                    <img src="images/Banner.jpg" alt="..." id="imagem_caption">
                                </div>                   
                            </div>
                            </a>
                            <a href="#">
                            <div class="col-md-6">                                 
                                <div class="thumbnail_destino">
                                    <div class="caption_destino">
                                        <h4>20/12/2016</h4>
                                        <p>Viagem</p>                                      
                                    </div>
                                    <img src="images/Banner.jpg" alt="..."id="imagem_caption">
                                </div>                   
                            </div>
                            </a>
                </div>
        </div>
        
</div><!-- tab content -->
</div><!-- end of container -->
</div>
<?php include "footer.php";?>
</body>