<?php include "conn.php"; ?>
<?php 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) &&  ($_SESSION["acesso"] != 'GA' ))
{
  header("Location: index.html");
  exit;
  
  
}


?>

<!DOCTYPE html>



<html lang="pt-br">
<head>

  <script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('input[type=radio]').change(function() {
        if (this.value == 'SIM') {
           
            $("#tb2").css("display","block");
         
        }
        else if (this.value == 'NAO') {
           
            $("#tb2").css("display","none");
         
        }
        
    });
});

</script>

 <style>
     #jumbo{
  background: url(empresa.jpg) no-repeat;

}


.none{
    display:none;
}



label.error {
    color: red;
    font-size: 10px;
    font-family: arial;      
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
  <title>CADASTRO REPETIDA</title>
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
      <li class="active"><a href="pesq_ger.php">Voltar</a></li>
    
      
       <li class="active"><a href="modifica_senha.php">Trocar senha</a></li>
       <li class="active"><a href="logout.php">Logout</a></li>
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>

<span><strong>CADASTRO DE REPETIDAS.</strong></span><br><br><br><br>
<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >

    
  
  <form class="form" role="form" name="seachform" method="post" action="enviar.php " enctype="multipart/form-data" >

   

    <div class="form-group">

       <label for="email">Circuito:</label>
      <input type="text" class="form-control" id="ccto" name="ccto"    required>
    </div>
  


 <div class="form-group">

      <label for="email">Cliente:</label>  
      <input type="text" class="form-control" id="cliente" name="cliente"  required>
    </div>
     <div class="form-group">

      <label for="email">Justificativa:</label>  
     <textarea class="form-control" rows="5" id="just" name="just" maxlength="300" placeholder="Máximo 300 caracteres"></textarea>
    </div>

     <div class="form-group">

      <label for="email">POSSUI PREVENTIVA?: </label><br>






<label class="radio-inline"><input type="radio" name="optradio" value="SIM">SIM</label>
<label class="radio-inline"><input type="radio" name="optradio" value="NAO" >NÃO</label>


</div>


 <div class="form-group" id="tb2" name="tb2">
    <input type="file"  id="pdf" name="pdf"/> 

</div>

 
    
    
   
    
     

 
   <br><br>
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
  </form>
  

 
 </div>
 
</div>


</body>
</html>




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