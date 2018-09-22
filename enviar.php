<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='pesq_ger.php'",3000);
	
	
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
	setTimeout("window.location='cad_prev.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

 <title>CADASTRO REPETIDAS</title>


</head>



<body>








<?php


$ccto =$_POST['ccto'];
$cliente =$_POST['cliente'];

$just =$_POST['just'];
$optradio =$_POST['optradio'];
$pdf =$_POST['pdf'];


if ($optradio == 'SIM')

{














  

  








  $permite = array('.pdf');
    $type =$_FILES['pdf'] ['type'];
    $tamanho =$_FILES['pdf']['size'];
    





  $extensao = strtolower(substr($_FILES['pdf'] ['name'], -4));
  $novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "pdf/";



    if (!in_array($extensao,$permite)  )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
 // echo "<script>saidasuccessfully()</script>";
}
else if($tamanho > 2000000){
   echo "Limite máximo 2 MB!"; 
   //...
}
else
{ 
move_uploaded_file ($_FILES['pdf'] ['tmp_name'], $diretorio.$novo_nome )  ; 


$query = "insert into repetida (ccto,cliente,ga,data,tratada,pdf,justificativa)";

$query.= "values ('$ccto','$cliente','".$_SESSION["nome"]."',NOW(),'$optradio','$novo_nome','$just')";




$sql = mysql_query($query);


if($sql )
{
	
	
		echo ' <h2>ENVIADA COM SUCESSO!';
	
	echo "<script>saidasuccessfully()</script>";
	

	
}
else
{
	
	echo "<h2>Erro no cadastro!</h2> ";
	
}


















}


}


else {




	

/* $sql = mysql_query ("select * from repetida where circuito = '$ccto'  and  MONTH(data) = MONTH(NOW())" );
$row = mysql_num_rows($sql);
 if  ($row == 1)
{


echo "<h1>CIRCUITO JÁ CADASTRADO COMO REPETIDO ESSE MÊS!</h1>";
   
  

  
}  

else
{  */

 



$query = "insert into repetida (ccto,cliente,ga,data,tratada,pdf,justificativa)";

$query.= "values ('$ccto','$cliente','".$_SESSION["nome"]."',NOW(),'$optradio','NULL','$just')";




$sql = mysql_query($query);


if($sql )
{
	
	
		echo ' <h2>ENVIADA COM SUCESSO!';
	
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