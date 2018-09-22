<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cadastro_col.php'",3000);
	
	
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
	setTimeout("window.location='cadastro_col.php'",3000);
	
	
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
$nome =$_POST['nome'];
$email =$_POST['email'];
$fone =$_POST['fone'];
$tel =$_POST['tel'];
$imei =$_POST["imei"];


$sql = mysql_query ("select * from colaborador where id = '$id' " );
$row = mysql_num_rows($sql);
 if  ($row >= 1)
{


echo "COLABORADOR JÁ CADASTRADO, VERIFIQUE!!";
   
  

  
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

 



$query = "insert into colaborador (id,nome,id_ga,fone,imei,n_aparelho,email)";

$query.= "values ('$id','$nome','".$_SESSION['tr']."','$fone','$imei','$tel','$email')";




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