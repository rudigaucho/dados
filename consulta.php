<?php include "conn.php"; ?>
<?php 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GA' ) &&  ($_SESSION["acesso"] != 'GE' ))
{
  header("Location: index.html");
  exit;
  
  
}


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="icon" href="logo.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" href="img/logo_oi.ico">

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

   <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
        <a class="navbar-brand" href="#" > <?php echo $_SESSION["nome"]?></a>
    </div>
    <ul class="nav navbar-nav">
    
      <li class="active"><a href="pesq_ger.php">Voltar</a></li>
      
       <li class="active"><a href="logout.php">Logout</a></li>
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>


<div class="container">
 
  
  <form class="form-inline" role="form"  method="POST" action="index.php"  style="margin-left:10%;">
    <div class="form-group">
      <label for="email">Digite o N° do CIRCUITO</label>
      <input type="text" class="form-control" id="ccto" name="ccto" placeholder="Pesquisa" required>
    </div>
    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>
</div>

  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
      <th>B.A</th>
        <th>CCTO</th>
        <th>CLIENTE</th>
        <th>TÉCNICO</th>
         <th>TR TÉCNICO</th>
          <th>GA</th>
        <th>DATA</th>
        <th>OBS</th>
        
        <th>PDF</th>
      
       
      </tr>
    </thead>
  
  <?php
if (isset($_POST ['submit']) )
{
$busca = $_POST['ccto'];
$sql = mysql_query ("select * from contratual where ccto = '".$busca."'" );

$sql2 = mysql_query ("select * from contratual where ccto = '".$busca."'" );

$row = mysql_num_rows($sql);
$row2 = mysql_num_rows($sql2);

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql )){
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <tbody>
      <tr class="success">
  <td> <?php echo $dado ["ba"];  ?></td>    
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?></td>
 <td> <?php echo $dado ["tec"];  ?></td>
<td> <?php echo $dado ["tr_tec"];  ?></td>
<td> <?php echo $dado ["supervisor"];  ?></td>
<td> <?php echo $dado ["data"];  ?></td>
 <td> <?php echo $dado ["obs"];  ?></td>

 <?php $pdf =  $dado ["pdf"];   ?>


<td><?php   echo "<a  href='pdf/$pdf"."'pdf' target='_blank' class='btn btn-warning btn-xs' >Download</a>" ?></td>




















<div class="modal fade" id="myModal<?php echo $dado ['ccto'];  ?>" role="dialog">
    <div class="modal-dialog-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
                  



          <h4 class="modal-title" style="text-align:center">RELATÓRIO<h4>
      
          <h4 class="modal-title">CONTRATUAL<h4>
        </div>
        <div class="modal-body">

        <?php echo "<iframe src='pdf/$pdf' width='600' height='780' width='400' ></iframe" ?>

 



          

        <form method="post" action="busca_pendente.php">
          
            

        </div>

 

        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
<a href="mapa2.php?lat=<?php echo $coordenadas1 ?>&long=<?php echo $coordenadas2 ?>" id="test" target="_blank" onClick="javascript:fnExcelReport();">GPS </a>

          
         


          </form>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


      </tr> 
  <?php }  } }   
   
    ?>



    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>
<?php 

if (isset($_POST ['ok']) )
{

$id =$_POST['id'];
$serie =$_POST['n_serie'];


$query = "insert into carga_colaborador (n_serie,id_col,data)";
$query.= "values ('$serie','$id',NOW())";
$query2 = "delete from pendente where n_serie = '$serie'";

$sql = mysql_query($query);
$sql2 = mysql_query($query2);
if($sql && $sql2)
{
  
  echo "<h2>Enviado com sucesso!</h2>";
  echo "<script>loginsuccessfully()</script>";
  
}
else
{
  
  echo "Erro no cadastro!";
  
}







}

?>



</body>
</html>

