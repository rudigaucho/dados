<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='almox.php'",5000);
  
  
}
</script> 


<?php 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) &&  ($_SESSION["acesso"] != 'ALMOX' ))
{
  header("Location: index.html");
  exit;
  
  
}


?>

<?php
include "conn.php";
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {




?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='almox.php'",5000);
  
  
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>
  
 <title>CADASTRO DE MATERIAIS</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>



<body>








<?php


$local =$_POST['local'];
$material =$_POST['material'];
$serie =$_POST['serie'];
$situacao =$_POST['situacao'];
$causa =$_POST['causa'];
$servico =$_POST['servico'];
$custo_ter =$_POST['custo_ter'];
$custo_ser =$_POST['custo_ser'];



$serie_8 = substr($serie, 16, strlen($serie) - 15);




  
$sql = mysql_query ("select * from base_eqp where serie_8 = '$serie_8' and qtd_rep >= '1' " );
$row = mysql_num_rows($sql);
 if ($situacao == 'NAO APRESENTOU DEFEITO')

  {
$query = "insert into base_eqp (data,local,material,serie,situacao,causa,servico,custo_terceira,custo_serede,serie_8,qtd_rep)";

$query.= "values (NOW(),'$local','$material','$serie','$situacao','$causa','$servico','$custo_ter','$custo_ser','$serie_8','0')";




$sql = mysql_query($query);


if($sql )
{
  
  
    echo ' <h2>CADASTRO EFETUADO COM SUCESSO!';
  
  echo "<script>saidasuccessfully()</script>";
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}


  }


else
{

if  ($row >= 1)
{


echo "EQUIPAMENTO CONSTA COMO REPARADO,NÃO SENDO POSSIVEL EFETUAR OUTRO REPARO!! <br><br><br>";
   
 while ($dado = mysql_fetch_assoc($sql))


 {

   $data = $dado ["data"];
   $material = $dado ["material"];
   $situacao = $dado ["situacao"];
   $causa = $dado ["causa"];
   $servico = $dado ["servico"];
   $qtd_rep = $dado ["qtd_rep"];
echo "<ul class='list-group' ><li class='list-group-item active'  >RELATÓRIO</li><br> <strong>EQUIPAMENTO: </strong> $material <br> <strong>DATA ÚLTIMO REPARO:</strong> $data <br><strong>SITUAÇÃO: </strong>$situacao <br> <strong>CAUSA:</strong> $causa <br> <strong>SERVIÇO:</strong> $servico <br> <strong>Nº DE REPAROS: </strong>$qtd_rep </ul>";

 }
 }   
  else

{


$query = "insert into base_eqp (data,local,material,serie,situacao,causa,servico,custo_terceira,custo_serede,serie_8,qtd_rep)";

$query.= "values (NOW(),'$local','$material','$serie','$situacao','$causa','$servico','$custo_ter','$custo_ser','$serie_8','1')";




$sql = mysql_query($query);


if($sql )
{
  
  
    echo ' <h2>CADASTRO EFETUADO COM SUCESSO!';
  
  echo "<script>saidasuccessfully()</script>";
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}




}


}















?>

























</body>


</html>