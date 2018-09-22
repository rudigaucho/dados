<?php include "conn.php"; ?>
<?php 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) &&  ($_SESSION["acesso"] != 'GA' ))
{
  header("Location: index.html");
  exit;
  
  
}



?>



<!DOCTYPE html>
<html lang="pt-br">
<head>

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
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
</head>
<body>
<div class="row"> <!-- 6 + 6 = 12 -->
   <div class="table-responsive col-sm-6"">
  <table class="table table-hover" >
  <span><strong>CONTROLE DE CONTRATUAIS MÊS CORRENTE</strong></span>
    <thead>
      <tr >
      <th>ESTADO</th>
        <th>GA</th>
        <th>DE 01 ATÉ 10</th>
         <th>DE 10 ATÉ 17</th>
          <th>DE 17 ATÉ 24</th>
    
      
       
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
      <td> <?php echo $dado ["nome"];  ?></td>

      <?php if ($dado ["nome"] == 'VALDELIRIO CASSIANO DE SOUZA') {?>
        <td > <?php echo  $cassiano1 ?> </td>
        <td> <?php echo  $cassiano2 ?> </td>
         <td> <?php echo  $cassiano3 ?> </td>

      <?php } ?>
        <?php if ($dado ["nome"] == 'MARCIO ALVES DA CRUZ') {?>
        <td> <?php echo  $marcio1 ?> </td>
        <td> <?php echo  $marcio2 ?> </td>
         <td> <?php echo  $marcio3 ?> </td>

      <?php } ?>

      <?php if ($dado ["nome"] == 'LUIS FERNANDO FAIX') {?>
        <td> <?php echo  $faix1 ?> </td>
        <td> <?php echo  $faix2 ?> </td>
         <td> <?php echo  $faix3 ?> </td>

      <?php } ?>


      <?php if ($dado ["nome"] == 'MARLOS UELDES FELICIO') {?>
        <td> <?php echo  $marlos1 ?> </td>
        <td> <?php echo  $marlos2 ?> </td>
         <td> <?php echo  $marlos3 ?> </td>

      <?php } ?>


