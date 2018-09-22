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
	setTimeout("window.location='pesq_ger.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

 <title>JUSTIFICATIVA.</title>


</head>



<body>








<?php









  




$ccto =$_POST['ccto'];
$just =$_POST['just'];



$sql = mysql_query ("select * from repetida where ccto = '$ccto' and ga = '".$_SESSION['nome']."' and MONTH(data) = MONTH(NOW()) " );
$row = mysql_num_rows($sql);
 if  ($row == 0)
{


echo "CIRCUITO NÃO CONSTA NA SUA LISTA DE REPETIDO!";
   
  

  
}
else 
{





$query = "update repetida set  justificativa = '$just'  where ccto = '$ccto' and ga = '".$_SESSION['nome']."' and MONTH(data) = MONTH(NOW())  ";




$sql = mysql_query($query);


if($sql )
{
  
  
    echo ' <h2>JUSTIFICADA COM SUCESSO!';
  

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