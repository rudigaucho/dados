



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_melhorias.php'",3000);
	
	
}


</script> 

<?php

session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) &&  ($_SESSION["acesso"] != 'GA' ))
{
  header("Location: index.html");
  exit;
  
  
}

include "conn.php";
//session_start();
//if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'gra' ))
//{
 // header("Location: index.html");
  //exit;
  
  
//}

//if(isset($_FILES['arquivo'],$_FILES['arquivo2'])) {
	$permite = array('image/jpg', 'image/jpeg' , 'image/png');
    $type =$_FILES['foto_ant1'] ['type'];
    $type2 =$_FILES['foto_ant2'] ['type'];
     $type3 =$_FILES['foto_ant3'] ['type'];

      $type4 =$_FILES['foto_dep1'] ['type'];
       $type5 =$_FILES['foto_dep2'] ['type'];
        $type6 =$_FILES['foto_dep3'] ['type'];
         


//  ------------------------------------------ VERIFICACAO TAMANHO FOTOS ------------------------------------------------------- 


            $tamanho1 =$_FILES['foto_ant1']['size'];
            $tamanho2 =$_FILES['foto_ant2']['size'];
            $tamanho3 =$_FILES['foto_ant3']['size'];
         
            $tamanho6 =$_FILES['foto_dep1']['size'];
            $tamanho7 =$_FILES['foto_dep2']['size'];
            $tamanho8 =$_FILES['foto_dep3']['size'];
           



// ------------------------------------------------------------- verificar vazios---

            if (empty($type))
            {

               $type = 'image/png';



            }

             if (empty($type2))
            {

               $type2 = 'image/png';



            }
             if(empty($_FILES['ftaarquivo3'] ['type']))
            {

               $type3 = 'image/png';



            }
            if (empty($_FILES['ftaarquivo4'] ['type']))
            {

               $type4 = 'image/png';



            }
             if(empty($_FILES['ftaarquivo5'] ['type']))
            {

               $type5 = 'image/png';



            }
           if(empty($_FILES['ftdarquivo1'] ['type']))
            {

               $type6 = 'image/png';



            }
           

//-----------------------------------------------------------------------------------









	$extensao = strtolower(substr($_FILES['foto_ant1'] ['name'], -4));
	$novo_nome  = md5(mt_rand(1, 1000) . microtime()) . $extensao;
    $diretorio = "fotos/";








$extensao2 = strtolower(substr($_FILES['foto_ant2'] ['name'], -4));
	$novo_nome2  = md5(mt_rand(1, 1000) . microtime()). $extensao2;
    $diretorio = "fotos/";




	

$extensao3 = strtolower(substr($_FILES['foto_ant3'] ['name'], -4));
	$novo_nome3  = md5(mt_rand(1, 1000) . microtime()). $extensao3;
    $diretorio = "fotos/";




$extensao4 = strtolower(substr($_FILES['foto_dep1'] ['name'], -4));
	$novo_nome4  = md5(mt_rand(1, 1000) . microtime()). $extensao4;
    $diretorio = "fotos/";






$extensao5 = strtolower(substr($_FILES['foto_dep2'] ['name'], -4));
	$novo_nome5  = md5(mt_rand(1, 1000) . microtime()). $extensao5;
    $diretorio = "fotos/";






$extensao6 = strtolower(substr($_FILES['foto_dep3'] ['name'], -4));
	$novo_nome6  = md5(mt_rand(1, 1000) . microtime()). $extensao6;
    $diretorio = "fotos/";














if (!in_array($type,$permite) || !in_array($type2,$permite ) || !in_array($type3,$permite ) )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
	echo "<script>saidasuccessfully()</script>";
}
else if  (!in_array($type4,$permite) || !in_array($type5,$permite )  || !in_array($type6,$permite ) )
{

echo "EXTENSÃO DA IMAGEM INVALIDA, SUA IMAGEM DEVE SER NO FORMATO JPEG,JPG OU PNG!";
	echo "<script>saidasuccessfully()</script>";
}

else if ( ($tamanho1 > 2000000) || ($tamanho2 > 2000000) || ($tamanho3 > 2000000) || ($tamanho6 > 2000000) || ($tamanho7 > 2000000) || ($tamanho8 > 2000000)  )
{

echo "TAMANHO MÁXIMO DA IMAGEM 2MB!";
  echo "<script>saidasuccessfully()</script>";
}
else
{
move_uploaded_file ($_FILES['foto_ant1'] ['tmp_name'], $diretorio.$novo_nome )	;
move_uploaded_file ($_FILES['foto_ant2'] ['tmp_name'], $diretorio.$novo_nome2 )	;
move_uploaded_file ($_FILES['foto_ant3'] ['tmp_name'], $diretorio.$novo_nome3	)   ;
move_uploaded_file ($_FILES['foto_dep1'] ['tmp_name'], $diretorio.$novo_nome4 )	;
move_uploaded_file ($_FILES['foto_dep2'] ['tmp_name'], $diretorio.$novo_nome5 )	;
move_uploaded_file ($_FILES['foto_dep3'] ['tmp_name'], $diretorio.$novo_nome6 )	;







	

	
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='cad_melhorias.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title></title>


</head>



<body>








<?php

$estacao =$_POST['estacao'];



$prob =$_POST['prob'];
$solu =$_POST['solu'];
$data =$_POST['date'];






  



 



$query = "insert into centrais (estacao,ga,data,prob,solucao,foto_antes1,foto_antes2,foto_antes3,foto_depois1,foto_depois2,foto_depois3)";

$query.= "values ('$estacao','".$_SESSION['nome']."','$data','$prob','$solu','$novo_nome','$novo_nome2','$novo_nome3','$novo_nome4','$novo_nome5','$novo_nome6')";




$sql = mysql_query($query);


if($sql )
{
  
  
    echo '  <h2>CADASTRADA COM SUCESSO!<br>';
  
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