<?php include "conn.php"; ?>
<?php 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) &&  ($_SESSION["acesso"] != 'GA' ))
{
  header("Location: index.html");
  exit;
  
  
}


?>



<!DOCTYPE html.>
<html lang="pt-br">
<head>
<!--
  <script>
window.alert("Sistema modificado no dia 28/10/2017, conforme solicitação de melhorias,para mais informações click no botão 'TUTORIAL' em sua página inicial.Qualquer eventual problema,dúvida ou feedback favor entrar em contato com (41) 985348649 Rudinei Rossales.")

</script>
-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" href="logo.png">

<script type="text/javascript">
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Relatorio </x:Name>';

    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

    tab_text = tab_text + "<table border='1px'>";
    tab_text = tab_text + $('#myTable').html();
    tab_text = tab_text + '</table></body></html>';

    var data_type = 'data:application/vnd.ms-excel';
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, 'Test file.xls');
        }
    } else {
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'relatorio.xls');
    }

}





</script>




<title>Controle</title>
  <link rel="icon" href="img/key.png">
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  
   
   <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->


  <style>
     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
</head>
<body>
<div class="jumbotron text-center " id="jumbo">
   <br><br><br><br><br><br><br>
</div>
<p  style="font-size: 12px;"><i><strong>© Copyright Serede S/A Desenvolvimento Rudinei Rossales  </strong></i></p>
<div class="navbar navbar-inverse navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
            </div>
            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right">


              
         
                    <li class="dropdown">

        <a class="dropdown-toggle" data-toggle="dropdown" href="#">CADASTRO
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        
          <li><a href="piloto.php">Fiscalização</a></li>
          <li><a href="cad_prev.php">Repetidas</a></li>
          <li><a href="cad_melhorias.php">Melhorias Centrais</a></li>
                
                 <?php if($_SESSION["acesso"] == 'GE'){?>
                  <li><a href="tbl_val.php">Uniformes</a></li>
                  <li><a href="dash_almox.php">Almox</a></li>
                  <?php } else {?>
                   <li><a href="epi.php">Uniformes</a></li>
                   <?php } ?>

                    <?php if($_SESSION["tr"] == '383056' or $_SESSION["tr"] == '382303'){?>
                     <li><a href="agenda.php">Agenda</a></li>
                     <li><a href="pendencia.php">Pendencia</a></li>
                        <?php } ?>
                
        
        </ul>
      </li>
                  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">CONSULTA
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pesq_per_prev.php">Preventivas</a></li>
          <li><a href="pesq_per_fiscal.php">Fiscalização</a></li>
          <li><a href="pesq_central.php">Melhorias Centrais</a></li>
          <?php if($_SESSION["tr"] == '383056' or $_SESSION["tr"] == '382303'){?>
                     <li><a href="pesq_agenda.php">Agenda</a></li>
                        <li><a href="pesq_pendencia.php">Agenda</a></li>
                        <?php } ?>
         
        </ul>
      </li>
         <li class="active"><a href="modifica_senha.php">Trocar senha</a></li>
      <li class="active"><a href="Logout.php">Logout</a></li>
      <li class="active"><a href="tutorial.pdf" target="_BLANCK">TUTORIAL MELHORIAS</a></li>

                </ul>
            </div>

        </div>
    </div>




<div class="container-fluid">


<div class="row"> <!-- 6 + 6 = 12 -->
   <div class="table-responsive col-sm-6">
  <table class="table table-hover">
  <span><strong>CONTROLE DE REPETIDAS MÊS CORRENTE</strong></span>
    <thead>
      <tr >
       <th>ESTADO</th>
      <th>G.A</th>
      <th>REPETIDAS</th>
        <th>PREVENTIVAS</th>
      
   
    
      
       
      </tr>
    </thead>
  
  <?php

