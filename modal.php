
<!-- ///////////////////////////////////////////////////////////  CASSIANO ///////////////////////////////////////////////////// -->

<div id="cassiano_rep" class="modal fade" role="dialog">
  <div class="modal-dialog-lg">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>REPETIDAS MARLON CRISTIAN</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
         <tr>
         <th>CIRCUITO</th>
        <th>CLIENTE</th>
        <th>JUSTIFICATIVA</th>
         <th>PREVENTIVA</th>
         <th>EDITAR</th>
        
       

        
    
      
       
       </tr>
    </thead>
      <?php

     $sql = mysql_query ("select  * from repetida where ga = 'MARLON CRISTIAN' and MONTH(data) = MONTH(NOW()) " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
        <tbody>
      <tr class="success">
   <?php  $ccto = $dado ["ccto"]; ?>
      
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?>
<td> <?php echo $dado ["justificativa"];  ?>
<td> <?php echo $dado ["tratada"];  ?>


 
</td>
<td> <a href='editar_rep.php?ccto=<?php echo $ccto ?>'>EDITAR</a></td>

</tr>
</tbody>

<?php } } ?>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>



      




      <!-- ///////////////////////////////////////////////////////////  ALISSON  ///////////////////////////////////////////////////// -->



<div id="alisson_rep" class="modal fade" role="dialog">
  <div class="modal-dialog-lg">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>REPETIDAS ALISSON SQUINZANI</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
         <tr>
         <th>CIRCUITO</th>
        <th>CLIENTE</th>
           <th>JUSTIFICATIVA</th>
         <th>PREVENTIVA</th>
         <th>EDITAR</th>
        
       

        
    
      
       
       </tr>
    </thead>
      <?php

     $sql = mysql_query ("select  * from repetida where ga = 'ALISSON SQUINZANI' and MONTH(data) = MONTH(NOW()) " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
        <tbody>
      <tr class="success">
     <?php  $ccto = $dado ["ccto"]; ?> 
      
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?>
<td> <?php echo $dado ["justificativa"];  ?>
<td> <?php echo $dado ["tratada"];  ?>

 
</td>
<td> <a href='editar_rep.php?ccto=<?php echo $ccto ?>'>EDITAR</a></td>

</tr>
</tbody>

<?php } } ?>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>





         <!-- ///////////////////////////////////////////////////////////  CLEOMAR  ///////////////////////////////////////////////////// -->



<div id="cleomar_rep" class="modal fade" role="dialog">
  <div class="modal-dialog-lg">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>REPETIDAS CLEOMAR APARECIDO BISCHOFF</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
         <tr>
         <th>CIRCUITO</th>
        <th>CLIENTE</th>
        <th>JUSTIFICATIVA</th>
         <th>PREVENTIVA</th>
        <th>EDITAR</th>
       

        
    
      
       
       </tr>
    </thead>
      <?php

     $sql = mysql_query ("select  * from repetida where ga = 'CLEOMAR APARECIDO BISCHOFF'  and MONTH(data) = MONTH(NOW()) " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
        <tbody>
      <tr class="success">
     
    <?php  $ccto = $dado ["ccto"]; ?>   
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?>
<td> <?php echo $dado ["justificativa"];  ?>
<td> <?php echo $dado ["tratada"];  ?>

 
</td>
<td> <a href='editar_rep.php?ccto=<?php echo $ccto ?>'>EDITAR</a></td>

</tr>
</tbody>

<?php } } ?>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>





         <!-- ///////////////////////////////////////////////////////////  MARCIO  ///////////////////////////////////////////////////// -->



<div id="marcio_rep" class="modal fade" role="dialog">
  <div class="modal-dialog-lg">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>REPETIDAS MARCIO ALVES DA CRUZ</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
         <tr>
         <th>CIRCUITO</th>
        <th>CLIENTE</th>
          <th>JUSTIFICATIVA</th>
         <th>PREVENTIVA</th>
        
       <th>EDITAR</th>

        
    
      
       
       </tr>
    </thead>
      <?php

     $sql = mysql_query ("select  * from repetida where ga = 'MARCIO ALVES DA CRUZ' and MONTH(data) = MONTH(NOW())  " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
        <tbody>
      <tr class="success">
     
     <?php  $ccto = $dado ["ccto"]; ?> 
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?>
<td> <?php echo $dado ["justificativa"];  ?>
<td> <?php echo $dado ["tratada"];  ?>

 
</td>
<td> <a href='editar_rep.php?ccto=<?php echo $ccto ?>'>EDITAR</a></td>

</tr>
</tbody>

<?php } } ?>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>




             <!-- ///////////////////////////////////////////////////////////  FAIX  ///////////////////////////////////////////////////// -->



