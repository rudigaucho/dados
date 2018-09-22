<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='pendencia.php'",3000);
  
  
}
</script> 


<?php 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) &&  ($_SESSION["acesso"] != 'GA' ))
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
  setTimeout("window.location='pendencia.php'",3000);
  
  
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

 <title>CADASTRO DE AGENDAMENTO</title>


</head>



<body>








<?php


$tec =$_POST['tec'];
$obs =$_POST['obs'];






  



 



$query = "insert into pendencia (tec,obs,status,data)";

$query.= "values ('$tec','$obs','PENDENTE',NOW())";




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







?>

























</body>


</html>