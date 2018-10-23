<?php include "conn.php"; ?>


<?php 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) && ($_SESSION["acesso"] != 'ALMOX' ) )
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
      <li class="active"><a href="dash_almox.php">Voltar</a></li>
    
   <li class="active"><a href="Logout.php">Logout</a></li>
    </ul>

  </div>

</nav>
 

  <span style="margin-left: 15%;"><strong> PESQUISA DE MATERIAL</strong></span><br><br>

  <form class="form-inline" role="form"   method="POST" action="pesq_almox.php" >
    <div class="form-group">
   


     
    <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;} </style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div style="float:left;" class="bootstrap-iso">
  
  <div class="row">

   <label  for="data">
      Período
      </label>
    
     <div class="form-group ">
      
      <div class="col-sm-10" >
       <div class="input-group" >
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="DE" type="text" required/>
        <input class="form-control" id="date2" name="date2" placeholder="ATÉ" type="text" required/>
       </div>
      </div>
     </div>
    
  
   
  </div>

</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="jquery-1.11.3.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<link rel="stylesheet" href="bootstrap-datepicker3.css"/>
<script type="text/javascript" src="bootstrap-datepicker.min.js"></script>

<script>
 $(document).ready(function(){
  var date_input=$('input[name="date"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>
<script>
 $(document).ready(function(){
  var date_input=$('input[name="date2"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
   format: 'yyyy-mm-dd',
   container: container,
   todayHighlight: true,
   autoclose: true,
  })
 })
</script>
   


  <label for="sel1">LOCALIDADE:</label>
  <select class="form-control " id="local" name="local"  >

       <option value="_" selected>  TODAS</option>
    <option value="PR">  PR</option>
<option value="SC" > SC  </option>
</select>




  <label for="sel1">MATERIAL:</label>
  <select class="form-control " id="material" name="material"  >
<option value="_" selected>  TODAS</option>

    
        <?php
       
          
         $sql = "SELECT * FROM almox_eqp ORDER BY eqp ASC";
         $qr = mysql_query($sql) or die(mysql_error());
         while($ln = mysql_fetch_assoc($qr)){
            echo '<option value="'.$ln['eqp'].'">'.$ln['eqp'].'</option>';
         }
      ?>
</select>


  <label for="sel1">SITUAÇÃO:</label>
  <select class="form-control " id="situacao" name="situacao"  >

<option value="_" selected>  TODAS</option>
    <option value="EM CURTO">EM CURTO</option>
    <option value="NAO SINCRONIZA">NÃO SINCRONIZA</option>
    <option value="NAO APRESENTOU DEFEITO">NÃO APRESENTOU DEFEITO</option>
    <option value="TAXA DE ERRO">TAXA DE ERRO</option>
<option value="SEM CONSERTO">SEM CONSERTO</option>
    
</select>


  <br><br><br><br>
    
    <button type="submit"  name="submit" id="submit" class="btn btn-primary" style="float:right;" >Busca</button> 

     </div>
  </form>


  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
       
           <th>LOCALIDADE</th>
           <th>DATA</th>
        <th>MATERIAL</th>
     
      
  
        <th>SERIE</th>
        <th>SITUAÇÃO</th>
              
        <th>OBS</th>
        
        
 
      </tr>
    </thead>
  
  <?php
  if (isset($_POST ['submit']) )
{


$data = $_POST['date'];
$data2 = $_POST['date2'];
$local = $_POST['local'];
$material = $_POST['material'];
$situacao = $_POST['situacao'];
$sql = mysql_query ("SELECT * FROM base_eqp  where data BETWEEN   '$data' and '$data2' AND local like '%$local%' and material like '%$material%' and situacao LIKE '%$situacao%' ;" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );
$sql3 =  mysql_query ("select  count(*) as conta FROM base_eqp  where data BETWEEN   '$data' and '$data2' AND local like '%$local%' and material like '%$material%' and situacao LIKE '%$situacao%' ; " );



$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
      

<td> <?php echo $dado ["local"];  ?></td>
<td> <?php echo $dado ["data"];  ?></td>

<td> <?php echo $dado ["material"];  ?></td>
<td> <?php echo $dado ["serie"];  ?></td>
<td> <?php echo $dado ["situacao"];  ?></td>




<td><a  data-toggle="modal" href="#myModal<?php echo $dado ['protocolo'];  ?>" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"> </a></td>

  




<div class="modal fade" id="myModal<?php echo $dado ['protocolo'];  ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">OBSERVAÇÕES<h4>
          <p><strong>CAUSA:<br><br></strong> <?php echo $dado ["causa"];  ?></p>
          <p><strong>SERVIÇO:<br><br></strong> <?php echo $dado ["servico"];  ?></p>
          <p><strong>CUSTO TERCEIRA:<br><br></strong> <?php echo $dado ["custo_terceira"];  ?></p>
          <p><strong>CUSTO SEREDE:<br><br></strong> <?php echo $dado ["custo_serede"];  ?></p>
          <p><strong>SERIE:<br><br></strong> <?php echo $dado ["serie_8"];  ?></p>

          
            

        </div>
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



        </div>
      </div>
      
    </div>
  </div>





  
</div>



  <?php } 
while ($dado = mysql_fetch_assoc($sql3))
  {
     $conta = $dado ["conta"]; 
  }
   } }   

    ?>
  <span class="label label-primary" style="float:right; margin-right:2%;"><?php echo $conta;?></span>


    
      
      
    </div>
  </div>
  
</div>
    </tbody>
  </table>
</div>



<?php


$obs =$_POST['obs'];
$protocolo =$_POST['protocolo'];
$data =$_POST['date'];







if (isset($_POST ['submit2']) )
{

if ($data == '0000-00-00')
{

  $query = "update agenda SET  obs = '$obs' where protocolo = '$protocolo'  ";
}
else
{



$query = "update agenda SET  obs = '$obs',data = '$data' where protocolo = '$protocolo'  ";

}








$sql = mysql_query($query);



if($sql  )
{
  
  
    echo ' <h2>ATUALIZADA  COM SUCESSO!!';

  echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=pesq_agenda.php">';
  

  

  
}
else
{
  
echo ' <h2>ERRO NO CADASTRO!!';

  
}


}



 

?>



</body>
</html>

