


<?php


//-------------------------------------------  VERIFICACAO CASSIANO   ----------------------------------------------------------------

$sql1 = mysql_query ("select count(*) as os from atividades where  week(data) = week(NOW()) and tipo = 'OS' and supervisor = 'MARLON CRISTIAN'  and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $cassiano_os = $dado["os"];

 } 




 $sql2 = mysql_query ("select count(*) as bd from atividades where week(data) = week(NOW()) and tipo = 'BD' and supervisor =  'MARLON CRISTIAN'  and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $cassiano_bd = $dado["bd"];

 } 



  $sql3 = mysql_query ("select count(*) as prev from atividades where  week(data) = week(NOW()) and tipo = 'PREVENTIVA' and supervisor = 'MARLON CRISTIAN'  and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql3) ){


  $cassiano_prev = $dado["prev"];

 } 

 $sql4 = mysql_query ("select count(*) as conta_mes from atividades where MONTH(data) = MONTH(NOW())  and supervisor = 'MARLON CRISTIAN' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql4 ) ){


  $cassiano_mes = $dado["conta_mes"];

 } 
 $sql5 = mysql_query ("select count(*) as conta_anterior from atividades where MONTH(data) = MONTH(NOW())-1  and supervisor = 'MARLON CRISTIAN' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql5 ) ){


  $cassiano_anterior = $dado["conta_anterior"];

 } 

$cassiano_soma_bd_os = $cassiano_os + $cassiano_bd;
  


// ----------------------------------------------------------- VERIFICACAO MARCIO ------------------------------------------------------



$sql1 = mysql_query ("select count(*) as os from atividades where  week(data) = week(NOW()) and tipo = 'OS' and supervisor = 'MARCIO ALVES DA CRUZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $marcio_os = $dado["os"];

 } 




 $sql2 = mysql_query ("select count(*) as bd from atividades where  week(data) = week(NOW()) and tipo = 'BD' and supervisor = 'MARCIO ALVES DA CRUZ'and year(data) = year(now()) " );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $marcio_bd = $dado["bd"];

 } 



  $sql3 = mysql_query ("select count(*) as prev from atividades where  week(data) = week(NOW()) and tipo = 'PREVENTIVA' and supervisor = 'MARCIO ALVES DA CRUZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql3 ) ){


  $marcio_prev = $dado["prev"];

 } 
  $sql4 = mysql_query ("select count(*) as conta_mes from atividades where MONTH(data) = MONTH(NOW())  and supervisor = 'MARCIO ALVES DA CRUZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql4 ) ){


  $marcio_mes = $dado["conta_mes"];

 }
   
 $sql5 = mysql_query ("select count(*) as conta_anterior from atividades where MONTH(data) = MONTH(NOW())-1  and supervisor = 'MARCIO ALVES DA CRUZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql5 ) ){


  $marcio_anterior = $dado["conta_anterior"];

 } 
 $marcio_soma_bd_os = $marcio_os + $marcio_bd;
 

 //--------------------------------------------------------------   VERIFICACAO FAIX -----------------------------------


$sql1 = mysql_query ("select count(*) as os from atividades where  week(data) = week(NOW()) and tipo = 'OS' and supervisor = 'LUIS FERNANDO FAIX' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $faix_os = $dado["os"];

 } 




 $sql2 = mysql_query ("select count(*) as bd from atividades where  week(data) = week(NOW()) and tipo = 'BD' and supervisor = 'LUIS FERNANDO FAIX' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $faix_bd = $dado["bd"];

 } 



  $sql3 = mysql_query ("select count(*) as prev from atividades where  week(data) = week(NOW()) and tipo = 'PREVENTIVA' and supervisor = 'LUIS FERNANDO FAIX' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql3 ) ){


  $faix_prev = $dado["prev"];

 } 
  $sql4 = mysql_query ("select count(*) as conta_mes from atividades where MONTH(data) = MONTH(NOW())  and supervisor = 'LUIS FERNANDO FAIX' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql4 ) ){


  $faix_mes = $dado["conta_mes"];

 } 
 
 $sql5 = mysql_query ("select count(*) as conta_anterior from atividades where MONTH(data) = MONTH(NOW())-1  and supervisor = 'LUIS FERNANDO FAIX' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql5 ) ){


  $faix_anterior = $dado["conta_anterior"];

 } 

 $faix_soma_bd_os = $faix_os + $faix_bd;




