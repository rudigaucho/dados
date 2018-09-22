<?php include "conn.php"; ?>


<?php 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) && ($_SESSION["acesso"] != 'GA' ) )
{
  header("Location: index.html");
  exit;
  
  
}


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="logo.png">






<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='pesq_almox.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title>PESQUEISA DE MATERIAL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>


    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
    </div>
    <ul class="nav navbar-nav">
      
      
      <li><a href="#"></a></li> 
      <li class="active"><a href="almox.php">Voltar</a></li>
    
   <li class="active"><a href="Logout.php">Logout</a></li>
    </ul>

  </div>

</nav>
 

  <span style="margin-left: 15%;"><strong> PESQUISA DE MATERIAL</strong></span><br><br>

  <form class="form-inline" role="form"   method="POST" action="pesq_serie.php" >
    <div class="form-group">
   


     
      <div class="form-group">
      <label for="email">Nº DE SERIE</label>
      <input type="text" class="form-control" id="serie" name="serie" placeholder="Pesquisa" >
    </div>
<button type="submit"  name="submit" id="submit" class="btn btn-primary" style="float:right;" >Busca</button> 

  </form> 



  <?php
  if (isset($_POST ['submit']) )
{


$serie = $_POST['serie'];


$sql = mysql_query ("SELECT * FROM base_eqp  where serie = '$serie';" );



$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
 $dado = mysql_fetch_assoc($sql)


  
?>
   
      

 <?php  $data = $dado ["data"];  ?> 
  <?php  $material = $dado ["material"];  ?> 

  <?php  $serie_8 = $dado ["serie_8"];  ?> 
  <?php  $situacao = $dado ["situacao"];  ?> 
  <?php  $causa = $dado ["causa"];  ?>
   <?php  $servico = $dado ["servico"];  ?>
   <?php  $custo_terceira = $dado ["custo_terceira"];  ?>
    <?php  $custo_serede = $dado ["custo_serede"];  ?>


<?php
echo "<ul class='list-group' ><li class='list-group-item active'  >RELATÓRIO</li><br> <strong>EQUIPAMENTO: </strong> $material <br> <strong>DATA ÚLTIMO REPARO:</strong> $data <br><strong>SITUAÇÃO: </strong>$situacao <br> <strong>CAUSA:</strong> $causa <br> <strong>SERVIÇO:</strong> $servico <br>  </ul>";


?>
  








  
</div>



  <?php 

   } }   

    ?>



    
      
      
    </div>
  </div>
  
</div>
    
</div>



</body>
</html>