include  "pegardados.php";
$sql = mysql_query ("select * from usuario where acesso = 'GA' ORDER BY estado" );







  while ($dado = mysql_fetch_assoc($sql )){
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <tbody style="border: solid 1px black"> 
      <tr >
        <td > <?php echo $dado ["estado"];  ?></td>

 

      <td> <?php echo $dado ["nome"];   ?></td>

      <?php if ($dado ["nome"] == 'MARLON CRISTIAN') {?>
        <td >  <a  data-toggle="modal" href="#cassiano_rep"> <?php echo   $cassiano1 ?> </a> </td>
        <td <?php if ($cassiano_dif > 0 and $cassiano_dif  <= 2){ echo "style='background:yellow'";} else if ($cassiano_dif >= 3){ echo "style='background:red'";} else if ($cassiano_dif == 0  ){ echo "style='background:green'";}  ?> >  <?php echo  $cassiano2 ?> </td>
        

      <?php } ?>
        <?php if ($dado ["nome"] == 'MARCIO ALVES DA CRUZ') {?>
        <td> <a  data-toggle="modal" href="#marcio_rep">  <?php echo  $marcio1 ?> </a></td>
        <td <?php if ($marcio_dif > 0 and $marcio_dif  <= 2){ echo "style='background:yellow'";} else if ($marcio_dif >= 3){ echo "style='background:red'";} else if ($marcio_dif == 0  ){ echo "style='background:green'";}  ?> > <?php echo  $marcio2 ?> </td>
        

      <?php } ?>

      <?php if ($dado ["nome"] == 'LUIS FERNANDO FAIX') {?>
        <td> <a  data-toggle="modal" href="#faix_rep"> <?php echo  $faix1 ?> </a> </td>
        <td <?php if ($faix_dif > 0 and $faix_dif  <= 2){ echo "style='background:yellow'";} else if ($faix_dif >= 3){ echo "style='background:red'";} else if ($faix_dif == 0  ){ echo "style='background:green'";}  ?> > <?php echo  $faix2 ?> </td>
        

      <?php } ?>


      <?php if ($dado ["nome"] == 'MARLOS UELDES FELICIO') {?>
        <td> <a  data-toggle="modal" href="#marlos_rep"> <?php echo  $marlos1 ?> </a> </td>
        <td <?php if ($marlos_dif > 0 and $marlos_dif  <= 2){ echo "style='background:yellow'";} else if ($marlos_dif >= 3){ echo "style='background:red'";} else if ($marlos_dif == 0  ){ echo "style='background:green'";}  ?> > <?php echo  $marlos2 ?> </td>
       

      <?php } ?>


<?php if ($dado ["nome"] == 'CLEOMAR APARECIDO BISCHOFF') {?>
        <td> <a  data-toggle="modal" href="#cleomar_rep"> <?php echo  $cleomar1 ?> </a> </td>
        <td <?php if ($cleomar_dif > 0 and $cleomar_dif  <= 2){ echo "style='background:yellow'";} else if ($cleomar_dif >= 3){ echo "style='background:red'";} else if ($cleomar_dif == 0  ){ echo "style='background:green'";}  ?>> <?php echo  $cleomar2 ?> </td>


      <?php } ?>

      <?php if ($dado ["nome"] == 'ANDERSON FELIPE FERRI') {?>
        <td> <a  data-toggle="modal" href="#ferri_rep"> <?php echo  $ferri1 ?> </a> </td>
        <td <?php if ($ferri_dif > 0 and $ferri_dif  <= 2){ echo "style='background:yellow'";} else if ($ferri_dif >= 3){ echo "style='background:red'";} else if ($ferri_dif == 0  ){ echo "style='background:green'";}  ?>> <?php echo  $ferri2 ?> </td>
     

      <?php } ?>

       <?php if ($dado ["nome"] == 'ENIR JOSE RODRIGUES') {?>
        <td> <a  data-toggle="modal" href="#enir_rep"> <?php echo  $enir1 ?> </a> </td>
        <td <?php if ($enir_dif > 0 and $enir_dif  <= 2){ echo "style='background:yellow'";} else if ($enir_dif >= 3){ echo "style='background:red'";} else if ($enir_dif == 0  ){ echo "style='background:green'";}  ?> > <?php echo  $enir2 ?> </td>
       

         <?php } ?>

           <?php if ($dado ["nome"] == 'CRISTHIAN FRANCISCO BRUCH') {?>
        <td> <a  data-toggle="modal" href="#cristhian_rep"> <?php echo  $cristhian1 ?> </a> </td>
        <td <?php if ($cristhian_dif > 0 and $cristhian_dif  <= 2){ echo "style='background:yellow'";} else if ($cristhian_dif >= 3){ echo "style='background:red'";} else if ($cristhian_dif == 0  ){ echo "style='background:green'";}  ?> > <?php echo  $cristhian2 ?> </td>
         

         <?php } ?>

             <?php if ($dado ["nome"] == 'FLARES ANDRE DE LIZ') {?>
        <td> <a  data-toggle="modal" href="#flares_rep"> <?php echo  $flares1 ?> </a> </td>
        <td <?php if ($flares_dif > 0 and $flares_dif  <= 2){ echo "style='background:yellow'";} else if ($flares_dif >= 3){ echo "style='background:red'";} else if ($flares_dif == 0  ){ echo "style='background:green'";}  ?> > <?php echo  $flares2 ?> </td>
        

         <?php } ?>


          <?php if ($dado ["nome"] == 'JUNIOMAR ALEX MOCHNACZ') {?>
        <td> <a  data-toggle="modal" href="#juniomar_rep"> <?php echo  $juniomar1 ?> </a> </td>
        <td <?php if ($juniomar_dif > 0 and $juniomar_dif  <= 2){ echo "style='background:yellow'";} else if ($juniomar_dif >= 3){ echo "style='background:red'";} else if ($juniomar_dif == 0  ){ echo "style='background:green'";}  ?> > <?php echo  $juniomar2 ?> </td>
       

         <?php } ?>


             <?php if ($dado ["nome"] == 'GILBERTO MACHADO TEODORO') {?>
        <td> <a  data-toggle="modal" href="#gilberto_rep"> <?php echo  $gilberto1 ?> </a> </td>
        <td <?php if ($gilberto_dif > 0 and $gilberto_dif  <= 2){ echo "style='background:yellow'";} else if ($gilberto_dif >= 3){ echo "style='background:red'";} else if ($gilberto_dif == 0  ){ echo "style='background:green'";}  ?> > <?php echo  $gilberto2 ?> </td>
        

         <?php } ?>



             <?php if ($dado ["nome"] == 'ALISSON SQUINZANI') {?>
        <td> <a  data-toggle="modal" href="#alisson_rep"> <?php echo  $vale1 ?> </a> </td>
        <td <?php if ($vale_dif > 0 and $vale_dif  <= 2){ echo "style='background:yellow'";} else if ($vale_dif >= 3){ echo "style='background:red'";} else if ($vale_dif == 0  ){ echo "style='background:green'";}  ?>> <?php echo  $vale2 ?> </td>
       
         </tbody>
         </div>



         <?php } ?>













<?php }  ?>










