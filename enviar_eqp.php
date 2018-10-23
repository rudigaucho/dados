<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='epi.php'",3000);
	
	
}
</script> 

<script type="text/javascript">
function saida_GE()
{
  setTimeout("window.location='tbl_val.php'",3000);
  
  
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




<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

 <title>CADASTRO REPETIDAS</title>


</head>



<body>


<?php


$permite = array('image/jpg', 'image/jpeg' , 'image/png');
    $type =$_FILES['foto_tec1'] ['type'];
    $type2 =$_FILES['foto_tec2'] ['type'];
     $type3 =$_FILES['foto_carro_1'] ['type'];
      $type4 =$_FILES['foto_carro_2'] ['type'];
       

//  ------------------------------------------ VERIFICACAO TAMANHO FOTOS ------------------------------------------------------- 


            $tamanho1 =$_FILES['foto_tec1']['size'];
            $tamanho2 =$_FILES['foto_tec2']['size'];
            $tamanho3 =$_FILES['foto_carro_1']['size'];
            $tamanho4 =$_FILES['foto_carro_2']['size'];
           



// ------------------------------------------------------------- verificar vazios---

            if (empty($type))
            {

               $type = 'image/png';



            }

             if (empty($type2))
            {

               $type2 = 'image/png';



            }
             if(empty($_FILES['foto_carro_1'] ['type']))
            {

               $type3 = 'image/png';



            }
            if (empty($_FILES['foto_carro_2'] ['type']))
            {

               $type4 = 'image/png';



            }
             

//-----------------------------------------------------------------------------------









  $extensao = strtolower(substr($_FILES['foto_tec1'] ['name'], -4));
  $novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "fotos/";








$extensao2 = strtolower(substr($_FILES['foto_tec2'] ['name'], -4));
  $novo_nome2  = md5(mt_rand(1, 1000) . microtime()). $extensao2;
    $diretorio = "fotos/";




  

$extensao3 = strtolower(substr($_FILES['foto_carro_1'] ['name'], -4));
  $novo_nome3  = md5(mt_rand(1, 1000) . microtime()). $extensao3;
    $diretorio = "fotos/";




$extensao4 = strtolower(substr($_FILES['foto_carro_2'] ['name'], -4));
  $novo_nome4  = md5(mt_rand(1, 1000) . microtime()). $extensao4;
    $diretorio = "fotos/";














if (!in_array($type,$permite) || !in_array($type2,$permite ) || !in_array($type3,$permite ) )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
  echo "<script>saidasuccessfully()</script>";
}
else if  (!in_array($type4,$permite)  )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
  echo "<script>saidasuccessfully()</script>";
}

else if ( ($tamanho1 > 2000000) || ($tamanho2 > 2000000) || ($tamanho3 > 2000000) || ($tamanho4 > 2000000)  )
{

echo "TAMANHO MÁXIMO DA IMAGEM 2MB!";
  echo "<script>saidasuccessfully()</script>";
}
else
{
move_uploaded_file ($_FILES['foto_tec1'] ['tmp_name'], $diretorio.$novo_nome )  ;
move_uploaded_file ($_FILES['foto_tec2'] ['tmp_name'], $diretorio.$novo_nome2 ) ;
move_uploaded_file ($_FILES['foto_carro_1'] ['tmp_name'], $diretorio.$novo_nome3 )   ;
move_uploaded_file ($_FILES['foto_carro_2'] ['tmp_name'], $diretorio.$novo_nome4 ) ;

  

  


?>










<?php




    $id =$_POST['id'];
  $camisa_tam =$_POST['camisa_tam'];
$camisa_qtd =$_POST['camisa_qtd'];
$camisa_troca =$_POST['camisa_troca'];
$calca_tam =$_POST['calca_tam'];
$calca_qtd =$_POST['calca_qtd'];
$calca_troca =$_POST['calca_troca'];
$bota_tam =$_POST['bota_tam'];
$bota_qtd =$_POST['bota_qtd'];
$bota_troca =$_POST['bota_troca'];
$jaqueta_tam =$_POST['jaqueta_tam'];
$jaqueta_qtd =$_POST['jaqueta_qtd'];
$jaqueta_troca =$_POST['jaqueta_troca'];
$capa_tam =$_POST['capa_tam'];
$capa_qtd =$_POST['capa_qtd'];
$capa_troca =$_POST['capa_troca'];
$id_possui =$_POST['id_possui'];
$id_estado =$_POST['id_estado'];
$crlv =$_POST['crlv'];
$crlv_ano =$_POST['crlv_ano'];
$cnh =$_POST['cnh'];
$cnh_vencimento =$_POST['cnh_vencimento'];
$obs =$_POST['obs'];
 $cracha =$_POST['id_possui'];
 $cracha_estado =$_POST['id_estado'];

 $ventosa_possui =$_POST['ventosa_possui'];
$ventosa_qtd =$_POST['ventosa_qtd'];
 $ventosa_estado =$_POST['ventosa_estado'];
 $organizacao =$_POST['organizacao'];













$query = "update check_eqp SET data = NOW(),camisa_tam = '$camisa_tam',camisa_qtd = '$camisa_qtd',camisa_troca = '$camisa_troca',calca_tam = '$calca_tam',calca_qtd = '$calca_qtd',calca_troca = '$calca_troca',bota_tam = '$bota_tam',bota_qtd = '$bota_qtd',bota_troca = '$bota_troca',jaqueta_tam = '$jaqueta_tam',jaqueta_qtd = '$jaqueta_qtd',jaqueta_troca = '$jaqueta_troca',capa_tam = '$capa_tam',capa_qtd = '$capa_qtd',capa_troca = '$capa_troca',cracha = '$cracha',cracha_estado = '$cracha_estado',crlv = '$crlv',crlv_ano = '$crlv_ano',cnh = '$cnh',cnh_ano = '$cnh_vencimento',obs = '$obs',foto_tec1 = '$novo_nome',foto_tec2 = '$novo_nome2',carro_1 = '$novo_nome3',carro_2 = '$novo_nome4',check_list = 'OK',ventosa_possui = '$ventosa_possui',ventosa_qtd = '$ventosa_qtd',ventosa_estado = '$ventosa_estado',organzacao = '$organizacao' where id = '$id'  ";









$sql = mysql_query($query);



if($sql )
{
  
  if($_SESSION["acesso"] == 'GA'){
    echo ' <h2>ATUALIZADA  COM SUCESSO!!';

    echo "<script>saidasuccessfully()</script>";

  }else
  {

 echo ' <h2>ATUALIZADA  COM SUCESSO!!';

    echo "<script>saida_GE()</script>";



  }
  

  

  
}
else
{
  
echo ' <h2>ERRO NO CADASTRO!!';

  
}



}

























?>




















</body>


</html>