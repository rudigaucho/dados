



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
  <title>CADASTRO </title>
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

 session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) &&  ($_SESSION["acesso"] != 'GA' ))
{
  header("Location: index.html");
  exit;
  
  
}


$id =$_GET['id'];

$sql = mysql_query ("select * from check_eqp where  id = '$id' " );







  while ($dado = mysql_fetch_assoc($sql )){

  $nome = $dado ["nome"]; 



  }

?>

<div class="jumbotron text-center " id="jumbo">
  <br><br><br><br><br><br><br>
</div>


  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
       
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="epi.php">Voltar</a></li>
        
       


 
      
 
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>

<span><strong>CADASTRO UNIFORME</strong></span><br><br><br><br>

<div class="container">


<div class="row content">


    <div class="col-sm-10 "  >

    NOME: <strong><?php echo $nome; ?></strong>
  <br><br><br>
  <form class="form" role="form" name="seachform" method="post" action="enviar_eqp.php " enctype="multipart/form-data" >

   

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>UNIFORME</th>
        <th>TAMANHO</th>
        <th>QUANTIDADE</th>
        <th>TROCA</th>
      
       
      


      </tr>
    </thead>
    <tbody>
      <tr>
      

        <td>CAMISA</td>
        <td>  <select class="form-control " id="camisa_tam" name="camisa_tam"  >
<option value="0">  0 </option>
 <option value="1">  1 </option>
<option value="2" checked > 2  </option>
<option value="3">  3 </option>
<option value="4" > 4  </option>
<option value="5" > 5  </option>
<option value="6" > 6  </option>
<option value="7" > 7  </option>
</select></td>
        <td> <select class="form-control " id="camisa_qtd" name="camisa_qtd"  >
  <option value="0">  0 </option>
 <option value="1">  1 </option>
<option value="2" checked > 2  </option>
<option value="3">  3 </option>
<option value="4" > 4  </option>
<option value="5" > 5  </option>

</select></td>
        <td> <select class="form-control " id="camisa_troca" name="camisa_troca"  >
<option value="SIM">  SIM </option>
 <option value="NAO" checked>  NAO </option>

</select></td>
        
        
        
      </tr>
      <tr>
     
         <td>CALÇA</td>
        <td><input type="text" class="form-control" name="calca_tam" id="calca_tam" size="6">   </td> 
        <td> <select class="form-control " id="calca_qtd" name="calca_qtd"  >
  <option value="0">  0 </option>
 <option value="1">  1 </option>
<option value="2" checked > 2  </option>
<option value="3">  3 </option>
<option value="4" > 4  </option>
<option value="5" > 5  </option>

</select></td>
        <td>  <select class="form-control " id="calca_troca" name="calca_troca"  >
<option value="SIM">  SIM </option>
 <option value="NAO" checked>  NAO </option>

</select></td>
        
    
      </tr>
      <tr>
        
        <td>BOTA</td>
        <td><input type="text" class="form-control" name="bota_tam" id="bota_tam" size="6">  </td>
        <td> <select class="form-control " id="bota_qtd" name="bota_qtd"  >
  <option value="0">  0 </option>
 <option value="1" checked >  1 </option>
<option value="2" > 2  </option>
<option value="3">  3 </option>
<option value="4" > 4  </option>
<option value="5" > 5  </option>

</select></td>
        <td>  <select class="form-control " id="bota_troca" name="bota_troca"  >
<option value="SIM">  SIM </option>
 <option value="NAO" checked >  NAO </option>

</select></td>
        
       
     
      </tr>
      <tr>
         
         <td>JAQUETA</td>
       <td><input type="text" class="form-control" name="jaqueta_tam" id="jaqueta_tam" size="6">   </td> 
        <td> <select class="form-control " id="jaqueta_qtd" name="jaqueta_qtd"  >
  <option value="0">  0 </option>
 <option value="1">  1 </option>
<option value="2" checked > 2  </option>
<option value="3">  3 </option>
<option value="4" > 4  </option>
<option value="5" > 5  </option>

</select></td>
        <td>  <select class="form-control " id="jaqueta_troca" name="jaqueta_troca"  >
<option value="SIM">  SIM </option>
 <option value="NAO" checked>  NAO </option>

</select></td>
        
       
     
      </tr>
      <tr>
    
       <td>CAPA DE CHUVA</td>
        <td><input type="text" class="form-control" name="capa_tam" id="capa_tam" size="6">   </td> 
        <td> <select class="form-control " id="capa_qtd" name="capa_qtd"  >
  <option value="0" checked >  0 </option>
 <option value="1">  1 </option>
<option value="2" > 2  </option>
<option value="3">  3 </option>
<option value="4" > 4  </option>
<option value="5" > 5  </option>