<?php if ($dado ["nome"] == 'CLEOMAR APARECIDO BISCHOFF') {?>
        <td> <?php echo  $cleomar1 ?> </td>
        <td> <?php echo  $cleomar2 ?> </td>
         <td> <?php echo  $cleomar3 ?> </td>

      <?php } ?>

      <?php if ($dado ["nome"] == 'ANDERSON FELIPE FERRI') {?>
        <td> <?php echo  $ferri1 ?> </td>
        <td> <?php echo  $ferri2 ?> </td>
         <td> <?php echo  $ferri3 ?> </td>

      <?php } ?>

       <?php if ($dado ["nome"] == 'SERGIO OSMAR DA SILVA') {?>
        <td> <?php echo  $sergio1 ?> </td>
        <td> <?php echo  $sergio2 ?> </td>
         <td> <?php echo  $sergio3 ?> </td>

         <?php } ?>

           <?php if ($dado ["nome"] == 'CRISTHIAN FRANCISCO BRUCH') {?>
        <td> <?php echo  $cristhian1 ?> </td>
        <td> <?php echo  $cristhian2 ?> </td>
         <td> <?php echo  $cristhian3 ?> </td>

         <?php } ?>

             <?php if ($dado ["nome"] == 'FLARES ANDRE DE LIZ') {?>
        <td> <?php echo  $flares1 ?> </td>
        <td> <?php echo  $flares2 ?> </td>
         <td> <?php echo  $flares3 ?> </td>

         <?php } ?>


          <?php if ($dado ["nome"] == 'JUNIOMAR ALEX MOCHNACZ') {?>
        <td> <?php echo  $juniomar1 ?> </td>
        <td> <?php echo  $juniomar2 ?> </td>
         <td> <?php echo  $juniomar3 ?> </td>

         <?php } ?>


             <?php if ($dado ["nome"] == 'GILBERTO MACHADO TEODORO') {?>
        <td> <?php echo  $gilberto1 ?> </td>
        <td> <?php echo  $gilberto2 ?> </td>
         <td> <?php echo  $gilberto3 ?> </td>

         <?php } ?>



             <?php if ($dado ["nome"] == 'ENIR JOSE RODRIGUES') {?>
        <td> <?php echo  $enir1 ?> </td>
        <td> <?php echo  $enir2 ?> </td>
         <td> <?php echo  $enir3 ?> </td>
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
          <th>PREVENTIVA</th>
           <th>TOTAL MÊS</th>
           <th>TOTAL MÊS ANTERIOR</th>

          
    
      
       
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
     

      <?php if ($dado ["nome"] == 'VALDELIRIO CASSIANO DE SOUZA') {?>
        <td> <?php echo  $cassiano_bd ?> </td>
        <td> <?php echo  $cassiano_os ?> </td>
         <td> <?php echo  $cassiano_prev ?> </td>
         <td <?php if ($cassiano_mes > 0){ echo "style='background:yellow'";} else if ($cassiano_mes == 0){ echo "style='background:red'";} else if ($cassiano_mes >= 11){ echo "style='background:green'";}  ?> > <?php echo  $cassiano_mes ?> </td>
         <td <?php if ($cassiano_anterior > 0){ echo "style='background:yellow'";} else if ($cassiano_anterior == 0){ echo "style='background:red'";} else if ($cassiano_anterior >= 11){ echo "style='background:green'";}  ?> > <?php echo  $cassiano_anterior ?> </td>
      

      <?php } ?>
        <?php if ($dado ["nome"] == 'MARCIO ALVES DA CRUZ') {?>
        <td> <?php echo  $marcio_bd ?> </td>
        <td> <?php echo  $marcio_os ?> </td>
         <td> <?php echo  $marcio_prev ?> </td>
         <td <?php if ($marcio_mes > 0){ echo "style='background:yellow'";} else if ($marcio_mes == 0){ echo "style='background:red'";} else if ($marcio_mes >= 11){ echo "style='background:green'";}  ?> > <?php echo  $marcio_mes ?> </td>
         <td <?php if ($marcio_anterior > 0){ echo "style='background:yellow'";} else if ($marcio_anterior == 0){ echo "style='background:red'";} else if ($marcio_anterior >= 11){ echo "style='background:green'";}  ?> > <?php echo  $marcio_anterior ?> </td>
    

      <?php } ?>

      <?php if ($dado ["nome"] == 'LUIS FERNANDO FAIX') {?>
        <td> <?php echo  $faix_bd ?> </td>
        <td> <?php echo  $faix_os ?> </td>
         <td> <?php echo  $faix_prev ?> </td>
         <td <?php if ($faix_mes > 0){ echo "style='background:yellow'";} else if ($faix_mes == 0){ echo "style='background:red'";} else if ($faix_mes >= 11){ echo "style='background:green'";}  ?> > <?php echo  $faix_mes ?> </td>
         <td <?php if ($faix_anterior > 0){ echo "style='background:yellow'";} else if ($faix_anterior == 0){ echo "style='background:red'";} else if ($faix_anterior >= 11){ echo "style='background:green'";}  ?> > <?php echo  $faix_anterior ?> </td>  

        

      <?php } ?>


      <?php if ($dado ["nome"] == 'MARLOS UELDES FELICIO') {?>
        <td> <?php echo  $marlos_bd ?> </td>
        <td> <?php echo  $marlos_os ?> </td>
         <td> <?php echo  $marlos_prev ?> </td>
         <td <?php if ($marlos_mes > 0){ echo "style='background:yellow'";} else if ($marlos_mes == 0){ echo "style='background:red'";} else if ($marlos_mes >= 11){ echo "style='background:green'";}  ?> > <?php echo  $marlos_mes ?> </td>
         <td <?php if ($marlos_anterior > 0){ echo "style='background:yellow'";} else if ($marlos_anterior == 0){ echo "style='background:red'";} else if ($marlos_anterior >= 11){ echo "style='background:green'";}  ?> > <?php echo  $marlos_anterior ?> </td>
         

      <?php } ?>


<?php if ($dado ["nome"] == 'CLEOMAR APARECIDO BISCHOFF') {?>
        <td> <?php echo  $cleomar_bd ?> </td>
        <td> <?php echo  $cleomar_os ?> </td>
         <td> <?php echo  $cleomar_prev ?> </td>
         <td <?php if ($cleomar_mes > 0){ echo "style='background:yellow'";} else if ($cleomar_mes == 0){ echo "style='background:red'";} else if ($cleomar_mes >= 11){ echo "style='background:green'";}  ?> > <?php echo  $cleomar_mes ?> </td>
         <td <?php if ($cleomar_anterior > 0){ echo "style='background:yellow'";} else if ($cleomar_anterior == 0){ echo "style='background:red'";} else if ($cleomar_anterior >= 11){ echo "style='background:green'";}  ?> > <?php echo  $cleomar_anterior ?> </td>
        

      <?php } ?>

      <?php if ($dado ["nome"] == 'ANDERSON FELIPE FERRI') {?>
        <td> <?php echo  $ferri_bd ?> </td>
        <td> <?php echo  $ferri_os ?> </td>
         <td> <?php echo  $ferri_prev ?> </td>
         <td <?php if ($ferri_mes > 0){ echo "style='background:yellow'";} else if ($ferri_mes == 0){ echo "style='background:red'";} else if ($ferri_mes >= 11){ echo "style='background:green'";}  ?> > <?php echo  $ferri_mes ?> </td>
        <td <?php if ($ferri_anterior > 0){ echo "style='background:yellow'";} else if ($ferri_anterior == 0){ echo "style='background:red'";} else if ($ferri_anterior >= 11){ echo "style='background:green'";}  ?> > <?php echo  $ferri_anterior ?> </td>

      <?php } ?>

       <?php if ($dado ["nome"] == 'SERGIO OSMAR DA SILVA') {?>
        <td> <?php echo  $sergio_bd ?> </td>
        <td> <?php echo  $sergio_os ?> </td>
         <td> <?php echo  $sergio_prev ?> </td>
         <td <?php if ($sergio_mes > 0){ echo "style='background:yellow'";} else if ($sergio_mes == 0){ echo "style='background:red'";} else if ($sergio_mes >= 11){ echo "style='background:green'";}  ?> > <?php echo  $sergio_mes ?> </td>
         <td <?php if ($sergio_anterior > 0){ echo "style='background:yellow'";} else if ($sergio_anterior == 0){ echo "style='background:red'";} else if ($sergio_anterior >= 11){ echo "style='background:green'";}  ?> > <?php echo  $sergio_anterior ?> </td>
        

         <?php } ?>

           <?php if ($dado ["nome"] == 'CRISTHIAN FRANCISCO BRUCH') {?>
        <td> <?php echo  $cristhian_bd ?> </td>
        <td> <?php echo  $cristhian_os ?> </td>
         <td> <?php echo  $cristhian_prev ?> </td>
         <td <?php if ($cristhian_mes > 0){ echo "style='background:yellow'";} else if ($cristhian_mes == 0){ echo "style='background:red'";} else if ($cristhian_mes >= 11){ echo "style='background:green'";}  ?> > <?php echo  $cristhian_mes ?> </td>
         <td <?php if ($cristhian_anterior > 0){ echo "style='background:yellow'";} else if ($cristhian_anterior == 0){ echo "style='background:red'";} else if ($cristhian_anterior >= 11){ echo "style='background:green'";}  ?> > <?php echo  $cristhian_anterior ?> </td>
         


         <?php } ?>

             <?php if ($dado ["nome"] == 'FLARES ANDRE DE LIZ') {?>
        <td> <?php echo  $flares_bd ?> </td>
        <td> <?php echo  $flares_os ?> </td>
         <td> <?php echo  $flares_prev ?> </td>
         <td <?php if ($flares_mes > 0){ echo "style='background:yellow'";} else if ($flares_mes == 0){ echo "style='background:red'";} else if ($flares_mes >= 11){ echo "style='background:green'";}  ?> > <?php echo  $flares_mes ?> </td>
         <td <?php if ($flares_anterior > 0){ echo "style='background:yellow'";} else if ($flares_anterior == 0){ echo "style='background:red'";} else if ($flares_anterior >= 11){ echo "style='background:green'";}  ?> > <?php echo  $flares_anterior ?> </td>
        

         <?php } ?>


          <?php if ($dado ["nome"] == 'JUNIOMAR ALEX MOCHNACZ') {?>
        <td> <?php echo  $juniomar_bd ?> </td>
        <td> <?php echo  $juniomar_os ?> </td>
         <td> <?php echo  $juniomar_prev ?> </td>
         <td <?php if ($juniomar_mes > 0){ echo "style='background:yellow'";} else if ($juniomar_mes == 0){ echo "style='background:red'";} else if ($juniomar_mes >= 11){ echo "style='background:green'";}  ?> > <?php echo  $juniomar_mes ?> </td>
         <td <?php if ($juniomar_anterior > 0){ echo "style='background:yellow'";} else if ($juniomar_anterior == 0){ echo "style='background:red'";} else if ($juniomar_anterior >= 11){ echo "style='background:green'";}  ?> > <?php echo  $juniomar_anterior ?> </td>
    

         <?php } ?>


             <?php if ($dado ["nome"] == 'GILBERTO MACHADO TEODORO') {?>
        <td> <?php echo  $gilberto_bd ?> </td>
        <td> <?php echo  $gilberto_os ?> </td>
         <td> <?php echo  $gilberto_prev ?> </td>
         <td <?php if ($gilberto_mes > 0){ echo "style='background:yellow'";} else if ($gilberto_mes == 0){ echo "style='background:red'";} else if ($gilberto_mes >= 11){ echo "style='background:green'";}  ?> > <?php echo  $gilberto_mes ?> </td>
         <td <?php if ($gilberto_anterior > 0){ echo "style='background:yellow'";} else if ($gilberto_anterior == 0){ echo "style='background:red'";} else if ($gilberto_anterior >= 11){ echo "style='background:green'";}  ?> > <?php echo  $gilberto_anterior ?> </td>
        

         <?php } ?>



             <?php if ($dado ["nome"] == 'ENIR JOSE RODRIGUES') {?>
        <td> <?php echo  $enir_bd ?> </td>
        <td> <?php echo  $enir_os ?> </td>
         <td> <?php echo  $enir_prev ?> </td>
         <td <?php if ($enir_mes > 0){ echo "style='background:yellow'";} else if ($enir_mes == 0){ echo "style='background:red'";} else if ($enir_mes >= 11){ echo "style='background:green'";}  ?> > <?php echo  $enir_mes ?> </td>
         <td <?php if ($enir_anterior > 0){ echo "style='background:yellow'";} else if ($enir_anterior == 0){ echo "style='background:red'";} else if ($enir_anterior >= 11){ echo "style='background:green'";}  ?> > <?php echo  $enir_anterior ?> </td>
         
         </tbody>

         </div>



         <?php } ?>













<?php }  ?>




</table>





</div>




         </div>
    </div>



</div>

</body>




</html>


