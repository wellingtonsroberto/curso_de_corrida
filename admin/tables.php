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
        
   

<?php
session_start();
 
require_once 'init.php';

require 'check.php';
?>

                    
                    

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
$re = mysql_query("SELECT * FROM tb_teste;");
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
                <div id="notifications" class="tile drawer animated">
                    <div class="listview narrow">
                        <div class="media">
                            <a href="#">Cadastar novo teste</a>
                            <span class="drawer-close">&times;</span>
                        </div>
                         <form id="form1" name="form1" method="post" action="salvar_test.php">

                        <div class="overflow" style="height: 254px">
                            <div class="media">
        
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
                                </div>
                            </div>
                        </div>
                        <div class="media text-center whiter l-100">
     
                        </div>
                    </div>
                </div>
                
           


                <!-- Table Hover -->
                <div class="block-area" id="tableHover">
                    <h3 class="block-title">Cadastro de Testes</h3>
                    <br>
                    <br>

                    <div class="table-responsive overflow">
                             <div class="pull-left tm-icon">
                        <a data-drawer="notifications" class="drawer-toggle" href="#">

                   
                            <i class="sa-top-updates" style="
    margin-left: 23px;
"></i>
                                <p>Cadastrar Teste</p>
                            </a>
                            </div>
                        <table class="table table-bordered table-hover tile">
                            <thead>
                                <tr>
                                     <th>Opções</th>
                                    <th>Tipo de Corrida</th>
                                    <th>Velocidade do Teste</th>
                                    <th>Tempo de Teste</th>
                                    <th>Quantidade de Tiros</th>
                                    <th>Distancia Teste</th>
                                    <th>Treino Complementar</th>
                                    <th>Pace</th>
                                    <th>Quantidade de Repetição</th>
                                    <th>Tipo de Plano</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
while($l = mysql_fetch_array($re)) {
    $id_teste          = $l["id_teste"];
    $test_tipo         = $l["test_tipo"];
    $test_veloc     = $l["test_veloc"];
    $test_temp       = $l["test_temp"];
    $test_tiro     = $l["test_tiro"];
    $test_dist       = $l["test_dist"];
    $test_trein     = $l["test_trein"];
    $test_pace       = $l["test_pace"];
    $test_repet       = $l["test_repet"];
    $test_plan       = $l["test_plan"];
    
    
echo "
    <tr>    
        <td><a href=\"excluir.php?id=$id_teste\">[Excluir]</a></td>
        <td>&nbsp;$test_tipo</td>
        <td>&nbsp;$test_veloc</td>
        <td>&nbsp;$test_temp</td>
        <td>&nbsp;$test_tiro</td>
        <td>&nbsp;$test_dist</td>
        <td>&nbsp;$test_trein</td>
        <td>&nbsp;$test_pace</td>
        <td>&nbsp;$test_repet</td>
        <td>&nbsp;$test_plan</td>
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
        
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        
        <!-- UX -->
        <script src="js/scroll.min.js"></script> <!-- Custom Scrollbar -->
        
        <!-- Other -->
        <script src="js/calendar.min.js"></script> <!-- Calendar -->
        <script src="js/feeds.min.js"></script> <!-- News Feeds -->
        
        
        <!-- All JS functions -->
        <script src="js/functions.js"></script>
    </body>

<!-- Mirrored from byrushan.com/projects/sa/1-0-3/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2016 11:59:54 GMT -->
</html>

