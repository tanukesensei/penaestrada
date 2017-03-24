<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Painel Administrativo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="bootstrap/css/style.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<script type="text/javascript">
$(document).ready(function(){
  $('#images').on('change',function(){
    $('#multiple_upload_form').ajaxForm({
      target:'#images_preview',
      beforeSubmit:function(e){
        $('.uploading').show();
      },
      success:function(e){
        $('.uploading').hide();
      },
      error:function(e){
      }
    }).submit();
  });
});
</script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
      <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">             
            </ul>
          </li>         
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
 <?php include "aside.php"; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastrar Turismo</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form method="post" name="multiple_upload_form"
              id="multiple_upload_form" enctype="multipart/form-data" 
            action="ensaios.php">
              <div class="box-body">               
                <div class="form-group">
                  <label for="inputEmail3" 
                  class="col-sm-2 control-label">Categoria</label>
                  <div class="col-sm-10">
                     <select class="form-control" name="categoria">                           
                     </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Titulo</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3"  name="titulo">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Local</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3"  name="local">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Data</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3"  name="data">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" 
                  class="col-sm-2 control-label">Descrição</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="form-control-textarea"  
                  name="descricao"></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" 
                  class="col-sm-2 control-label">Oque inclui?</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="form-control-textarea"  
                    name="inclusao"></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" 
                  class="col-sm-2 control-label">Oque podes ser levado</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="form-control-textarea"  
                    name="levar"></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" 
                  class="col-sm-2 control-label">Roteiro</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="form-control-textarea"  
                    name="roteiro"></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" 
                  class="col-sm-2 control-label">Itinerário</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="form-control-textarea"  
                    name="itinerario"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dicas</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="form-control-textarea"  
                    name="dicas"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Valor</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3"  
                    name="valor">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Promoção</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="inputEmail3"  name="promocao">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Imagem</label>
                  <div class="col-sm-10">
                  <div class="upload_div">
                  <input type="hidden" name="image_form_submit" value="1"/>
                  <label>Escolha a Imagem</label>
                  <input type="file" name="images[]" id="images" multiple >
                   </div>
                </div>
              </div>
              <div class="box-footer">               
                   <button type="submit" 
                   class="btn btn-info pull-right">Salvar Cadastro</button>
              </div>      
                </form>
                </div>
                  </div>
                </div>
            </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">    
  </footer>

  <!-- Control Sidebar -->
  
</div>
<!-- ./wrapper -->
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
