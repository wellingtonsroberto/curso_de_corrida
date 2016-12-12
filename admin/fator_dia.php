<?php
session_start();
 
require_once 'init.php';

require 'check.php';
?>
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
                        <a class="sa-side-ui" href="fator_dia.php">
                            <span class="menu-item">Cadastro de Fator</span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="sa-side-table" href="tables.php">
                            <span class="menu-item">Treinos</span>
                        </a>
                    </li>
                                  <li>
                        <a class="sa-side-chart" href="tables_fator.php">
                            <span class="menu-item">Tabela de Fator</span>
                        </a>
                    </li>
                    <li>
      
                        <a class="sa-side-widget" href="logout.php">
                            <span class="menu-item">SAIR</span>
                        </a>
                    </li>
                    
            </aside>
     
<img src="img/logo.png" style="
    margin-left: 85px;
    margin-bottom: 20px;
    width: 125px;
">

         

 
        <p style="margin-left: 40px;">Bem-vindo ao seu painel, <?php echo $_SESSION['user_name']; ?> | <a href="logout.php">Sair</a>
 <br>
 <br>
 </body>
    <form id="form1" name="form1" method="post" action="salvar_fator.php">
 <table border="0">
   <tr><td><label style="
    margin-left: 608px;
">Dia</label>
                    <select class="form-control m-b-10" id="test_dia" name="test_dia" style="
    width: 66px;
    margin-left: 608px;
">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select></td> <td><label style="
    margin-left: 10px;
">Semana</label>
                    <select class="form-control m-b-10" id="test_sem" name="test_sem" style="
    width: 66px;
    margin-left: 10px;
">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select></td> 
                    <td><label style="
    margin-left: 10px;
">Vezes por Semana</label>
                    <select class="form-control m-b-10" id="test_vzs" name="test_vzs" style="
    width: 66px;
    margin-left: 10px;
">
                        <option>3x</option>
                        <option>4x</option>
                        <option>5x</option>
                        <option>6x</option>
                    </select></td> </tr>
</table>

                   

        </p>
    </body>
</html>


         
            
             <div class="col-lg-4" style="left: 220px;top: 20px;">
                                 <label style="
    margin-left: 340px;
">Valor do Fator</label>
                                <input type="text" class="form-control input-focused" id="test_fator" name="test_fator" style="
    width: 317px;
    height: 32px;
    margin-left: 340px;
" />
                            </div>
                           
                   <button type="submit" name="Submit" value="Salvar" class="btn btn-lg m-r-5" style="margin-top: 105px;margin-left: 240px;"">Salvar</button>
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
        
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        
        <!--  Form Related -->
        <script src="js/validation/validate.min.js"></script> <!-- jQuery Form Validation Library -->
        <script src="js/validation/validationEngine.min.js"></script> <!-- jQuery Form Validation Library - requirred with above js -->
        <script src="js/select.min.js"></script> <!-- Custom Select -->
        <script src="js/chosen.min.js"></script> <!-- Custom Multi Select -->
        <script src="js/datetimepicker.min.js"></script> <!-- Date & Time Picker -->
        <script src="js/colorpicker.min.js"></script> <!-- Color Picker -->
        <script src="js/icheck.js"></script> <!-- Custom Checkbox + Radio -->
        <script src="js/autosize.min.js"></script> <!-- Textare autosize -->
        <script src="js/toggler.min.js"></script> <!-- Toggler -->
        <script src="js/input-mask.min.js"></script> <!-- Input Mask -->
        <script src="js/spinner.min.js"></script> <!-- Spinner -->
        <script src="js/slider.min.js"></script> <!-- Input Slider -->
        <script src="js/fileupload.min.js"></script> <!-- File Upload -->
        
        <!-- Text Editor -->
        <script src="js/editor.min.js"></script> <!-- WYSIWYG Editor -->
        <script src="js/markdown.min.js"></script> <!-- Markdown Editor -->
        
        <!-- UX -->
        <script src="js/scroll.min.js"></script> <!-- Custom Scrollbar -->
        
        <!-- Other -->
        <script src="js/calendar.min.js"></script> <!-- Calendar -->
        <script src="js/feeds.min.js"></script> <!-- News Feeds -->
        
        
        <!-- All JS functions -->
        <script src="js/functions.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                /* Tag Select */
                (function(){
                    /* Limited */
                    $(".tag-select-limited").chosen({
                        max_selected_options: 5
                    });
                    
                    /* Overflow */
                    $('.overflow').niceScroll();
                })();
                
                /* Input Masking - you can include your own way */
                (function(){
                    $('.mask-date').mask('00/00/0000');
                    $('.mask-time').mask('00:00:00');
                    $('.mask-date_time').mask('00/00/0000 00:00:00');
                    $('.mask-cep').mask('00000-000');
                    $('.mask-phone').mask('0000-0000');
                    $('.mask-phone_with_ddd').mask('(00) 0000-0000');
                    $('.mask-phone_us').mask('(000) 000-0000');
                    $('.mask-mixed').mask('AAA 000-S0S');
                    $('.mask-cpf').mask('000.000.000-00', {reverse: true});
                    $('.mask-money').mask('000.000.000.000.000,00', {reverse: true});
                    $('.mask-money2').mask("#.##0,00", {reverse: true, maxlength: false});
                    $('.mask-ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {translation: {'Z': {pattern: /[0-9]/, optional: true}}});
                    $('.mask-ip_address').mask('099.099.099.099');
                    $('.mask-percent').mask('##0,00%', {reverse: true});
                    $('.mask-credit_card').mask('0000 0000 0000 0000');
                })();
                
                /* Spinners */
                (function(){
                    //Basic
                    $('.spinner-1').spinedit();
                    
                    //Set Value
                    $('.spinner-2').spinedit('setValue', 100);
                    
                    //Set Minimum                    
                    $('.spinner-3').spinedit('setMinimum', -10);
                    
                    //Set Maximum                    
                    $('.spinner-4').spinedit('setMaxmum', 100);
                    
                    //Set Step
                    $('.spinner-5').spinedit('setStep', 10);
                    
                    //Set Number Of Decimals
                    $('.spinner-6').spinedit('setNumberOfDecimals', 2);
                })();
            });
        </script>
    </body>

<!-- Mirrored from byrushan.com/projects/sa/1-0-3/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2016 11:56:30 GMT -->
</html>