// ------------------------------------------ VERIFICACAO MARLOS ----------------------------------------------

 $sql1 = mysql_query ("select count(*) as os from atividades where  week(data) = week(NOW()) and tipo = 'OS' and supervisor = 'MARLOS UELDES FELICIO' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $marlos_os = $dado["os"];

 } 




 $sql2 = mysql_query ("select count(*) as bd from atividades where  week(data) = week(NOW()) and tipo = 'BD' and supervisor = 'MARLOS UELDES FELICIO' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $marlos_bd = $dado["bd"];

 } 



  $sql3 = mysql_query ("select count(*) as prev from atividades where  week(data) = week(NOW()) and tipo = 'PREVENTIVA' and supervisor = 'MARLOS UELDES FELICIO' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql3 ) ){


  $marlos_prev = $dado["prev"];

 } 
   $sql4 = mysql_query ("select count(*) as conta_mes from atividades where MONTH(data) = MONTH(NOW())  and supervisor = 'MARLOS UELDES FELICIO' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql4 ) ){


  $marlos_mes = $dado["conta_mes"];

 } 

 $sql5 = mysql_query ("select count(*) as conta_anterior from atividades where MONTH(data) = MONTH(NOW())-1  and supervisor = 'MARLOS UELDES FELICIO' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql5 ) ){


  $marlos_anterior = $dado["conta_anterior"];

 } 

 $marlos_soma_bd_os = $marlos_os + $marlos_bd;



//------------------------------------------------ VERIFICAÇAÕ  CLEOMAR -----------------------------------------

 $sql1 = mysql_query ("select count(*) as os from atividades where  week(data) = week(NOW()) and tipo = 'OS' and supervisor = 'CLEOMAR APARECIDO BISCHOFF' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $cleomar_os = $dado["os"];

 } 




 $sql2 = mysql_query ("select count(*) as bd from atividades where  week(data) = week(NOW()) and tipo = 'BD' and supervisor = 'CLEOMAR APARECIDO BISCHOFF' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $cleomar_bd = $dado["bd"];

 } 



  $sql3 = mysql_query ("select count(*) as prev from atividades where  week(data) = week(NOW()) and tipo = 'PREVENTIVA' and supervisor = 'CLEOMAR APARECIDO BISCHOFF' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql3 ) ){


  $cleomar_prev = $dado["prev"];

 } 
     
   $sql4 = mysql_query ("select count(*) as conta_mes from atividades where MONTH(data) = MONTH(NOW())  and supervisor = 'CLEOMAR APARECIDO BISCHOFF' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql4 ) ){


  $cleomar_mes = $dado["conta_mes"];

 } 


$sql5 = mysql_query ("select count(*) as conta_anterior from atividades where MONTH(data) = MONTH(NOW())-1  and supervisor = 'CLEOMAR APARECIDO BISCHOFF' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql5 ) ){


  $cleomar_anterior = $dado["conta_anterior"];

 }

 $cleomar_soma_bd_os = $cleomar_os + $cleomar_bd;

 //-----------------------------------VERIFICAÇAO FERRI ----------------------------------------------------------

$sql1 = mysql_query ("select count(*) as os from atividades where  week(data) = week(NOW()) and tipo = 'OS' and supervisor = 'ANDERSON FELIPE FERRI' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $ferri_os = $dado["os"];

 } 




 $sql2 = mysql_query ("select count(*) as bd from atividades where  week(data) = week(NOW()) and tipo = 'BD' and supervisor = 'ANDERSON FELIPE FERRI' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $ferri_bd = $dado["bd"];

 } 



  $sql3 = mysql_query ("select count(*) as prev from atividades where  week(data) = week(NOW()) and tipo = 'PREVENTIVA' and supervisor = 'ANDERSON FELIPE FERRI' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql3 ) ){


  $ferri_prev = $dado["prev"];

 }  
   $sql4 = mysql_query ("select count(*) as conta_mes from atividades where MONTH(data) = MONTH(NOW())  and supervisor = 'ANDERSON FELIPE FERRI' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql4 ) ){


  $ferri_mes = $dado["conta_mes"];

 } 


 $sql5 = mysql_query ("select count(*) as conta_anterior from atividades where MONTH(data) = MONTH(NOW())-1  and supervisor = 'ANDERSON FELIPE FERRI' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql5 ) ){


  $ferri_anterior = $dado["conta_anterior"];

 }
 $ferri_soma_bd_os = $ferri_os + $ferri_bd;

