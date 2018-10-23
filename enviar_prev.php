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

$ccto =$_POST['ccto'];

$sql = mysql_query ("select * from repetida where ccto = '$ccto' and ga = '".$_SESSION['nome']."'and MONTH(data) = MONTH(NOW()) " );
$row = mysql_num_rows($sql);
 if  ($row == 0)
{


echo "CIRCUITO NÃO ESTA NA SUA LISTA DE REPETIDOS, VERIFIQUE NOVAMENTE!";
   
  

  
}

else  {



$sql2 = mysql_query ("select * from repetida where ccto = '$ccto' and ga = '".$_SESSION['nome']."' and tratada = 'NAO' and MONTH(data) = MONTH(NOW()) " );
$row2 = mysql_num_rows($sql2);
 if  ($row2 == 1)
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

 <title>PREVENTIVA</title>


</head>



<body>








<?php










	









$query = "update repetida set  tratada ='SIM', pdf = '$novo_nome'  where ccto = '$ccto' and ga = '".$_SESSION['nome']."' and MONTH(data) = MONTH(NOW()) and tratada = 'NAO' ";




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
else
{

$sql3 = mysql_query ("select * from repetida where ccto = '$ccto' and ga = '".$_SESSION['nome']."' and tratada = 'SIM' and MONTH(data) = MONTH(NOW()) " );
$row3 = mysql_num_rows($sql3);
 if  ($row3 >= 1)
{

	echo "<h2>CIRCUITO JÁ POSSUI PREVENTIVA!</h2> ";

}


}




}




?>

























</body>


</html>