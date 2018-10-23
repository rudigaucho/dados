<?php include "conn.php"; ?>

<?php 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) &&  ($_SESSION["acesso"] != 'ALMOX' ))
{
  header("Location: index.html");
  exit;
  
  
}


?>

<!DOCTYPE html>



<html lang="pt-br">
<head>

 <style>
     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
<link rel="icon" href="logo.png">






<!--   FIM FUNCAO                            -->







  <meta charset="utf-8">

<link rel="stylesheet"  href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet"  href="/resources/demos/style.css">



<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>
<script type="text/javascript" src="validacao.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>









<link rel="icon" href="img/logo_oi.ico">




<style>
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
       text-align:center;
    }
	.container-fluid
	{
	background-color: orange;
	}
  #realcar
  {
  background-color: grey;
  }
   #realcar2
  {
  background-color: #D3D3D3;
  }

  #loading
{
  
width:70px;
height:70px;  
  
  
  
  
}



</style>
  <title>CADASTRO DE EQUIPAMENTO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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

<div class="jumbotron text-center " id="jumbo">
  <br><br><br><br><br><br><br>
</div>


  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
        <a class="navbar-brand" href="#" style="color:black;"> <?php echo $_SESSION["nome"]?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="dash_almox.php">Voltar</a></li>
    
      
       <li class="active"><a href="modifica_senha.php">Trocar senha</a></li>
       <li class="active"><a href="logout.php">Logout</a></li>
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>

<span><strong>CADASTRO DE EQUIPAMENTO</strong></span><br><br><br><br>
<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >

    
  
  <form class="form" role="form" name="seachform" method="post" action="enviar_almox.php " >

   

       <div class="form-group">
  <label for="sel1">LOCALIDADE:</label>
  <select class="form-control " id="local" name="local"  >


    <option value="PR">  PR</option>
<option value="SC" > SC  </option>
</select>
</div>
    

     <div class="form-group">
  <label for="sel1">MATERIAL:</label>
  <select class="form-control " id="material" name="material"  >


    
        <?php
       
          
         $sql = "SELECT * FROM almox_eqp ORDER BY eqp ASC";
         $qr = mysql_query($sql) or die(mysql_error());
         while($ln = mysql_fetch_assoc($qr)){
            echo '<option value="'.$ln['eqp'].'">'.$ln['eqp'].'</option>';
         }
      ?>
</select>
</div>


       <div class="form-group">
      <label for="email">Nº SERIE:</label>  
      <input type="text" class="form-control" id="serie" name="serie"  required>
    </div>

        <div class="form-group">
  <label for="sel1">SITUAÇÃO:</label>
  <select class="form-control " id="situacao" name="situacao"  >


    <option value="EM CURTO">EM CURTO</option>
    <option value="NAO SINCRONIZA">NÃO SINCRONIZA</option>
    <option value="NAO APRESENTOU DEFEITO">NÃO APRESENTOU DEFEITO</option>
    <option value="TAXA DE ERRO">TAXA DE ERRO</option>
    <option value="NAO LIGA">NÃO LIGA</option>
<option value="SEM CONSERTO">SEM CONSERTO</option>
    
</select>
</div>
     

     <div class="form-group">
      <label for="email">CAUSA DO DEFEITO:</label>  
      <textarea class="form-control" rows="5" id="causa" name="causa"  maxlength="400"></textarea>
    </div>

     <div class="form-group">
      <label for="email">SERVIÇO EFETUADO:</label>  
      <textarea class="form-control" rows="5" id="servico" name="servico"  maxlength="400"></textarea>
    </div>
    <div class="form-group">
      <label for="email">CUSTO TERCERIZADA :</label>  
      <input type="text" class="form-control" id="custo_ter" name="custo_ter"  required>
    </div>
     <div class="form-group">
      <label for="email">CUSTO SEREDE:</label>  
      <input type="text" class="form-control" id="custo_ser" name="custo_ser"  required>
    </div>
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>


</body>
</html>


<script>
  
$(function() {

/*var  availableTags = [

"ajskkdp",
"iiisosoa",
"ooiismsm",
"aassdddd",
"ooedmmmd",
"iisoosoos"
];

$( "#cabo" ).autocomplete({
  source: availableTags

  });
*/

$.getJSON("listar_cabos.php", function(data){
//console.log(data);
var retorno = [];


$(data).each( function (key, value){

 // console.log(value.cabo);

 retorno.push(value.cabo);


});
$("#cabo").autocomplete({
  source: retorno ,

 

  });




  });
});






</script>

<!--
<script>
  
$(function() {



$.getJSON("listar_cabos.php", function(data2){
//console.log(data);
var retorno2 = [];


$(data2).each( function (key2, value2){

 // console.log(value.cabo);

 retorno2.push(value2.trecho);


});
$("#localidade").autocomplete({
  source: retorno2

  });




  });
});






</script>
-->