</div>




         </div>
         </table>

    </div>


   <div class="table-responsive col-sm-6" ">
   <span><strong>CONTROLE DE FISCALIZAÇÕES SEMANA CORRENTE.</strong></span>
<table class="table table-hover" >
  
 


    <thead>
      <tr >
       
        <th>BD</th>
         <th>OS</th>
          
           <th>TOTAL SEMANA</th>
          

       

          
    
      
       
      </tr>
    </thead>
  
  <?php

include  "pegardados2.php";
$sql = mysql_query ("select * from usuario where acesso = 'GA' ORDER BY estado" );







  while ($dado = mysql_fetch_assoc($sql )){
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <tbody style="border: solid 1px black"> 
      <tr >
     
 
      <?php if ($dado ["nome"] == 'MARLON CRISTIAN') {?>
      
        <td <?php if ($cassiano_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($cassiano_soma_bd_os <= 1){ echo "style='background:red'";} else if ($cassiano_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $cassiano_bd ?> </td>
        <td <?php if ($cassiano_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($cassiano_soma_bd_os <= 1){ echo "style='background:red'";} else if ($cassiano_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $cassiano_os ?> </td>



        


        <td <?php if ($cassiano_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($cassiano_soma_bd_os <= 1){ echo "style='background:red'";} else if ($cassiano_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $cassiano_soma_bd_os ?> </td>
         
      

      <?php } ?>
        <?php if ($dado ["nome"] == 'MARCIO ALVES DA CRUZ') {?>
         
        <td <?php if ($marcio_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($marcio_soma_bd_os <= 1){ echo "style='background:red'";} else if ($marcio_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $marcio_bd ?> </td>

        <td <?php if ($marcio_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($marcio_soma_bd_os <= 1){ echo "style='background:red'";} else if ($marcio_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $marcio_os ?> </td>
        
         <td <?php if ($marcio_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($marcio_soma_bd_os <= 1){ echo "style='background:red'";} else if ($marcio_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo $marcio_soma_bd_os   ?> </td>
        
    

      <?php } ?>

      <?php if ($dado ["nome"] == 'LUIS FERNANDO FAIX') {?>
    
        <td <?php if ($faix_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($faix_soma_bd_os <= 1){ echo "style='background:red'";} else if ($faix_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $faix_bd ?> </td>
        <td <?php if ($faix_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($faix_soma_bd_os <= 1){ echo "style='background:red'";} else if ($faix_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $faix_os ?> </td>
        
         <td <?php if ($faix_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($faix_soma_bd_os <= 1){ echo "style='background:red'";} else if ($faix_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $faix_soma_bd_os ?> </td>
        

        

      <?php } ?>


      <?php if ($dado ["nome"] == 'MARLOS UELDES FELICIO') {?>
       
        <td <?php if ($marlos_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($marlos_soma_bd_os <= 1){ echo "style='background:red'";} else if ($marlos_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $marlos_bd ?> </td>
        <td <?php if ($marlos_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($marlos_soma_bd_os <= 1){ echo "style='background:red'";} else if ($marlos_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $marlos_os ?> </td>
        
         <td <?php if ($marlos_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($marlos_soma_bd_os <= 1){ echo "style='background:red'";} else if ($marlos_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $marlos_soma_bd_os ?> </td>
        
         

      <?php } ?>


<?php if ($dado ["nome"] == 'CLEOMAR APARECIDO BISCHOFF') {?>
  
        <td <?php if ($cleomar_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($cleomar_soma_bd_os <= 1){ echo "style='background:red'";} else if ($cleomar_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $cleomar_bd ?> </td>
        <td <?php if ($cleomar_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($cleomar_soma_bd_os <= 1){ echo "style='background:red'";} else if ($cleomar_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $cleomar_os ?> </td>
       
        <td <?php if ($cleomar_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($cleomar_soma_bd_os <= 1){ echo "style='background:red'";} else if ($cleomar_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $cleomar_soma_bd_os ?> </td>
        
        

      <?php } ?>

      <?php if ($dado ["nome"] == 'ANDERSON FELIPE FERRI') {?>
           
        <td <?php if ($ferri_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($ferri_soma_bd_os <= 1){ echo "style='background:red'";} else if ($ferri_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $ferri_bd ?> </td>
        <td <?php if ($ferri_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($ferri_soma_bd_os <= 1){ echo "style='background:red'";} else if ($ferri_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $ferri_os ?> </td>
  
      <td <?php if ($ferri_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($ferri_soma_bd_os <= 1){ echo "style='background:red'";} else if ($ferri_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $ferri_soma_bd_os ?> </td>
       

      <?php } ?>

       <?php if ($dado ["nome"] == 'ENIR JOSE RODRIGUES') {?>
      
        <td <?php if ($enir_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($enir_soma_bd_os <= 1){ echo "style='background:red'";} else if ($enir_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $enir_bd ?> </td>
        <td <?php if ($enir_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($enir_soma_bd_os <= 1){ echo "style='background:red'";} else if ($enir_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $enir_os ?> </td>
         
         <td <?php if ($enir_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($enir_soma_bd_os <= 1){ echo "style='background:red'";} else if ($enir_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $enir_soma_bd_os ?> </td>
       
        

         <?php } ?>

           <?php if ($dado ["nome"] == 'CRISTHIAN FRANCISCO BRUCH') {?>
           
        <td <?php if ($cristhian_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($cristhian_soma_bd_os <= 1){ echo "style='background:red'";} else if ($cristhian_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $cristhian_bd ?> </td>
        <td <?php if ($cristhian_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($cristhian_soma_bd_os <= 1){ echo "style='background:red'";} else if ($cristhian_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $cristhian_os ?> </td>
        
        <td <?php if ($cristhian_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($cristhian_soma_bd_os <= 1){ echo "style='background:red'";} else if ($cristhian_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $cristhian_soma_bd_os ?> </td>
     
         


         <?php } ?>

             <?php if ($dado ["nome"] == 'FLARES ANDRE DE LIZ') {?>
            
        <td <?php if ($flares_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($flares_soma_bd_os <= 1){ echo "style='background:red'";} else if ($flares_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $flares_bd ?> </td>
        <td <?php if ($flares_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($flares_soma_bd_os <= 1){ echo "style='background:red'";} else if ($flares_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $flares_os ?> </td>
        
        <td <?php if ($flares_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($flares_soma_bd_os <= 1){ echo "style='background:red'";} else if ($flares_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $flares_soma_bd_os ?> </td>
         
        

         <?php } ?>


          <?php if ($dado ["nome"] == 'JUNIOMAR ALEX MOCHNACZ') {?>
        
        <td <?php if ($juniomar_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($juniomar_soma_bd_os <= 1){ echo "style='background:red'";} else if ($juniomar_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $juniomar_bd ?> </td>
        <td <?php if ($juniomar_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($juniomar_soma_bd_os <= 1){ echo "style='background:red'";} else if ($juniomar_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $juniomar_os ?> </td>
         
        <td <?php if ($juniomar_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($juniomar_soma_bd_os <= 1){ echo "style='background:red'";} else if ($juniomar_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $juniomar_soma_bd_os ?> </td>
      
    

         <?php } ?>


             <?php if ($dado ["nome"] == 'GILBERTO MACHADO TEODORO') {?>
            
        <td <?php if ($gilberto_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($gilberto_soma_bd_os <= 1){ echo "style='background:red'";} else if ($gilberto_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $gilberto_bd ?> </td>
        <td <?php if ($gilberto_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($gilberto_soma_bd_os <= 1){ echo "style='background:red'";} else if ($gilberto_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $gilberto_os ?> </td>
        
         <td <?php if ($gilberto_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($gilberto_soma_bd_os <= 1){ echo "style='background:red'";} else if ($gilberto_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $gilberto_soma_bd_os ?> </td>
        
        

         <?php } ?>



             <?php if ($dado ["nome"] == 'ALISSON SQUINZANI') {?>
         

        <td <?php if ($vale_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($vale_soma_bd_os <= 1){ echo "style='background:red'";} else if ($vale_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $vale_bd ?> </td>
        <td <?php if ($vale_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($vale_soma_bd_os <= 1){ echo "style='background:red'";} else if ($vale_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $vale_os ?> </td>
        
        <td <?php if ($vale_soma_bd_os == 2){ echo "style='background:yellow'";} else if ($vale_soma_bd_os <= 1){ echo "style='background:red'";} else if ($vale_soma_bd_os >= 3){ echo "style='background:green'";}  ?> > <?php echo  $vale_soma_bd_os ?> </td>
        
         
         </tbody>

         </div>



         <?php } ?>













<?php }  ?>




</table>





</div>




         </div>
    </div>



</div>




<?php include "modal.php"; ?>


 <div id="justificativa" class="modal fade" role="dialog">
  <div class="modal-dialog">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>JUSTIFICATIVAS</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">

       <form class="form" role="form" name="seachform" method="post" action="just.php " enctype="multipart/form-data" >

 <div class="form-group">

       <label for="email">Circuito:</label>
      <input type="text" class="form-control" id="ccto" name="ccto"    required>
    </div><br>

        <div class="form-group">
    <label for="email">Justificativa: </label>
  <textarea class="form-control" rows="5" id="just" name="just" maxlength="300" placeholder="Máximo 300 caracteres"></textarea>
    </div>

    <div class="form-group">
  

<button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button>


    </form>
















    </div>
    </div>
    </div>
    </div>
    </div>



</body>




</html>