// ---------------VERIFICAÇÃO enir -----------------------------------------------------------

 $sql1 = mysql_query ("select count(*) as os from atividades where  week(data) = week(NOW()) and tipo = 'OS' and supervisor = 'ENIR JOSE RODRIGUES' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $enir_os = $dado["os"];

 } 




 $sql2 = mysql_query ("select count(*) as bd from atividades where  week(data) = week(NOW()) and tipo = 'BD' and supervisor = 'ENIR JOSE RODRIGUES' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $enir_bd = $dado["bd"];

 } 



  $sql3 = mysql_query ("select count(*) as prev from atividades where  week(data) = week(NOW()) and tipo = 'PREVENTIVA' and supervisor = 'ENIR JOSE RODRIGUES' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql3 ) ){


  $enir_prev = $dado["prev"];

 } 
   $sql4 = mysql_query ("select count(*) as conta_mes from atividades where MONTH(data) = MONTH(NOW())  and supervisor = 'ENIR JOSE RODRIGUES' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql4 ) ){


  $enir_mes = $dado["conta_mes"];

 } 

  $sql5 = mysql_query ("select count(*) as conta_anterior from atividades where MONTH(data) = MONTH(NOW())-1  and supervisor = 'ENIR JOSE RODRIGUES' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql5 ) ){


  $enir_anterior = $dado["conta_anterior"];

 }


$enir_soma_bd_os = $enir_os + $enir_bd;
 //---------------------------------------VERIFICAÇÃO CRISTHIAN ---------------------------------------------


 $sql1 = mysql_query ("select count(*) as os from atividades where  week(data) = week(NOW()) and tipo = 'OS' and supervisor = 'CRISTHIAN FRANCISCO BRUCH' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $cristhian_os = $dado["os"];

 } 




 $sql2 = mysql_query ("select count(*) as bd from atividades where  week(data) = week(NOW()) and tipo = 'BD' and supervisor = 'CRISTHIAN FRANCISCO BRUCH' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $cristhian_bd = $dado["bd"];

 } 



  $sql3 = mysql_query ("select count(*) as prev from atividades where  week(data) = week(NOW()) and tipo = 'PREVENTIVA' and supervisor = 'CRISTHIAN FRANCISCO BRUCH' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql3 ) ){


  $cristhian_prev = $dado["prev"];

 } 
  $sql4 = mysql_query ("select count(*) as conta_mes from atividades where MONTH(data) = MONTH(NOW())  and supervisor = 'CRISTHIAN FRANCISCO BRUCH' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql4 ) ){


  $cristhian_mes = $dado["conta_mes"];

 } 

 $sql5 = mysql_query ("select count(*) as conta_anterior from atividades where MONTH(data) = MONTH(NOW())-1  and supervisor = 'CRISTHIAN FRANCISCO BRUCH' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql5 ) ){


  $cristhian_anterior = $dado["conta_anterior"];

 }
 $cristhian_soma_bd_os = $cristhian_os + $cristhian_bd;

//------------------------------------------- VERIFICAÇÃO FLARES -------------------------------------


$sql1 = mysql_query ("select count(*) as os from atividades where  week(data) = week(NOW()) and tipo = 'OS' and supervisor = 'FLARES ANDRE DE LIZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $flares_os = $dado["os"];

 } 




 $sql2 = mysql_query ("select count(*) as bd from atividades where  week(data) = week(NOW()) and tipo = 'BD' and supervisor = 'FLARES ANDRE DE LIZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $flares_bd = $dado["bd"];

 } 



  $sql3 = mysql_query ("select count(*) as prev from atividades where  week(data) = week(NOW()) and tipo = 'PREVENTIVA' and supervisor = 'FLARES ANDRE DE LIZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql3 ) ){


  $flares_prev = $dado["prev"];

 } 
  $sql4 = mysql_query ("select count(*) as conta_mes from atividades where MONTH(data) = MONTH(NOW())  and supervisor = 'FLARES ANDRE DE LIZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql4 ) ){


  $flares_mes = $dado["conta_mes"];

 }

 $sql5 = mysql_query ("select count(*) as conta_anterior from atividades where MONTH(data) = MONTH(NOW())-1  and supervisor = 'FLARES ANDRE DE LIZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql5 ) ){


  $flares_anterior = $dado["conta_anterior"];

 } 

 $flares_soma_bd_os = $flares_os + $flares_bd;


// ------------------------------------------------------------ VERIFICAÇÃO  JUNIOMAR ----------------------------


