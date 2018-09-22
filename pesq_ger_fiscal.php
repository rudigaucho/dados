<?php include "conn.php"; ?>
<?php 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GER' ))
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


  <link rel="icon" href="img/key.png">
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
    </div>
    <ul class="nav navbar-nav">
      
      
      <li><a href="#"></a></li> 
      <li class="active"><a href="pesq_ger.php">Relatório Contratuais</a></li>
      <li class="active"><a href="pesq_per.php">Consulta Contratual</a></li>
      <li class="active"><a href="pesq_per_fiscal.php">Consulta Fiscalização</a></li>
      <li class="active"><a href="modifica_senha.php">Trocar senha</a></li>
      <li class="active"><a href="Logout.php">Logout</a></li>
    </ul>

  </div>

</nav>





<div class="container-fluid">
<div class="row">
<span><strong>CONTROLE DE FISCALIZAÇÕES SEMANA CORRENTE</strong></span>
  <div class="table-responsive col-sm-10">

  <table class="table table-hover" >
    <thead>
      <tr >
      <th>ESTADO</th>
        <th>GA</th>
        <th>BD</th>
         <th>OS</th>
          <th>PREVENTIVA</th>
          <th>TOTAL</th>
    
      
       
      </tr>
    </thead>
  
  <?php

include  "pegardados2.php";
$sql = mysql_query ("select * from usuario where acesso = 'GA' ORDER BY estado" );







  while ($dado = mysql_fetch_assoc($sql )){
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <tbody> 
      <tr class="success">
        <td> <?php echo $dado ["estado"];  ?></td>
      <td> <?php echo $dado ["nome"];  ?></td>

      <?php if ($dado ["nome"] == 'VALDELIRIO CASSIANO DE SOUZA') {?>
        <td> <?php echo  $cassiano_bd ?> </td>
        <td> <?php echo  $cassiano_os ?> </td>
         <td> <?php echo  $cassiano_prev ?> </td>
         <td> <?php echo  $soma_cassiano ?> </td>

      <?php } ?>
        <?php if ($dado ["nome"] == 'MARCIO ALVES DA CRUZ') {?>
        <td> <?php echo  $marcio_bd ?> </td>
        <td> <?php echo  $marcio_os ?> </td>
         <td> <?php echo  $marcio_prev ?> </td>
         <td> <?php echo  $soma_marcio ?> </td>

      <?php } ?>

      <?php if ($dado ["nome"] == 'LUIS FERNANDO FAIX') {?>
        <td> <?php echo  $faix_bd ?> </td>
        <td> <?php echo  $faix_os ?> </td>
         <td> <?php echo  $faix_prev ?> </td>
         <td> <?php echo  $soma_faix ?> </td>

      <?php } ?>


      <?php if ($dado ["nome"] == 'MARLOS UELDES FELICIO') {?>
        <td> <?php echo  $marlos_bd ?> </td>
        <td> <?php echo  $marlos_os ?> </td>
         <td> <?php echo  $marlos_prev ?> </td>
         <td> <?php echo  $soma_marlos ?> </td>

      <?php } ?>


<?php if ($dado ["nome"] == 'CLEOMAR APARECIDO BISCHOFF') {?>
        <td> <?php echo  $cleomar_bd ?> </td>
        <td> <?php echo  $cleomar_os ?> </td>
         <td> <?php echo  $cleomar_prev ?> </td>
         <td> <?php echo  $soma_cleomar ?> </td>

      <?php } ?>

      <?php if ($dado ["nome"] == 'ANDERSON FELIPE FERRI') {?>
        <td> <?php echo  $ferri_bd ?> </td>
        <td> <?php echo  $ferri_os ?> </td>
         <td> <?php echo  $ferri_prev ?> </td>
         <td> <?php echo  $soma_ferri ?> </td>

      <?php } ?>

       <?php if ($dado ["nome"] == 'SERGIO OSMAR DA SILVA') {?>
        <td> <?php echo  $sergio_bd ?> </td>
        <td> <?php echo  $sergio_os ?> </td>
         <td> <?php echo  $sergio_prev ?> </td>
         <td> <?php echo  $soma_sergio ?> </td>

         <?php } ?>

           <?php if ($dado ["nome"] == 'CRISTHIAN FRANCISCO BRUCH') {?>
        <td> <?php echo  $cristhian_bd ?> </td>
        <td> <?php echo  $cristhian_os ?> </td>
         <td> <?php echo  $cristhian_prev ?> </td>
         <td> <?php echo  $soma_cristhian ?> </td>

         <?php } ?>

             <?php if ($dado ["nome"] == 'FLARES ANDRE DE LIZ') {?>
        <td> <?php echo  $flares_bd ?> </td>
        <td> <?php echo  $flares_os ?> </td>
         <td> <?php echo  $flares_prev ?> </td>
         <td> <?php echo  $soma_flares ?> </td>

         <?php } ?>


          <?php if ($dado ["nome"] == 'JUNIOMAR ALEX MOCHNACZ') {?>
        <td> <?php echo  $juniomar_bd ?> </td>
        <td> <?php echo  $juniomar_os ?> </td>
         <td> <?php echo  $juniomar_prev ?> </td>
         <td> <?php echo  $soma_juniomar ?> </td>

         <?php } ?>


             <?php if ($dado ["nome"] == 'GILBERTO MACHADO TEODORO') {?>
        <td> <?php echo  $gilberto_bd ?> </td>
        <td> <?php echo  $gilberto_os ?> </td>
         <td> <?php echo  $gilberto_prev ?> </td>
         <td> <?php echo  $soma_gilberto ?> </td>

         <?php } ?>



             <?php if ($dado ["nome"] == 'ENIR JOSE RODRIGUES') {?>
        <td> <?php echo  $enir_bd ?> </td>
        <td> <?php echo  $enir_os ?> </td>
         <td> <?php echo  $enir_prev ?> </td>
         <td> <?php echo  $soma_enir ?> </td>
         </tbody>
         </div>



         <?php } ?>













<?php }  ?>










</div>




         </div>
























     










    












































</body>




</html>

