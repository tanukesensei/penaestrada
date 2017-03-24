<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="http://malsup.github.com/chili-1.7.pack.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/cycle.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <nav class="navbar navbar-default " role="navigation" id="menu" style="margin-bottom: 0;">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>                    
      </div>                
       <div class="navbar-collapse collapse">                   
          <div class="row">                  
              <ul class="nav navbar-nav  navbar-centerr">
                 <li><a href="index.php"><img src="images/logo_texto.png" class="logo"></a></li>
                 <li><a href="about.php" class="busi-btn">Quem Somos</a></li>
                 <li><a href="destinos.php" class="busi-btn">Destinos</a></li>
                 <!--<li><a href="#" class="busi-btn">Agenda</a></li>-->
                 <li><a href="contact.php" class="busi-btn">Contato</a></li>
                 <li><a href="#"data-toggle="modal" data-target="#login-modal"class="busi-btn-buttom">Acessar</a></li>
                 <li><a href="#"class="busi-btn-buttom">|</a></li>
                 <li><a href="register.php"class="busi-btn-buttom">Cadastre-se</a></li>
              </ul>                      
          </div> 
      </div>
    </div>
</nav>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="loginmodal-container">
          <h1>Acesso Restrito</h1><br>
          <form action="login.php" method="post">
          <input type="text" name="usuario" placeholder="Usuário" required>
          <input type="password" name="senha" placeholder="Senha" required>
          <input type="submit" name="" class="login loginmodal-submit" value="Acessar Ao Sistema">
          </form>
      </div>
  </div>
</div>