<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cadastro_ferra.php'",3000);
	
	
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
	setTimeout("window.location='cadastro_ferra.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

 <title>CADASTRO COLABORADOR</title>


</head>



<body>








<?php


$id =$_POST['id'];
$eqp =$_POST['eqp'];
$modelo =$_POST['modelo'];
$patrimonio =$_POST['patrimonio'];



$sql = mysql_query ("select * from colaborador where id = '$id' " );
$row = mysql_num_rows($sql);
 if  ($row == 0)
{


echo "COLABORADOR AINDA NÃO CADASTRADO, VERIFIQUE!!";
   
  

  
}

$sql2 = mysql_query ("select * from ferramentas where patrimonio = '$patrimonio' " );
$row2 = mysql_num_rows($sql2);
 if  ($row2 >= 1)
{


echo "EQUIPAMENTO JÁ CADASTRADO, VERIFIQUE!!";
   
  

  
}


 else
 {

	

/* $sql = mysql_query ("select * from repetida where circuito = '$ccto'  and  MONTH(data) = MONTH(NOW())" );
$row = mysql_num_rows($sql);
 if  ($row == 1)
{


echo "<h1>CIRCUITO JÁ CADASTRADO COMO REPETIDO ESSE MÊS!</h1>";
   
  

  
}  

else
{  */

 



$query = "insert into ferramentas (eqp,patrimonio,modelo,id_tec)";

$query.= "values ('$eqp','$patrimonio','$modelo','$id')";




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


?>

























</body>


</html>