<?php
if(file_exists("init2.php")) {
    require "init2.php";     
} else {
    echo "Arquivo init2.php nao foi encontrado";
    exit;
}

if(!function_exists("Abre_Conexao")) {
    echo "Erro o arquivo init2.php foi auterado, nao existe a função Abre_Conexao";
    exit;
}
?>
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from byrushan.com/projects/sa/1-0-3/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2016 11:55:41 GMT -->
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <meta name="description" content="Violate Responsive Admin Template">
        <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

        <title>Painel Curso de Corrida</title>
            
        <!-- CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">
        <link href="css/calendar.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/icons.css" rel="stylesheet">
        <link href="css/generics.css" rel="stylesheet"> 
    </head>
    <body id="skin-blur-violate">

        <header id="header" class="media">
          
            <!-- Sidebar -->
      
                
                <!-- Sidbar Widgets -->
               
                
                <!-- Side Menu -->
                <ul class="list-unstyled side-menu">
                    <li class="active">
                        <a class="sa-side-home" href="index.php">
                            <span class="menu-item">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a class="sa-side-table" href="tables.php">
                            <span class="menu-item">Treinos</span>
                        </a>
                    </li>
                    <li>
      
                        <a class="sa-side-widget" href="logout.php">
                            <span class="menu-item">SAIR</span>
                        </a>
                    </li>
                    
            </aside>
     
<img src="img/logo.png" style="
    margin-left: 235px;
    margin-bottom: 50px;
">

<?php
session_start();
 
require_once 'init.php';

require 'check.php';
?>

         

 
        <p style="margin-left: 40px;">Bem-vindo ao seu painel, <?php echo $_SESSION['user_name']; ?> | <a href="logout.php">Sair</a></p>
    </body>
</html>


            <form id="form1" name="form1" method="post" action="salvar_test.php">

            
             <div class="col-md-3 m-b-15" style="left: 220px;top: 20px;">
                                     <label>Tipo de Corrida</label>
                    <select class="form-control m-b-10" id="test_tipo" name="test_tipo">
                        <option>Continua</option>
                        <option>Alternada</option>
                    </select>
                            <label>Velocidade do Teste</label>
                            <input type="text" id="test_veloc" name="test_veloc" class="form-control m-b-10" placeholder="Km/h">
                       <label>Tempo</label>
                         <input type="text" class="input-sm form-control mask-time" id="test_temp" name="test_temp" placeholder="..." style=" height: 34px;">
                    
                        </div>

             <div class="col-md-3 m-b-10" style="left: 220px;top: 20px;">
                            <label>Distancia Teste</label>
                            <input type="text" id="test_dist" name="test_dist" class="form-control m-b-10" placeholder="Metros">
                          <label>Treino Complementar</label>
                    <select class="form-control m-b-10" id="test_trein" name="test_trein">
                        <option>Flexibilidade</option>
                        <option>Força</option>
                        <option>Core</option>
                    </select>
                           <label>Plano de Treino</label>
                    <select class="form-control m-b-10" id="test_plan" name="test_plan">
                        <option>5km-10km</option>
                        <option>21km</option>
                        <option>Maratona</option>
                    </select>
                            
                        </div>
                 
             <div class="col-md-3 m-b-15" style="left: 220px;top: 20px;">
                            <label>PACE</label>
                            <input type="text" id="test_pace" name="test_pace" class="form-control m-b-10" placeholder="Km">
                        <label>Repetições</label>
                            <input type="text" id="test_repet" name="test_repet" class="form-control m-b-10" placeholder="...">
                   <label style="margin-top: 0px;">Tempo de Cada Tiro</label>
                            <input type="text" class="input-sm form-control mask-time" id="test_tiro" name="test_tiro" placeholder="..." style=" height: 34px;">
                   <button type="submit" name="Submit" value="Salvar" class="btn btn-lg m-r-5" style="margin-top: 15px;">Salvar</button>
                    </div>
                        </div>


             
              
                
                   

        
            <!-- Content -->
           

            <!-- Older IE Message -->
            <!--[if lt IE 9]>
                <div class="ie-block">
                    <h1 class="Ops">Ooops!</h1>
                    <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser in order to access the maximum functionality of this website. </p>
                    <ul class="browsers">
                        <li>
                            <a href="https://www.google.com/intl/en/chrome/browser/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Google Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Mozilla Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com/computer/windows">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://safari.en.softonic.com/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/downloads/ie-10/worldwide-languages">
                                <img src="img/browsers/ie.png" alt="">
                                <div>Internet Explorer(New)</div>
                            </a>
                        </li>
                    </ul>
                    <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
                </div>   
            <![endif]-->
        </section>
        
        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script> <!-- jQuery Library -->
        <script src="js/jquery-ui.min.js"></script> <!-- jQuery UI -->
        <script src="js/jquery.easing.1.3.js"></script> <!-- jQuery Easing - Requirred for Lightbox + Pie Charts-->

        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Charts -->
        <script src="js/charts/jquery.flot.js"></script> <!-- Flot Main -->
        <script src="js/charts/jquery.flot.time.js"></script> <!-- Flot sub -->
        <script src="js/charts/jquery.flot.animator.min.js"></script> <!-- Flot sub -->
        <script src="js/charts/jquery.flot.resize.min.js"></script> <!-- Flot sub - for repaint when resizing the screen -->

        <script src="js/sparkline.min.js"></script> <!-- Sparkline - Tiny charts -->
        <script src="js/easypiechart.js"></script> <!-- EasyPieChart - Animated Pie Charts -->
        <script src="js/charts.js"></script> <!-- All the above chart related functions -->

        <!-- Map -->
        <script src="js/maps/jvectormap.min.js"></script> <!-- jVectorMap main library -->
        <script src="js/maps/usa.js"></script> <!-- USA Map for jVectorMap -->

        <!--  Form Related -->
        <script src="js/icheck.js"></script> <!-- Custom Checkbox + Radio -->

        <!-- UX -->
        <script src="js/scroll.min.js"></script> <!-- Custom Scrollbar -->

        <!-- Other -->
        <script src="js/calendar.min.js"></script> <!-- Calendar -->
        <script src="js/feeds.min.js"></script> <!-- News Feeds -->
        

        <!-- All JS functions -->
        <script src="js/functions.js"></script>
    </body>

<!-- Mirrored from byrushan.com/projects/sa/1-0-3/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2016 11:56:30 GMT -->
</html>
