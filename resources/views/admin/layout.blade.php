<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Optica Vanguardia @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="/images/icons/lentes.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
         <a href="/registro" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>OV</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Optica</b>Vanguardia</span>
      </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
         <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- Messages: style can be found in dropdown.less-->

              
              <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="/images/avatar-male.png" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">Optica Vanguardia</span>
              </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                  <img src="/images/avatar-male.png" class="img-circle" alt="User Image">

                  <p>
                    Optica Vanguardia
                  </p>
                </li>
              <!-- Menu Body -->
              <!--<li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>-->
                <!-- /.row -->
              <!--</li>-->
              <!-- Menu Footer-->
              <li class="user-footer">
                <!--<div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                </div>-->
                <div class="text-center">
                  <a href="#" class="btn btn-default btn-flat " href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </div>
              </li>
            </ul>
          </li>
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
         <div class="user-panel">
          <div class="pull-left image">
            <img src="/images/avatar-male.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Optica Vanguardia</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>


          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" align="center">NAVEGADOR</li>
            
            
            <li class="treeview">
              <a href="/registro">
                <i class="fa fa-database" aria-hidden="true"></i> 
                <span>Registrar</span>
              </a>
            </li>

            <!--<li class="treeview">
              <a href="/cierre">
                <i class="fa fa-laptop"></i>
                <span>Cerrar caja</span>
              </a>
            </li>-->

            <li class="treeview">
              <a href="/filtrar">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <span>Listar semana</span>
              </a> 
            </li>
            
            <li class=""><a href="/pago"><i class="fa fa-link"></i> <span>Pagos</span></a></li>
                       
            <!--<li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>-->
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>


       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                
                 
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <!--Contenido-->
                              
                              @yield('content')

                              <!--Fin Contenido-->
                      </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!--Fin-Contenido-->
      <footer class="main-footer">
          <!--<div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
          </div> -->
          <strong>Copyright &copy; 2019 <a target="_blank" href="">OpticaVanguardia</a>.</strong> Todos los derechos reservados.
        </footer>

      
 <!-- jQuery 2.1.4 -->
    <script src="/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/js/app.min.js"></script>

      <script src="{{asset('js/rut.js')}}"></script>

    <!--SCRIPT PARA EL LIVE SEARCH -->
    <script type="text/javascript">


      $(document).ready(function () {
 
            (function ($) {
 
                $('#filtrar').keyup(function () {
 
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
 
                })
 
            }(jQuery));
 
        });
      
    </script>



<!-- SCRIPT QUE REALIZA OPERACIÓN ARITMETICA -->
 <script>
  //Función que realiza la RESTA
  function Resta() {
     var valor_pagar = document.getElementById("number1").value;
     var valor_efectivo = document.getElementById("number2").value;
     var valor_electronico = document.getElementById("number3").value;
     try{
        //Calculamos el número escrito:
         valor_efectivo = (isNaN(parseInt(valor_efectivo)))? 0 : parseInt(valor_efectivo);
         valor_pagar = (isNaN(parseInt(valor_pagar)))? 0 : parseInt(valor_pagar);
         valor_electronico = (isNaN(parseInt(valor_electronico)))? 0 : parseInt(valor_electronico);

         document.getElementById("number4").value = valor_pagar-valor_efectivo-valor_electronico;
     }
     //Si se produce un error no hacemos nada
     catch(e) {}}
  </script>

  <script src="./js/index.js"></script>

  
<!-- SCRIPT PARA FORMATO DE RUT -->
<script type="text/javascript">
  $(function(){
      $("#rut").rut({formatOn: 'keyup'});
  }
  );
</script>

<style type="text/css">
.scrollable{
  height: 500px;
  overflow: scroll;
} 

</style>

  </body>
</html>