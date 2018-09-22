


<?php


//-------------------------------------------  VERIFICACAO DADOS DATA ATUAL ----------------------------------------------------------------

$sql1 = mysql_query ("SELECT COUNT(*) AS jan FROM base_eqp where year(data) = year(NOW()) and MONTH(data) = '01'" );
 while ($dado = mysql_fetch_assoc($sql1 )){


  $jan = $dado["jan"];

 } 

 $sql2 = mysql_query ("SELECT COUNT(*) AS fev FROM base_eqp where year(data) = year(NOW()) and MONTH(data) = '02'" );
 while ($dado = mysql_fetch_assoc($sql2 )){


  $fev = $dado["fev"];

 } 


 $sql3 = mysql_query ("SELECT COUNT(*) AS mar FROM base_eqp where year(data) = year(NOW()) and MONTH(data) = '03'" );
 while ($dado = mysql_fetch_assoc($sql3 )){


  $mar = $dado["mar"];

 } 

 $sql4 = mysql_query ("SELECT COUNT(*) AS abr FROM base_eqp where year(data) = year(NOW()) and MONTH(data) = '04'" );
 while ($dado = mysql_fetch_assoc($sql4 )){


  $abr = $dado["abr"];

 } 


 $sql5 = mysql_query ("SELECT COUNT(*) AS mai FROM base_eqp where year(data) = year(NOW()) and MONTH(data) = '05'" );
 while ($dado = mysql_fetch_assoc($sql5 )){


  $mai = $dado["mai"];

 } 


 $sql6 = mysql_query ("SELECT COUNT(*) AS jun FROM base_eqp where year(data) = year(NOW()) and MONTH(data) = '06'" );
 while ($dado = mysql_fetch_assoc($sql6 )){


  $jun = $dado["jun"];

 } 

 $sql7 = mysql_query ("SELECT COUNT(*) AS jul FROM base_eqp where year(data) = year(NOW()) and MONTH(data) = '07'" );
 while ($dado = mysql_fetch_assoc($sql7 )){


  $jul = $dado["jul"];

 } 


 $sql8 = mysql_query ("SELECT COUNT(*) AS ago FROM base_eqp where year(data) = year(NOW()) and MONTH(data) = '08'" );
 while ($dado = mysql_fetch_assoc($sql8 )){


  $ago = $dado["ago"];

 } 

 $sql9 = mysql_query ("SELECT COUNT(*) AS sete FROM base_eqp where year(data) = year(NOW()) and MONTH(data) = '09'" );
 while ($dado = mysql_fetch_assoc($sql9 )){


  $sete = $dado["sete"];

 } 


 $sql10 = mysql_query ("SELECT COUNT(*) AS outu FROM base_eqp where year(data) = year(NOW()) and MONTH(data) = '10'" );
 while ($dado = mysql_fetch_assoc($sql10 )){


  $outu = $dado["outu"];

 } 


  $sql11 = mysql_query ("SELECT COUNT(*) AS nov FROM base_eqp where year(data) = year(NOW()) and MONTH(data) = '11'" );
 while ($dado = mysql_fetch_assoc($sql11 )){


  $nov = $dado["nov"];

 } 

  $sql12 = mysql_query ("SELECT COUNT(*) AS dez FROM base_eqp where year(data) = year(NOW()) and MONTH(data) = '12'" );
 while ($dado = mysql_fetch_assoc($sql12 )){


  $dez = $dado["dez"];

 } 









// ----------------------- VERIFICAR DATA ANUAL ------------------------------------------
 


$sql13 = mysql_query ("SELECT COUNT(*) AS ANO_2015 FROM base_eqp where year(data) = '2015';" );
 while ($dado = mysql_fetch_assoc($sql13 )){


  $ANO_2015 = $dado["ANO_2015"];

 } 

 $sql14 = mysql_query ("SELECT COUNT(*) AS ANO_2016 FROM base_eqp where year(data) = '2016';" );
 while ($dado = mysql_fetch_assoc($sql14 )){


  $ANO_2016 = $dado["ANO_2016"];

 } 

  $sql15 = mysql_query ("SELECT COUNT(*) AS ANO_2017 FROM base_eqp where year(data) = '2017';" );
 while ($dado = mysql_fetch_assoc($sql15 )){


  $ANO_2017 = $dado["ANO_2017"];

 } 



$sql16 = mysql_query ("SELECT COUNT(*) AS ANO_2018 FROM base_eqp where year(data) = '2018';" );
 while ($dado = mysql_fetch_assoc($sql16 )){


  $ANO_2018 = $dado["ANO_2018"];

 }


$sql17 = mysql_query ("SELECT COUNT(*) AS ANO_2019 FROM base_eqp where year(data) = '2019';" );
 while ($dado = mysql_fetch_assoc($sql17 )){


  $ANO_2019 = $dado["ANO_2019"];

 }

?>

