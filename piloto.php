



<!DOCTYPE html>



<html lang="pt-br">
<head>

  <?php session_start(); ?>

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
  <title>CADASTRO DE FISCALIZAÇÕES</title>
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


<?php 

 include "conn.php";

/* session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) &&  ($_SESSION["acesso"] != 'GA' ))
{
  header("Location: index.html");
  exit;
  
  
} */



?>

<div class="jumbotron text-center " id="jumbo">
  <br><br><br><br><br><br><br>
</div>


  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
       
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="pesq_ger.php">Voltar</a></li>
        
       


 
      
 
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>

<span><strong>CADASTRO FISCALIZAÇÕES</strong></span><br><br><br><br>

<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >

   

  <form class="form" role="form" name="seachform" method="post" action="enviar_piloto.php " enctype="multipart/form-data" >

   

  <div class="form-group">

      <label for="email">Cliente:</label>  
      <input type="text" class="form-control" id="cliente" name="cliente"  required>
    </div>

    <div class="form-group">

      <label for="email">Velocidade:</label>  
      <input type="text" class="form-control" id="vel" name="vel"  required>
    </div>
    <div class="form-group">

      <label for="email">Ccto:</label>  
      <input type="text" class="form-control"  name="ccto"  required>
    </div>
    <div class="form-group">

      <label for="email">Endereço:</label>  
      <input type="text" class="form-control"  name="endereco"  required>
    </div>

     <div class="form-group">

      <label for="email">Contato:</label>  
      <input type="text" class="form-control"  name="contato"  required>
    </div>
    <div class="form-group">

     <div class="form-group">
       <label for="email" >EQUIPE:</label> 
       <select  class="form-control" name="tec">
       <option value="0">Escolha um técnico</option>
        <?php
           $escolha = $_SESSION['nome'];
          
         $sql = "SELECT * FROM check_eqp where gestor = '$escolha' ORDER BY nome ASC";
         $qr = mysql_query($sql) or die(mysql_error());
         while($ln = mysql_fetch_assoc($qr)){
            echo '<option value="'.$ln['nome'].'">'.$ln['nome'].'</option>';
         }
      ?>
        
    </select>
    </div>
   <div class="form-group">
    <label for="email">Tipo:</label>  
     <select class="form-control " id="tipo" name="tipo">
<option value="OS">  OS </option>
 <option value="BD">  BD </option>
<option value="PREV" checked > PREV </option>

</select>
    </div>

     <div class="form-group">
    <label for="email">Produto:</label>  
     <select class="form-control " id="prod" name="prod"  >
<option value="IP">  IP </option>
 <option value="VETOR">  VETOR </option>
<option value="DDR" checked > DDR </option>
<option value="EILD" checked > EILD </option>
<option value="SLDD" checked > SLDD. </option>

</select>
    </div>
    <div class="form-group">
    <label for="email">OBS: </label>
  <textarea class="form-control" rows="5" id="obs" name="obs" maxlength="600"></textarea>
    </div>


    <table class="table table-bordered">
    <h3>1. Infraestrutura Cliente</h3>
    <thead>
      <tr>
        <th>ITENS VERIFICADO</th>
        <th>CONDIÇÕES</th>
      
      
       
      


      </tr>
    </thead>
    <tbody>
      <tr>
      

        <td>1:1 Técnico esteve no cliente</td>
        <td>  <select class="form-control " id="tenc" name="tenc"  >
<option value="SIM">  SIM <option>
 <option value="NÃO">  NÃO </option>
<option value="NA" checked > NA </option>

</select></td>

       
       
        
      </tr>
<tr>
      <td>1:3 Qualidade do serviço executado no cliente</td>
<td>  <select class="form-control " id="quali" name="quali"  >
<option value="SIM">  SIM <option>
 <option value="NÃO">  NÃO </option>
<option value="NA" checked > NA </option>

</select></td>
</tr>
    </tr>
<tr>
      <td>1:2 Cordialidade do técnico com o cliente.</td>
<td>  <select class="form-control " id="cordial" name="cordial"  >
<option value="SIM">  SIM <option>
 <option value="NÃO">  NÃO </option>
<option value="NA" checked > NA </option>

</select></td>
</tr>




    </tbody>
    </table>


     <table class="table table-bordered">
    <h3>2. Infraestrutura OI</h3>
    <thead>
      <tr>
        <th>ITENS VERIFICADO</th>
        <th>CONDIÇÕES</th>
      
      
       
      


      </tr>
    </thead>
    <tbody>
      <tr>
      

        <td>2:1 Técnico esteve na Estação</td>
        <td>  <select class="form-control " id="estacao" name="estacao"  >
<option value="SIM">  SIM <option>
 <option value="NÃO">  NÃO </option>
<option value="NA" checked > NA </option>

</select></td>

       
       
        
      </tr>
<tr>
      <td>2:2 Técnico esteve no Armário</td>
<td>  <select class="form-control " id="ard" name="ard"  >
<option value="SIM">  SIM <option>
 <option value="NÃO">  NÃO </option>
<option value="NA" checked > NA </option>

</select></td>
</tr>
    </tr>
<tr>
      <td>2:3 Qualidade do serviço executado no Armário</td>
<td>  <select class="form-control " id="quali_ard" name="quali_ard"  >
<option value="SIM">  SIM <option>
 <option value="NÃO">  NÃO </option>
<option value="NA" checked > NA </option>

</select></td>
</tr>
<tr>
      <td>2:4 Seguiu o padrão pré-definido </td>
<td>  <select class="form-control " id="padrao" name="padrao"  >
<option value="SIM">  SIM <option>
 <option value="NÃO">  NÃO </option>
<option value="NA" checked > NA </option>

</select></td>
</tr>




    </tbody>
    </table>




    <fieldset style="border: 1px solid black; padding: 8px; "> 
<span><strong>FOTOS:</strong></span><br><br>
 
<!-- name="list[qtd][]" -->

<div class="wrapper">
    <div class="toclone">
  
        <input  type="file" name="fotos[]" required>
          <input  type="text" name="list[]" placeholder="legenda" required>
        <button type="button" class="add">+</button>
        <button type="button" class="remove">-</button>

    </div>        
</div>

<script type="text/javascript">
function adicionar(){
  var ElementoClonado = $(this.parentNode).clone(); //clona o elemento
  
  $('.wrapper').append(ElementoClonado);
  $('.add').on("click", adicionar);
  $('.remove').on("click", remover);
  $(this).unbind("click");
}
function remover(){
  $(this.parentNode).remove();
}
$('.add').on("click", adicionar);
$('.remove').on("click", remover);

</script>
   

</fieldset>  


  
 
   

 
   
     <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="submit" required > <strong>Enviar</strong> </button><br><br><br><br>



     

        
   

  

  
    
   
     

    
    
  
  
    
    


    
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