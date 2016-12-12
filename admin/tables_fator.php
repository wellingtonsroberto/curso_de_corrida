
<?php
session_start();
 
require_once 'init.php';

require 'check.php';
?>
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from byrushan.com/projects/sa/1-0-3/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2016 11:59:54 GMT -->
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <meta name="description" content="Violate Responsive Admin Template">
        <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

        <title>Cadastros de Treinos</title>
            
        <!-- CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">
        <link href="css/calendar.css" rel="stylesheet">
        <link href="css/media-player.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/icons.css" rel="stylesheet">
        <link href="css/generics.css" rel="stylesheet"> 
    </head>
    <body id="skin-blur-violate">
        
   



                    
                    

                    <div id="time" class="pull-right">
                        <span id="hours"></span>
                        :
                        <span id="min"></span>
                        :
                        <span id="sec"></span>
                    </div>

                  
                </div>
            </div>
        </header>
        

        
  
            
            <!-- Sidebar -->
                <ul class="list-unstyled side-menu">
                    <li class="active">
                        <a class="sa-side-home" href="index.php">
                            <span class="menu-item">Inicio</span>
                        </a>
                    </li>
                    <li>
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
        
            <!-- Content -->

            
                
                
                <!-- Breadcrumb -->
               
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

Abre_Conexao();
$re = mysql_query("SELECT * FROM tb_fator;");
if(mysql_errno() != 0) {
    if(!isset($erros)) {
        echo "Erro o arquivo init2.php foi auterado, nao existe $erros";
        exit;
    }
    echo $erros[mysql_errno()];
    exit;
}
?>
 <!-- Notification Drawer -->
                <div id="notifications" class="tile drawer animated" style="
    height: 380px;
">
                    <div class="listview narrow">
                        <div class="media">
                            <a href="#">Cadastar novo teste</a>
                            <span class="drawer-close">&times;</span>
                        </div>
                         <form id="form1" name="form1" method="post" action="salvar_test.php">
                          <table border="0">
   <tr><td><label style="
    margin-left: 648px;
">Dia</label>
                    <select class="form-control m-b-10" id="test_dia" name="test_dia" style="
    width: 66px;
    margin-left: 648px;
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
                    </select></td> </tr>
</table>

                        <div class="overflow" style="height: 254px">
                            <div class="media">
        
                                <div class="col-md-3 m-b-15" style="left: 220px;top: 20px;">
                                     <label>Tipo de Corrida</label>
                    <select class="form-control m-b-10" id="test_tipo" name="test_tipo">
                        <option>Continua</option>
                        <option>Alternada</option>
                    </select>

                
                          <div class="col-md-4 m-b-15">
                          <label>Velocidade</label>
                            <div class="p-relative" style="
    width: 310px;
">
                                <input type="text" class="form-control input-sm spinner-6 spinedit" id="test_veloc" name="test_veloc" style="
    width: 317px;
    height: 32px;
" />
                            </div>
                            <label style="margin-top: 8px;">Tempo</label>
                            <div class="input-icon datetime-pick time-only" style=" height: 34px;">
                                <input data-format="hh:mm:ss" type="text" class="form-control input-sm" id="test_temp" name="test_temp" style="height: 33px;width: 317px;margin-top: 5px;" />
                                <span class="add-on">
                                    <i class="sa-plus"></i>
                                </span>
                            </div>
                        </div>
                    
                        </div>

             <div class="col-md-3 m-b-10" style="left: 220px;top: 20px;">
                            <label>Distancia Teste</label>
                                    <div class="p-relative">
                            <input type="text" id="test_dist" name="test_dist" class="form-control input-sm spinner-6 spinedit">
                            </div>
                          <label style="
    margin-top: 15px;
">Treino Complementar</label>
                    <select class="form-control m-b-10" id="test_trein" name="test_trein">
                        <option>Flexibilidade</option>
                        <option>Força</option>
                        <option>Core</option>
                    </select>
                           <label style="
    margin-top: 0px;
">Plano de Treino</label>
                    <select class="form-control m-b-10" id="test_plan" name="test_plan">
                        <option>5km-10km</option>
                        <option>21km</option>
                        <option>Maratona</option>
                    </select>
                            
                        </div>
                 
             <div class="col-md-3 m-b-15" style="left: 220px;top: 20px;">
                            <label>PACE</label>
                            <input type="text" id="test_pace" name="test_pace" class="form-control m-b-10" placeholder="..." >
                         <label>Repetições</label>
                            <div class="p-relative" style="
    width: 310px;
">
                                <input type="text" class="form-control input-sm spinner-1 spinedit" id="test_repet" name="test_repet" style="
    width: 317px;
    height: 32px;
" />
                  <label style="
    margin-top: 12px;
">Quantidade de Tiros</label>
                            <div class="p-relative" style="
    width: 310px;
">
                                <input type="text" class="form-control input-sm spinner-1 spinedit" id="test_tiro" name="test_tiro" style="
    width: 317px;
    height: 35px;
    margin-top: 0px;
"/>
                   <button type="submit" name="Submit" value="Salvar" class="btn btn-lg m-r-5" style="margin-top: 15px;">Salvar</button>
                    </div>
                        </div>
                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="media text-center whiter l-100">
     
                        </div>
                    </div>
                </div>
                
           


                <!-- Table Hover -->
                <div class="block-area" id="tableHover">
                    <h3 class="block-title">Cadastro de Fatores</h3>
                    <br>
                    <br>

                    <div class="table-responsive overflow">
                             <div class="pull-left tm-icon">
                        <a data-drawer="notifications" class="drawer-toggle" href="#">

                   
                            <i class="sa-top-updates" style="
    margin-left: 23px;
"></i>
                                <p>Cadastrar Fator</p>
                            </a>
                            </div>
                        <table class="table table-bordered table-hover tile">
                            <thead>
                                <tr>
                                     <th>Opções</th>
                                    <th>Valor</th>
                                    <th>Dia</th>
                                    <th>Semana</th>
                                    <th>Vezes por Semana</th>
                             
                                </tr>
                            </thead>
                            <tbody>
                                <?php
while($l = mysql_fetch_array($re)) {
    $id_fator       = $l["id_fator"];
    $test_fator     = $l["test_fator"];
    $test_dia       = $l["test_dia"];
    $test_sem       = $l["test_sem"];
    $test_vzs       = $l["test_vzs"];
  
    
echo "
    <tr>    
        <td><a href=\"excluir.php?id=$id_fator\">[Excluir]</a></td>


        <td>&nbsp;$test_fator</td>
        <td>&nbsp;$test_dia</td>
        <td>&nbsp;$test_sem</td>
        <td>&nbsp;$test_vzs</td>

    </tr>\n";
}   
@mysql_close();
?>  
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Table Condensed -->
              
            <br/><br/>
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
