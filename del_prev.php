
<?php
include "conn.php";
session_start();
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {
  
  


  
  
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='cabo.php'",3000);
  
  
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title></title>

<link rel="icon" href="apa.jpg">
</head>



<body>








<?php


$protocolo =$_GET['protocolo'];







$sql2 = mysql_query ("select * from atividades where protocolo = '$protocolo' and supervisor = '".$_SESSION["nome"]."'" );
$row2 = mysql_num_rows($sql2);
 if  ($row2 == 0)
{


echo "CIRCUITO NÃO ESTA NA SUA LISTA DE FISCALIZAÇÕES!";
   
  

  
}

else {






$query = "delete from atividades where protocolo = '$protocolo'";






$sql = mysql_query($query);


if($sql )
{
  
  
    echo ' <h2>DELETADA COM SUCESSO!';
  
  echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=pesq_ger.php">';


  

  
}
else
{
  
  echo "<h2>Erro !</h2> ";
  
}



}
 

?>

























</body>


</html>