$sql1 = mysql_query ("select count(*) as os from atividades where  week(data) = week(NOW()) and tipo = 'OS' and supervisor = 'JUNIOMAR ALEX MOCHNACZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $juniomar_os = $dado["os"];

 } 




 $sql2 = mysql_query ("select count(*) as bd from atividades where  week(data) = week(NOW()) and tipo = 'BD' and supervisor = 'JUNIOMAR ALEX MOCHNACZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $juniomar_bd = $dado["bd"];

 } 



  $sql3 = mysql_query ("select count(*) as prev from atividades where  week(data) = week(NOW()) and tipo = 'PREVENTIVA' and supervisor = 'JUNIOMAR ALEX MOCHNACZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql3 ) ){


  $juniomar_prev = $dado["prev"];

 }  
  $sql4 = mysql_query ("select count(*) as conta_mes from atividades where MONTH(data) = MONTH(NOW())  and supervisor = 'JUNIOMAR ALEX MOCHNACZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql4 ) ){


  $juniomar_mes = $dado["conta_mes"];

 } 



 $sql5 = mysql_query ("select count(*) as conta_anterior from atividades where MONTH(data) = MONTH(NOW())-1  and supervisor = 'JUNIOMAR ALEX MOCHNACZ' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql5 ) ){


  $juniomar_anterior = $dado["conta_anterior"];

 }

 $juniomar_soma_bd_os = $juniomar_os + $juniomar_bd; 


//  ----------------------------------------  VERIFICAÇÃO GILBERTO -------------------------------------------


$sql1 = mysql_query ("select count(*) as os from atividades where  week(data) = week(NOW()) and tipo = 'OS' and supervisor = 'GILBERTO MACHADO TEODORO'" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $gilberto_os = $dado["os"];

 } 




 $sql2 = mysql_query ("select count(*) as bd from atividades where  week(data) = week(NOW()) and tipo = 'BD' and supervisor = 'GILBERTO MACHADO TEODORO'" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $gilberto_bd = $dado["bd"];

 } 



  $sql3 = mysql_query ("select count(*) as prev from atividades where  week(data) = week(NOW()) and tipo = 'PREVENTIVA' and supervisor = 'GILBERTO MACHADO TEODORO'" );
 while ($dado = mysql_fetch_assoc($sql3 ) ){


  $gilberto_prev = $dado["prev"];

 } 
 $sql4 = mysql_query ("select count(*) as conta_mes from atividades where MONTH(data) = MONTH(NOW())  and supervisor = 'GILBERTO MACHADO TEODORO'" );
 while ($dado = mysql_fetch_assoc($sql4 ) ){


  $gilberto_mes = $dado["conta_mes"];

 }


$sql5 = mysql_query ("select count(*) as conta_anterior from atividades where MONTH(data) = MONTH(NOW())-1  and supervisor = 'GILBERTO MACHADO TEODORO'" );
 while ($dado = mysql_fetch_assoc($sql5 ) ){


  $gilberto_anterior = $dado["conta_anterior"];

 } 

 $gilberto_soma_bd_os = $gilberto_os + $gilberto_bd;
// ----------------------------- VERIFICACAO VALE ---------------------------------

$sql1 = mysql_query ("select count(*) as os from atividades where  week(data) = week(NOW()) and tipo = 'OS' and supervisor = 'ALISSON SQUINZANI' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql1 ) ){


  $vale_os = $dado["os"];

 } 




 $sql2 = mysql_query ("select count(*) as bd from atividades where  week(data) = week(NOW()) and tipo = 'BD' and supervisor = 'ALISSON SQUINZANI' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql2 ) ){


  $vale_bd = $dado["bd"];

 } 



  $sql3 = mysql_query ("select count(*) as prev from atividades where  week(data) = week(NOW()) and tipo = 'PREVENTIVA' and supervisor = 'ALISSON SQUINZANI' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql3 ) ){


  $vale_prev = $dado["prev"];

 } 

 $sql4 = mysql_query ("select count(*) as conta_mes from atividades where MONTH(data) = MONTH(NOW())  and supervisor = 'ALISSON SQUINZANI' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql4 ) ){


  $vale_mes = $dado["conta_mes"];

 } 

$sql5 = mysql_query ("select count(*) as conta_anterior from atividades where MONTH(data) = MONTH(NOW())-1  and supervisor = 'ALISSON SQUINZANI' and year(data) = year(now())" );
 while ($dado = mysql_fetch_assoc($sql5 ) ){


  $vale_anterior = $dado["conta_anterior"];

 } 
 $vale_soma_bd_os = $vale_os + $vale_bd;

?>

