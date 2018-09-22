
<?php
include "conn.php";

session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GA' ) && ($_SESSION["acesso"] != 'GE' ) )
{
  header("Location: index.html");
  exit;
  
  
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='massa_manobra.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>MASSA MANOBRA</title>


</head>



<body>




















<?php

//$values_gender = $_POST["produtos"]['qtd'];
//$values_gender2 = $_POST["list"]['qtd'];

$protocolo = (mt_rand(1,101020000) ) ;

$teste =$_POST['ccto'];

$ba =$_POST['ba'];
$tec =$_POST['tec'];
$mat1 =$_POST['mat1'];
$mat2 =$_POST['mat2'];
$qtd1 =$_POST['qtd1'];
$qtd2 =$_POST['qtd2'];


/* foreach ($values_gender as $values){

                     $string[] =  $values;

                     

                  }

$i = 0;

                foreach ($values_gender2 as $values2){


                	

             

                    $query1 = "insert into mano_mat (id,material,quantidade)";

                    $query1.= "values ('$protocolo','$values2','$string[$i]')";

                   

              

                    ++$i;




$sql1 = mysql_query($query1);

                 }   */







$query = "insert into mano_ccto (id,ccto,ba,tecnico,mat1,qtd1,mat2,qtd2,data,id_ga)";

$query.= "values ('$protocolo','$teste','$ba','$tec','$mat1','$qtd1','$mat2','$qtd2',NOW(),'".$_SESSION['tr']."')";




$sql = mysql_query($query);


if($sql)
{
	
	
		echo ' <h2>ENVIADA COM SUCESSO!';
	
 	echo "<script>saidasuccessfully()</script>";

		
	

	
}
else
{
	
	echo "<h2>Erro no cadastro!</h2> ";

		
	
}




 

?>

























</body>


</html>