</select></td>
        <td>  <select class="form-control " id="capa_troca" name="capa_troca"  >
<option value="SIM">  SIM </option>
 <option value="NAO" checked >  NAO </option>

</select></td>
        
      </tr>
    
    </tbody>
    </table>


  <br><h4>IDENTIFICAÇÃO:</h4><br>

    <table class="table table-bordered">
    <thead>
      <tr>
        <th>TIPO</th>
        <th>POSSUI</th>
        <th>ESTADO</th>
     
      
       
      


      </tr>
    </thead>
    <tbody>
      <tr>
       
        <td>CRACHA</td>
        <td>  <select class="form-control " id="id_possui" name="id_possui"  >
<option value="SIM" checked >  SIM </option>
 <option value="NAO">  NAO </option>

</select></td>
        <td> <select class="form-control " id="id_estado" name="id_estado"  >
<option value="NAO POSSUI">  NAO POSSUI </option>
 <option value="BOM" checked >  BOM </option>
 <option value="RUIM">  RUIM </option>

</select>
      
    </tbody>
    </table>


    <br><h4>DOCUMENTAÇÃO:</h4><br>
   

   <table class="table table-bordered">
    <thead>
      <tr>
        <th>CRLV</th>
        <th>ANO</th>
    
     
      
       
      


      </tr>
    </thead>
    <tbody>
      <tr>
       
        
        <td>  <select class="form-control " id="crlv" name="crlv"  >
<option value="SIM" checked >  SIM </option>
 <option value="NAO">  NAO </option>

</select></td>
        <td>  <input type="text" class="form-control" name="crlv_ano" id="crlv_ano" > </td>
      
    </tbody>
    </table>



       <table class="table table-bordered">
    <thead>
      <tr>
        <th>CNH</th>
        <th>VENCIMENTO</th>
    
     
      
       
      


      </tr>
    </thead>
    <tbody>
      <tr>
       
        
        <td>  <select class="form-control " id="cnh" name="cnh"  >
<option value="SIM" checked >  SIM </option>
 <option value="NAO">  NAO </option>

</select></td>
        <td>  <input type="text" class="form-control" name="cnh_vencimento" id="cnh_vencimento" > </td>
      
    </tbody>
    </table><br>

    <br><h4>CARRO:</h4><br>
   

   <table class="table table-bordered">
    <thead>
      <tr>
        <th>ITEM</th>
        <th>POSSUI</th>
         <th>QUANTIDADE</th>
        <th>ESTADO</th>
    
     
      
       
      


      </tr>
    </thead>
    <tbody>
      <tr>
       
        
        <td>  VENTOSA </td>
        <td>  <select class="form-control " id="ventosa_possui" name="ventosa_possui"  >
<option value="SIM" checked>  SIM </option>
 <option value="NAO">  NAO </option>

</select> </td>
 <td> <select class="form-control " id="ventosa_qtd" name="ventosa_qtd"  >
  <option value="0">  0 </option>
 <option value="1" checked>  1 </option>
<option value="2" > 2  </option>
<option value="3">  3 </option>
<option value="4" > 4  </option>
<option value="5" > 5  </option>

</select></td>

<td> <select class="form-control " id="ventosa_estado" name="ventosa_estado"  >
<option value="NAO POSSUI">  NAO POSSUI </option>
 <option value="BOM" checked >  BOM </option>
 <option value="RUIM">  RUIM </option>

</select></td>
</tr>

 <tr>
       
        
        <td>  ORGANIZAÇÃO </td>
        <td>  <select class="form-control " id="organizacao" name="organizacao"  >
<option value="SIM" checked >  SIM </option>
 <option value="NAO">  NAO </option>

</select> </td>
 <td> </td>

<td> </td>
</tr>
      
    </tbody>
    </table>

     <div class="form-group">
    <label for="email">OBS: </label>
  <textarea class="form-control" rows="5" id="obs" name="obs" maxlength="300" placeholder="Máximo 300 caracteres"></textarea>
    </div>
 <label for="email" style="font-size:11px; color:red"> MÁXIMO 2 MBPS POR FOTO (jpeg,jpg,png) </label>  <br>

    <label for="email">FOTO TÉCNICO : </label>
    <input type="file"  id="foto_tec1" name="foto_tec1"/> 
  
    <input type="file"  id="foto_tec2" name="foto_tec2"/> <br>

     <label for="email">FOTO CARRO : </label>
    <input type="file"  id="foto_carro_1" name="foto_carro_1"/> 

    <input type="file"  id="foto_carro_2" name="foto_carro_2"/> 




 <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>" >
 
   

 
   
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