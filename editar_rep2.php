<?php 

include "conn.php";



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


$query = "update repetida set ccto ='$ccto',cliente = '$cliente' ,tratada = 'SIM' ,pdf = '$novo_nome',justificativa = '$just' where ccto = '$ccto'";






$sql = mysql_query($query);


if($sql )
{
  
  
    echo ' <h2>EDITADA COM SUCESSO!';
  
 echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=pesq_ger.php">';
  

  
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

 



$query = "update repetida set ccto ='$ccto',cliente = '$cliente',justificativa = '$just' where ccto = '$ccto'";






$sql = mysql_query($query);


if($sql )
{
  
  
    echo ' <h2>EDITADA COM SUCESSO!';
  
 echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=pesq_ger.php">';
  

  
}
else
{
  
  echo "<h2>Erro no cadastro!</h2> ";
  
}



}




  ?>