<div id="faix_rep" class="modal fade" role="dialog">
  <div class="modal-dialog-lg">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>REPETIDAS LUIS FERNANDO FAIX</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
         <tr>
         <th>CIRCUITO</th>
        <th>CLIENTE</th>
        <th>JUSTIFICATIVA</th>
         <th>PREVENTIVA</th>
        <th>EDITAR</th>
       

        
    
      
       
       </tr>
    </thead>
      <?php

     $sql = mysql_query ("select  * from repetida where ga = 'LUIS FERNANDO FAIX' and MONTH(data) = MONTH(NOW())  " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
        <tbody>
      <tr class="success">
     
     <?php  $ccto = $dado ["ccto"]; ?>  
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?>
<td> <?php echo $dado ["justificativa"];  ?>
<td> <?php echo $dado ["tratada"];  ?>

 
</td>
<td> <a href='editar_rep.php?ccto=<?php echo $ccto ?>'>EDITAR</a></td>

</tr>
</tbody>

<?php } } ?>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>




             <!-- /////////////////////////////////////////////////////////// FERRI  ///////////////////////////////////////////////////// -->



<div id="ferri_rep" class="modal fade" role="dialog">
  <div class="modal-dialog-lg">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>REPETIDAS    ANDERSON FELIPE FERRI</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
         <tr>
         <th>CIRCUITO</th>
        <th>CLIENTE</th>
        <th> JUSTIFICATIVA </th>
         <th>PREVENTIVA</th>
        <th>EDITAR</th>
       

        
    
      
       
       </tr>
    </thead>
      <?php

     $sql = mysql_query ("select  * from repetida where ga = 'ANDERSON FELIPE FERRI' and MONTH(data) = MONTH(NOW())  " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
        <tbody>
      <tr class="success">
     
    <?php  $ccto = $dado ["ccto"]; ?>   
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?>
<td> <?php echo $dado ["justificativa"];  ?>
<td> <?php echo $dado ["tratada"];  ?>

 
</td>
<td> <a href='editar_rep.php?ccto=<?php echo $ccto ?>'>EDITAR</a></td>

</tr>
</tbody>

<?php } } ?>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>




                 <!-- /////////////////////////////////////////////////////////// enir  ///////////////////////////////////////////////////// -->



<div id="enir_rep" class="modal fade" role="dialog">
  <div class="modal-dialog-lg">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>REPETIDAS ENIR JOSE RODRIGUES</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
         <tr>
         <th>CIRCUITO</th>
        <th>CLIENTE</th>
        <th>JUSTIFICATIVA</th>
         <th>PREVENTIVA</th>
        <th>EDITAR</th>
       

        
    
      
       
       </tr>
    </thead>
      <?php

     $sql = mysql_query ("select  * from repetida where ga = 'ENIR JOSE RODRIGUES' and MONTH(data) = MONTH(NOW()) " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
        <tbody>
      <tr class="success">
     
      <?php  $ccto = $dado ["ccto"]; ?> 
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?>
<td> <?php echo $dado ["justificativa"];  ?>
<td> <?php echo $dado ["tratada"];  ?>

 
</td>
<td> <a href='editar_rep.php?ccto=<?php echo $ccto ?>'>EDITAR</a></td>

</tr>
</tbody>

<?php } } ?>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>



                 <!-- /////////////////////////////////////////////////////////// CRISTHIAN ///////////////////////////////////////////////////// -->



<div id="cristhian_rep" class="modal fade" role="dialog">
  <div class="modal-dialog-lg">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>REPETIDAS CRISTHIAN FRANCISCO BRUCH</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
         <tr>
         <th>CIRCUITO</th>
        <th>CLIENTE</th>
        <th>JUSTIFICATIVA</th>
         <th>PREVENTIVA.</th>
        <th>EDITAR</th>
       

        
    
      
       
       </tr>
       <td> <a href='editar_rep.php?ccto=<?php echo $ccto ?>'>EDITAR</a></td>
    </thead>
      <?php

     $sql = mysql_query ("select  * from repetida where ga = 'CRISTHIAN FRANCISCO BRUCH' and MONTH(data) = MONTH(NOW())  " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
        <tbody>
      <tr class="success">
     
      <?php  $ccto = $dado ["ccto"]; ?> 
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?></td>
<td> <?php echo $dado ["justificativa"];  ?></td>
<td> <?php echo $dado ["tratada"];  ?>

 
</td>
<td> <a href='editar_rep.php?ccto=<?php echo $ccto ?>'>EDITAR</a></td>

</tr>
</tbody>

<?php } } ?>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>




     <!-- /////////////////////////////////////////////////////////// FLARES ///////////////////////////////////////////////////// -->



