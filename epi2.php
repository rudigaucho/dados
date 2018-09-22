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
<script type="text/javascript">
function loginsuccessfully()
{
  setTimeout("window.location='epi.php'",3000);
  
  
}



</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel="icon" href="logo.png">

<script type="text/javascript">
function fnExcelReport() {
    var tab_text = '<html xmlns:x="urn:schemas-microsoft-com:office:excel">';
    tab_text = tab_text + '<head><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet>';

    tab_text = tab_text + '<x:Name>Relatorio </x:Name>';

    tab_text = tab_text + '<x:WorksheetOptions><x:Panes></x:Panes></x:WorksheetOptions></x:ExcelWorksheet>';
    tab_text = tab_text + '</x:ExcelWorksheets></x:ExcelWorkbook></xml></head><body>';

    tab_text = tab_text + "<table border='1px'>";
    tab_text = tab_text + $('#myTable').html();
    tab_text = tab_text + '</table></body></html>';

    var data_type = 'data:application/vnd.ms-excel';
    
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        if (window.navigator.msSaveBlob) {
            var blob = new Blob([tab_text], {
                type: "application/csv;charset=utf-8;"
            });
            navigator.msSaveBlob(blob, 'Test file.xls');
        }
    } else {
        $('#test').attr('href', data_type + ', ' + encodeURIComponent(tab_text));
        $('#test').attr('download', 'relatorio.xls');
    }

}





</script>




<title>Controle</title>
  <link rel="icon" href="img/key.png">
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  
   
   <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->


  <style>
     #jumbo{
  background: url(empresa.jpg) no-repeat;

}
  </style>
</head>
<body>
<div class="jumbotron text-center " id="jumbo">
   <br><br><br><br><br><br><br>
</div>
<p  style="font-size: 12px;"><i><strong>© Copyright Serede S/A Desenvolvimento Rudinei Rossales  </strong></i></p>
<div class="navbar navbar-inverse navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="#"> <?php echo $_SESSION["nome"]?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
              
         
                  
         <li class="active"><a href="pesq_ger.php">Voltar</a></li>
     

                </ul>
            </div>

        </div>
    </div>




<div class="container-fluid">


<div class="row"> <!-- 6 + 6 = 12 -->
   <div class="table-responsive col-sm-12">
  <table class="table table-hover">
  <span><strong>CONTROLE DE UNIFORMES</strong></span>
    <thead>
      <tr >
       <th>ID</th>
      <th>UF</th>
      <th>NOME</th>
        <th>CARGO</th>
        <th>FONE</th>
        <th>GESTOR.</th>
        
        <th>CHECKLIST</th>
        <th>VALIDAR</th>
        <th>PDF</th>
      
   
    
      
       
      </tr>
    </thead>
  
  <?php


$ga=$_GET['ga'];

$sql = mysql_query ("select * from check_eqp where gestor = '$ga' ORDER BY nome asc" );







  while ($dado = mysql_fetch_assoc($sql )){

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <tbody>
    <?php if ($dado ["uf"] == 'PR.'){ ?>

     <tr style="color:red">


    <?php } else {?>

      <tr class="">

      <?php } ?>
      
<td> <?php echo $dado ["id"];  ?></td>
<td> <?php echo $dado ["uf"];  ?></td>
<td> <?php echo $dado ["nome"];  ?></td>
 <td> <?php echo $dado ["cargo"];  ?></td>
 <td> <?php echo $dado ["fone"];  ?></td>
  <td> <?php echo $dado ["gestor"];  ?></td>
 
 
   <td> <?php echo $dado ["check_list"];  ?></td>

    <?php $id = $dado ["id"];  ?>


  <?php if ($dado ["check_list"] == 'NOK'){?>

<td> <a href="form.php?id=<?php echo $id ?>"> VALIDAR</a> </td>

<?php } ?>



<?php if ($dado ["check_list"] == 'OK'){?>
<td> <a href="edit_uni.php?id=<?php echo $id ?>"> EDITAR</a> </td>
<td><a href="gerar_pdf.php?id=<?php echo $id ?>">DOWNLOAD</a></td>

<?php } ?>





<div class="modal fade" id="myModal<?php echo $dado ['id'];  ?>" role="dialog">
    <div class="modal-dialog-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">CADASTRO UNIFORME<h4>
         <form role="form" id="form" name="seachform" method="post" action="enviar_eqp.php "  enctype="multipart/form-data" >
  <div class="form-group" >
 
    <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $dado["id"] ?>" readonly required>

<div>
       <label for="sel1">NOME: <?php echo $dado["nome"]; ?> </label><br><br><br>
    <label for="sel1">CAMISA QUANTIDADE:</label>
  <select class="form-control " id="camisa" name="camisa"  >
   <option value="0">  0 </option>
 <option value="1">  1 </option>
<option value="2" > 2  </option>
<option value="3">  3 </option>
<option value="4" > 4  </option>
<option value="5" > 5  </option>
</select> <br>

   <label for="sel1">CAMISA TAMANHO:</label>
  <select class="form-control " id="camisa_tam" name="camisa_tam"  >
<option value="1">  1 </option>
<option value="2" > 2  </option>
<option value="3">  3 </option>
<option value="4" > 4  </option>
<option value="5" > 5  </option>
<option value="6" > 6  </option>
<option value="7" > 7  </option>
</select><br>

 <label for="sel1">CAMISA TROCA:</label>
  <select class="form-control " id="camisa_troca" name="camisa_troca"  >
  <option value="SIM">  SIM </option>
<option value="NAO" > NAO  </option>

</select><br>

 <label for="sel1">SAPATO:</label>
  <select class="form-control " id="sapato" name="sapato"  >
  <option value="SIM">  SIM </option>
<option value="NAO" > NAO  </option>
</select><br>

<label for="sel1">QUANTIDADE SAPATO:</label>
  <select class="form-control " id="qtd_sap" name="qtd_sap"   >
  <option value="1">  1 </option>
<option value="2" > 2  </option>
<option value="3">  3 </option>
<option value="4" > 4  </option>
<option value="5" > 5  </option>
</select><br><br>

   <label for="email">PDF: </label>
    <input type="file"  id="pdf" name="pdf"  /> 

   
    
    </div>

    </div>
 <button type="submit"  name="submit2" id="submit2" class="btn btn-default"  > Atualizar</button> 
 
  
</form>




        <!-- TESTE PARA FORM-->










         <!-- -->
        
        


       
         
        
        </h4>
        <div class="modal-body">



        

         
    
          
            

       
        <div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>

          



          
        </div>
      </div>
      
    </div>
  </div>
  
</div>


      </tr> 



    
      
      
    </div>
  </div>
  
</div>
    </tbody>
         </div>



  













<?php }  ?>










</div>




         </div>
         </table>

    </div>


    <?php

    


 

?>


  

</body>




</html>


