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
  setTimeout("window.location='adm.php'",3000);
  
  
}



</script>

  <link rel="icon" href="img/key.png">
  <title>AGENDAMENTO</title>
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
      <li class="active"><a href="pesq_ger.php">Voltar</a></li>
    
   <li class="active"><a href="Logout.php">Logout</a></li>
    </ul>

  </div>

</nav>
 

  <span style="margin-left: 15%;"><strong> CONSULTA DE PENDENCIAS</strong></span><br><br>

  <form class="form-inline" role="form"   method="POST" action="pesq_pendencia.php" style="margin-left:10%;">
   
     

        <div class="form-group">
    <label for="email">STATUS:</label>  
     <select class="form-control " id="status" name="status">
<option value="PENDENTE">  PENDENTE </option>
 <option value="ENCERRADA">  ENCERRADA </option>


</select>
    </div>

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

 
    
     <div class="form-group ">
      
      <div class="col-sm-10">
       <div class="input-group">
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

   <br>

    </div>

    
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>


  <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr >
       
      <th>TÉCNICO</th>
          
          <th>DATA</th>
        <th>STATUS</th>
            <th>OBS</th>

             

             <th>ATUALIZAR</th>
      
 



      </tr>
    </thead>
  
  <?php
  if (isset($_POST ['submit']) )
{



$status = $_POST['status'];
$data = $_POST['date'];
$data2 = $_POST['date2'];



$sql = mysql_query ("select * from pendencia where status = '$status' and data BETWEEN   '$data' and '$data2'  order by tec asc" );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );

  


$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
    <tbody>
      <tr class="success">
      
 <td> <?php echo $dado ["tec"];  ?></td>  
 <td> <?php echo $dado ["data"];  ?></td>   
<?php if ($dado ["status"] == 'ENCERRADA') {?> <td><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></td> <?php } else { ?>
<td> <a  data-toggle="modal" href="#myModal_status<?php echo $dado ['protocolo'];  ?>" > <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> </a></td> <?php }?>


<td><a  data-toggle="modal" href="#myModal2<?php echo $dado ['protocolo'];  ?>" ><span class="glyphicon glyphicon-eye-open" aria-hidden="true"> </a></td>











<td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado ['protocolo'];  ?>" >ATUALIZAR</button> </td>


<div class="modal fade" id="myModal<?php echo $dado ['protocolo'];  ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">ATUALIZAÇÃO<h4>
         <form role="form" id="form" name="seachform" method="post" action="pesq_pendencia.php " >
  <div class="form-group" >
       <input type="hidden" class="form-control" name="protocolo" id="protocolo" value="<?php echo $dado["protocolo"] ?>" readonly required>
    <div class="form-group">
    <label for="email">OBS: </label>
  <textarea class="form-control" rows="5" id="obs" name="obs" placeholder="COLOCAR MASCARA PADRÃO" maxlength="800"><?php echo $dado["obs"] ?></textarea>
    </div>

    
  </div>

</div>


 
    
     
 <button type="submit"  name="submit2" id="submit2" class="btn btn-default"  > Atualizar</button> 
 <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
  
</form>
        </div>
      
      </div>
      
    </div>
  </div>

  



<div class="modal fade" id="myModal2<?php echo $dado ['protocolo'];  ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">OBSERVAÇÕES<h4>
          <p><strong>OBS:<br><br></strong> <?php echo $dado ["obs"];  ?></p>
      
          
            

        </div>
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



        </div>
      </div>
      
    </div>
  </div>


  <div class="modal fade" id="myModal_status<?php echo $dado ['protocolo'];  ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">ENCERRAMENTO<h4>
          <p><strong>DESEJA ENCERRAR A ATIVIDADE?</p>
      
          
            

        </div>
        <div class="modal-footer">
<a  class="btn btn-danger" href="encerra_pendencia.php?enc=<?php echo $dado ['protocolo'];?>" role="button" >SIM</a>
<button type="button" class="btn btn-success" data-dismiss="modal">NÃO</button>

          



        </div>
      </div>
      
    </div>
  </div>




        <!-- TESTE PARA FORM-->










         <!-- -->
        
        


       
         
        
        </h4>
        <div class="modal-body">



        

         
    
          
            

       
     
      </div>
      
    </div>
  </div>
  
</div>


      </tr> 
  <?php } 
while ($dado = mysql_fetch_assoc($sql3))
  {
     $conta = $dado ["conta"]; 
  }
   }    }

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







if (isset($_POST ['submit2']) )
{




$query = "update pendencia SET  obs = '$obs' where protocolo = '$protocolo'  ";










$sql = mysql_query($query);



if($sql  )
{
  
  
    echo ' <h2>ATUALIZADA  COM SUCESSO!!';

  echo '<meta HTTP-EQUIV="Refresh" CONTENT="3;URL=pesq_pendencia.php">';
  

  

  
}
else
{
  
echo ' <h2>ERRO NO CADASTRO!!';

  
}


}



 

?>






</body>
</html>