<div id="flares_rep" class="modal fade" role="dialog">
  <div class="modal-dialog-lg">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>REPETIDAS    FLARES ANDRE DE LIZ</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
         <tr>
         <th>CIRCUITO</th>
        <th>CLIENTE</th>
        <th>JUSTIFICATIVA</th>
         <th>PREVENTIVA</th>
        <th>EDITAR</th>
       

        
    
      
       
       </tr>
    </thead>
      <?php

     $sql = mysql_query ("select  * from repetida where ga = 'FLARES ANDRE DE LIZ' and MONTH(data) = MONTH(NOW()) " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
        <tbody>
      <tr class="success">
     <?php  $ccto = $dado ["ccto"]; ?> 
      
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?>
<td> <?php echo $dado ["justificativa"];  ?>
<td> <?php echo $dado ["tratada"];  ?>

 
</td>
<td> <a href='editar_rep.php?ccto=<?php echo $ccto ?>'>EDITAR</a></td>

</tr>
</tbody>

<?php } } ?>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>



<!-- /////////////////////////////////////////////////////////// JUNIOMAR ///////////////////////////////////////////////////// -->



<div id="juniomar_rep" class="modal fade" role="dialog">
  <div class="modal-dialog-lg">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>REPETIDAS    JUNIOMAR ALEX MOCHNACZ</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
         <tr>
         <th>CIRCUITO</th>
        <th>CLIENTE</th>
        <th>JUSTIFICATIVA</th>
         <th>PREVENTIVA</th>
        
       <th>EDITAR</th>

        
    
      
       
       </tr>
    </thead>
      <?php

     $sql = mysql_query ("select  * from repetida where ga = 'JUNIOMAR ALEX MOCHNACZ' and MONTH(data) = MONTH(NOW()) " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
        <tbody>
      <tr class="success">
     
      <?php  $ccto = $dado ["ccto"]; ?> 
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?>
<td> <?php echo $dado ["justificativa"];  ?>
<td> <?php echo $dado ["tratada"];  ?>

 
</td>
<td> <a href='editar_rep.php?ccto=<?php echo $ccto ?>'>EDITAR</a></td>

</tr>
</tbody>

<?php } } ?>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>


    <!-- /////////////////////////////////////////////////////////// GILBERTO ///////////////////////////////////////////////////// -->



<div id="gilberto_rep" class="modal fade" role="dialog">
  <div class="modal-dialog-lg">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>REPETIDAS    GILBERTO MACHADO TEODORO</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
         <tr>
         <th>CIRCUITO</th>
        <th>CLIENTE</th>
        <th>JUSTIFICATIVA</th>
         <th>PREVENTIVA</th>
        <th>EDITAR</th>
       

        
    
      
       
       </tr>
    </thead>
      <?php

     $sql = mysql_query ("select  * from repetida where ga = 'GILBERTO MACHADO TEODORO' and MONTH(data) = MONTH(NOW()) " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
        <tbody>
      <tr class="success">
     <?php  $ccto = $dado ["ccto"]; ?> <?php  $ccto = $dado ["ccto"]; ?> 
      
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?>
<td> <?php echo $dado ["justificativa"];  ?>
<td> <?php echo $dado ["tratada"];  ?>

 
</td>
<td> <a href='editar_rep.php?ccto=<?php echo $ccto ?>'>EDITAR</a></td>

</tr>
</tbody>

<?php } } ?>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>


    <!-- /////////////////////////////////////////////////////////// MARLOS  ///////////////////////////////////////////////////// -->



<div id="marlos_rep" class="modal fade" role="dialog">
  <div class="modal-dialog-lg">
   
    <!-- Modal content-->
    <div class="modal-content">
     <span style="margin-left: 15%;"><strong>REPETIDAS  MARLOS UELDES FELICIO</strong></span>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
       <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
         <tr>
         <th>CIRCUITO</th>
        <th>CLIENTE</th>
        <th>JUSTIFICATIVA</th>
         <th>PREVENTIVA</th>
        <th>EDITAR</th>
       

        
    
      
       
       </tr>
    </thead>
      <?php

     $sql = mysql_query ("select  * from repetida where ga = 'MARLOS UELDES FELICIO' and MONTH(data) = MONTH(NOW()) " );
// $sql2 = mysql_query ("select count(*) as conta  from relatorio where gra = '".$busca."' and data BETWEEN  '$data 00:00:00' and '$data 23:59:00' order by data desc   " );




$row = mysql_num_rows($sql);

 
 

if (mysql_num_rows($sql) > 0)

{
  while ($dado = mysql_fetch_assoc($sql)){
?>
        <tbody>
      <tr class="success">
     
      <?php  $ccto = $dado ["ccto"]; ?> 
<td> <?php echo $dado ["ccto"];  ?></td>
<td> <?php echo $dado ["cliente"];  ?>
<td> <?php echo $dado ["justificativa"];  ?>
<td> <?php echo $dado ["tratada"];  ?>

 
</td>
<td> <a href='editar_rep.php?ccto=<?php echo $ccto ?>'>EDITAR</a></td>

</tr>
</tbody>

<?php } } ?>

    </table>
    </div>
    </div>
    </div>
    </div>
    </div>

















      

