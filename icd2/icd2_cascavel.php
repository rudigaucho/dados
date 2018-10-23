<!DOCTYPE html>
<html lang="pt-br">
<head>

<link rel="stylesheet"  href="stilo_geoco.css">
	 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php 


$url = 'http://10.62.46.13/geoco/relatorios/macroarea/lista_bds.php?uf=PR&mes=12&ano=2017&dados=repetida&macro=CASCAVEL&filtro_pi=';









$dados = file_get_contents($url);




$var1 = explode('<center><font align="center" style="font-family:verdana; font-weight:bold; font-size:10px;">',$dados); 


$var2 = explode('<br><hr style="width:90%; border:1px solid #ccc;">',$var1[1]);



print "<div style='font-size:14px;'>" . $var2[0] . "<br><br><br><span>OBS: Estes dados estão espelhados com a página geoco da OI com informações atualizadas. </span></div>";




























?>



</body>

</html>
