<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='pesq_ger.php'",3000);
	
	
}
</script> 


<?php 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GA' ) && ($_SESSION["acesso"] != 'GE' ))
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
  $permite = array('.pdf');
    $type =$_FILES['pdf'] ['type'];
    $tamanho =$_FILES['pdf']['size'];
    





  $extensao = strtolower(substr($_FILES['pdf'] ['name'], -4));
  $novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "pdf_fiscal/";



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

	

	


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='pesq_ger.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

 <title>FISCALIZAÇÕES</title>


</head>



<body>








<?php


$ccto =$_POST['ccto'];
$cliente =$_POST['cliente'];
$tipo =$_POST['tipo'];


	







$query = "insert into atividades (cliente,ccto,data,tipo,supervisor,pdf)";

$query.= "values ('$cliente','$ccto',NOW(),'$tipo','".$_SESSION['nome']."','$novo_nome' )";




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