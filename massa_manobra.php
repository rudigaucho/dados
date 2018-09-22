

<?php include "conn.php"; 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GA' ) && ($_SESSION["acesso"] != 'GE' ) )
{
  header("Location: index.html");
  exit;
  
  
}

/*session_start();
if($_SESSION["senha"] != '1' )
{
  header("Location: index.php");
  exit;
  
  
}*/




?>



<!DOCTYPE html>



<html lang="pt-br">
<head>

<script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('input[type=radio]').change(function() {
        if (this.value == 'mt20' || this.value == 'pc' || this.value == 'pl' || this.value == 'ml' || this.value == 'mc') {
            $("#tb1").css("display","block");
            $("#tb2").css("display","block");
         
        }
        else if (this.value == 'mt10') {
            $("#tb1").css("display","block");
            $("#tb2").css("display","none");
         
        }
         else if (this.value == 'pp' || this.value == 'mp' ) {
            $("#tb1").css("display","none");
            $("#tb2").css("display","none");
         
        }
    });
});

</script>

<script type="text/javascript">
       
      $(document).ready(function(){
          
         $("select[name=localidade]").change(function(){
            $("select[name=estacao]").html('<option value="0">Carregando...</option>');
             
            $.post("localidades.php",
                  {localidade:$(this).val()},
                  function(valor){
                     $("select[name=estacao]").html(valor);
                  }
                  )
             
         })
      })
       
</script>







 <style>

 .none{
    display:none;
}



label.error {
    color: red;
    font-size: 10px;
    font-family: arial;      
}


     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
<link rel="icon" href="logo.png">






<!--   FIM FUNCAO                            -->







  <meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<link rel="stylesheet"  href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet"  href="/resources/demos/style.css">

<script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript" src="jquery-ui.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>

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
  <title>MASSA MANOBRA</title>
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
      
       
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="pesq_ger.php">Voltar</a></li>
        
       


 
      
 
    
      
      <li><a href="#"></a></li> 
      <li><a href="#"></a></li> 
    </ul>
  </div>
</nav>



<div class="container">


<div class="row content">


    <div class="col-sm-4 text-center col-md-offset-4">

    <span><strong>MASSA DE MANOBRA</strong></span><br><br><br><br>
  
  <form class="form" role="form" name="seachform" method="post" action="envia_manobra.php"   >

   

    <div class="form-group">

   




      <label for="email" >CCTO:</label>  
      <input type="text" class="form-control"  id="ccto" name="ccto"  required>
    </div>  
        <div class="form-group">
         <label for="email" >BA:</label>  
      <input type="text" class="form-control"  id="ba" name="ba"  required>
    </div>  
   
    <div class="form-group">
          <label for="email" >TECNICO:</label> 
       <select class="form-control" name="tec" id="tec">
     
        <option value="ANTONIO RODRIGUES DA SILVA">ANTONIO RODRIGUES DA SILVA</option>
        <option value="CARLOS ROBERTO DE SOUZA">CARLOS ROBERTO DE SOUZA</option>
        <option value="CARLOS HENRIQUE DE ANDRADE ROCHA">CARLOS HENRIQUE DE ANDRADE ROCHA</option>
        <option value="LEANDRO NASSAR">LEANDRO NASSAR</option>
        <option value="LEANDRO KOZERSKI ">LEANDRO KOZERSKI </option>
        <option value="FERNANDO COBALCHINI">FERNANDO COBALCHINI</option>
        <option value="EDERSON BORTOLAMEDI">EDERSON BORTOLAMEDI</option>
        <option value="JOSE BAUER CALLEGARI">JOSE BAUER CALLEGARI</option>
        <option value="JOSE MARIA MORAES">JOSE MARIA MORAES</option>
         <option value="JHONNY DOMINGUES VALERIO">JHONNY DOMINGUES VALERIO</option>
      
        
    </select>
    </div>
  
      




<fieldset style="border: 1px solid black; padding: 8px; "> 
<span><strong>MATERIAIS USADOS:</strong></span><br><br>
 


<div class="wrapper">
    <div class="toclone">
     
        <select name="mat1">

           
             <option value="DM991CE">DM991CE</option>
       
        </select>
        <input  type="text" name="qtd1" size="4" placeholder="QTD">
      
    </div>        
</div> <br>

<div class="wrapper">
    <div class="toclone">
     
        <select name="mat2">

            <option value="DM991SE">DM991SE</option>
          
       
        </select>
        <input  type="text" name="qtd2" size="4" placeholder="QTD">
       
    </div>        
</div>


   

</fieldset>  


   
 
   

 
   
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