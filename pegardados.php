


<?php


//-------------------------------------------  VERIFICACAO CASSIANO   ----------------------------------------------------------------

$sql1 = mysql_query ("select count(*)  as semana1 from repetida where ga = 'MARLON CRISTIAN' and MONTH(data) = MONTH(NOW()) and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 )){


  $cassiano1 = $dado["semana1"];

 } 




 $sql2 = mysql_query ("select count(*)  as semana2 from repetida where ga = 'MARLON CRISTIAN' and MONTH(data) = MONTH(NOW()) and justificativa !='' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $cassiano2 = $dado["semana2"];

 } 


$cassiano_dif = $cassiano1 - $cassiano2;
 


// ----------------------------------------------------------- VERIFICACAO MARCIO ------------------------------------------------------



$sql1 = mysql_query ("select count(*)  as semana1 from repetida where ga = 'MARCIO ALVES DA CRUZ' and MONTH(data) = MONTH(NOW()) and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $marcio1 = $dado["semana1"];

 } 




 $sql2 = mysql_query ("select count(*)  as semana2 from repetida where ga = 'MARCIO ALVES DA CRUZ' and MONTH(data) = MONTH(NOW()) and justificativa !='' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $marcio2 = $dado["semana2"];

 } 
 $marcio_dif = $marcio1 - $marcio2;

 //--------------------------------------------------------------   VERIFICACAO FAIX -----------------------------------


$sql1 = mysql_query ("select count(*)  as semana1 from repetida where ga = 'LUIS FERNANDO FAIX' and MONTH(data) = MONTH(NOW()) and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $faix1 = $dado["semana1"];

 } 




 $sql2 = mysql_query ("select count(*)  as semana2 from repetida where ga = 'LUIS FERNANDO FAIX' and MONTH(data) = MONTH(NOW()) and justificativa !='' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $faix2 = $dado["semana2"];

 } 

$faix_dif = $faix1 - $faix2;

// ------------------------------------------ VERIFICACAO MARLOS ----------------------------------------------

$sql1 = mysql_query ("select count(*)  as semana1 from repetida where ga = 'MARLOS UELDES FELICIO' and MONTH(data) = MONTH(NOW()) and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $marlos1 = $dado["semana1"];

 } 




 $sql2 = mysql_query ("select count(*)  as semana2 from repetida where ga = 'MARLOS UELDES FELICIO' and MONTH(data) = MONTH(NOW()) and justificativa !='' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $marlos2 = $dado["semana2"];

 } 


$marlos_dif = $marlos1 - $marlos2;

//------------------------------------------------ VERIFICAÇAÕ  CLEOMAR -----------------------------------------

 $sql1 = mysql_query ("select count(*)  as semana1 from repetida where ga = 'CLEOMAR APARECIDO BISCHOFF' and MONTH(data) = MONTH(NOW()) and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $cleomar1 = $dado["semana1"];

 } 




 $sql2 = mysql_query ("select count(*)  as semana2 from repetida where ga = 'CLEOMAR APARECIDO BISCHOFF' and MONTH(data) = MONTH(NOW()) and justificativa !='' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $cleomar2 = $dado["semana2"];

 } 



$cleomar_dif = $cleomar1 - $cleomar2;
 //-----------------------------------VERIFICAÇAO FERRI ----------------------------------------------------------

 $sql1 = mysql_query ("select count(*)  as semana1 from repetida where ga = 'ANDERSON FELIPE FERRI' and MONTH(data) = MONTH(NOW()) and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $ferri1 = $dado["semana1"];

 } 




 $sql2 = mysql_query ("select count(*)  as semana2 from repetida where ga = 'ANDERSON FELIPE FERRI' and MONTH(data) = MONTH(NOW()) and justificativa !='' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $ferri2 = $dado["semana2"];

 } 

 $ferri_dif = $ferri1 - $ferri2;

// ---------------VERIFICAÇÃO enir -----------------------------------------------------------

 $sql1 = mysql_query ("select count(*)  as semana1 from repetida where ga = 'ENIR JOSE RODRIGUES' and MONTH(data) = MONTH(NOW()) and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $enir1 = $dado["semana1"];

 } 




 $sql2 = mysql_query ("select count(*)  as semana2 from repetida where ga = 'ENIR JOSE RODRIGUES' and MONTH(data) = MONTH(NOW()) and justificativa !='' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $enir2 = $dado["semana2"];

 } 

 $enir_dif = $enir1 - $enir2;


 //---------------------------------------VERIFICAÇÃO CRISTHIAN ---------------------------------------------


 $sql1 = mysql_query ("select count(*)  as semana1 from repetida where ga = 'CRISTHIAN FRANCISCO BRUCH' and MONTH(data) = MONTH(NOW()) and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $cristhian1 = $dado["semana1"];

 } 




 $sql2 = mysql_query ("select count(*)  as semana2 from repetida where ga = 'CRISTHIAN FRANCISCO BRUCH' and MONTH(data) = MONTH(NOW()) and justificativa !='' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $cristhian2 = $dado["semana2"];

 } 


$cristhian_dif = $cristhian1 - $cristhian2;
//------------------------------------------- VERIFICAÇÃO FLARES -------------------------------------

 $sql1 = mysql_query ("select count(*)  as semana1 from repetida where ga = 'FLARES ANDRE DE LIZ' and MONTH(data) = MONTH(NOW()) and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $flares1 = $dado["semana1"];

 } 




 $sql2 = mysql_query ("select count(*)  as semana2 from repetida where ga = 'FLARES ANDRE DE LIZ' and MONTH(data) = MONTH(NOW()) and justificativa !='' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $flares2 = $dado["semana2"];

 } 

$flares_dif = $flares1 - $flares2;

// ------------------------------------------------------------ VERIFICAÇÃO  JUNIOMAR ----------------------------


 $sql1 = mysql_query ("select count(*)  as semana1 from repetida where ga = 'JUNIOMAR ALEX MOCHNACZ' and MONTH(data) = MONTH(NOW()) and year(data) = year(now()) " );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $juniomar1 = $dado["semana1"];

 } 




 $sql2 = mysql_query ("select count(*)  as semana2 from repetida where ga = 'JUNIOMAR ALEX MOCHNACZ' and MONTH(data) = MONTH(NOW()) and justificativa !='' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $juniomar2 = $dado["semana2"];

 } 

 $juniomar_dif = $juniomar1 - $juniomar2;

//  ----------------------------------------  VERIFICAÇÃO GILBERTO -------------------------------------------


$sql1 = mysql_query ("select count(*)  as semana1 from repetida where ga = 'GILBERTO MACHADO TEODORO' and MONTH(data) = MONTH(NOW()) and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $gilberto1 = $dado["semana1"];

 } 




 $sql2 = mysql_query ("select count(*)  as semana2 from repetida where ga = 'GILBERTO MACHADO TEODORO' and MONTH(data) = MONTH(NOW()) and justificativa !='' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $gilberto2 = $dado["semana2"];

 } 


$gilberto_dif = $gilberto1 - $gilberto2;
// ----------------------------- VERIFICACAO ALISSON SQUINZANI ---------------------------------

$sql1 = mysql_query ("select count(*)  as semana1 from repetida where ga = 'ALISSON SQUINZANI' and MONTH(data) = MONTH(NOW()) and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $vale1 = $dado["semana1"];

 } 




 $sql2 = mysql_query ("select count(*)  as semana2 from repetida where ga = 'ALISSON SQUINZANI' and MONTH(data) = MONTH(NOW()) and justificativa !='' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $vale2 = $dado["semana2"];

 } 

 $vale_dif = $vale1 - $vale2;



?>

