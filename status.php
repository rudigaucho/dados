
<?php 
include "conn.php";

session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GA' ))
{
  header("Location: index.html");
  exit;
  
  
}


?>

<!DOCTYPE html>



<html lang="pt-br">
<head>
<link rel="icon" href="logo.png">


<!--  FUNCAO COMPLETAR CAMPO TRECHO-->







<!--   FIM FUNCAO                            -->







  <meta charset="utf-8">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

<link rel="stylesheet"  href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet"  href="/resources/demos/style.css">



<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<script type="text/javascript" src="validacao.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>









<link rel="icon" href="img/logo_oi.ico">




<style>
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
       text-align:center;
    }
	.container-fluid
	{
	background-color: orange;
	}
  #realcar
  {
  background-color: grey;
  }
   #realcar2
  {
  background-color: #D3D3D3;
  }

  #loading
{
  
width:70px;
height:70px;  
  
  
  
  
}



</style>
  <title>STATUS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<?php 
$sql1 = mysql_query ("select count(*) as conta from contratual where supervisor = '".$_SESSION['nome']."' and MONTH(data) = MONTH(NOW())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $contratual_mes = $dado["conta"];

 } 

 $sql2 = mysql_query ("select count(*) as conta from contratual where supervisor = '".$_SESSION['nome']."'  and year(data) = year(NOW())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $contratual_ano = $dado["conta"];

 }
 $sql3 = mysql_query ("select count(*) as conta from atividades where supervisor = '".$_SESSION['nome']."'  and week(data) = week(NOW()) and tipo = 'OS' " );
 while ($dado = mysql_fetch_assoc($sql3 ) ){


  $fiscal_os = $dado["conta"];

 }  

$sql4 = mysql_query ("select count(*) as conta from atividades where supervisor = '".$_SESSION['nome']."'  and week(data) = week(NOW()) and tipo = 'BD' " );
 while ($dado = mysql_fetch_assoc($sql4 ) ){


  $fiscal_bd = $dado["conta"];

 }  

 $sql5 = mysql_query ("select count(*) as conta from atividades where supervisor = '".$_SESSION['nome']."'  and week(data) = week(NOW()) and tipo = 'PREVENTIVA' " );
 while ($dado = mysql_fetch_assoc($sql5 ) ){


  $fiscal_prev = $dado["conta"];

 } 




?>



  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       <a class="navbar-brand" href="#" style="color:black;"> <?php echo $_SESSION["nome"]?></a>
    </div>
    <ul class="nav navbar-nav">
       <li class="active"><a href="cad_prev.php">Voltar</a></li>
       <li class="active"><a href="logout.php">Logout</a></li>
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>
<span><strong>SEU STATUS DE CONTRATUAIS E FISCALIZAÇÕES</strong></span>
<br><br><br><br><br>
<div class="container">


<div class="row content">


    <div class="col-sm-5 "  >

    <ul class="list-group">
  <li class="list-group-item">Contratuais entregue mês atual <span class="badge"><?php echo $contratual_mes ?></span></li>
  <li class="list-group-item">Contratuais entregue ano atual <span class="badge"><?php echo $contratual_ano ?></span></li> 
  <li class="list-group-item">Fiscalizaçoes OS semana atual <span class="badge"><?php echo $fiscal_os ?></span></li> 
  <li class="list-group-item">Fiscalizaçoes BD semana atual <span class="badge"><?php echo $fiscal_bd ?></span></li> 
  <li class="list-group-item">Fiscalizaçoes PREVENTIVA semana atual <span class="badge"><?php echo $fiscal_prev ?></span></li>
</ul>
  
  
  

 
 </div>
 
</div>
</div>

</body>
</html>


<script>
  
$(function() {

/*var  availableTags = [

"ajskkdp",
"iiisosoa",
"ooiismsm",
"aassdddd",
"ooedmmmd",
"iisoosoos"
];

$( "#cabo" ).autocomplete({
  source: availableTags

  });
*/

$.getJSON("listar_cabos.php", function(data){
//console.log(data);
var retorno = [];


$(data).each( function (key, value){

 // console.log(value.cabo);

 retorno.push(value.cabo);


});
$("#cabo").autocomplete({
  source: retorno ,

 

  });




  });
});






</script>

<!--
<script>
  
$(function() {



$.getJSON("listar_cabos.php", function(data2){
//console.log(data);
var retorno2 = [];


$(data2).each( function (key2, value2){

 // console.log(value.cabo);

 retorno2.push(value2.trecho);


});
$("#localidade").autocomplete({
  source: retorno2

  });




  });
});






</script>
-->