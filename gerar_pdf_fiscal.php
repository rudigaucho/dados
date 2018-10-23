
<?php


include 'mpdf/mpdf.php';


 include "conn.php";

 session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) &&  ($_SESSION["acesso"] != 'GA' ))
{
  header("Location: index.html");
  exit;
  
  
}


$id =$_GET['id'];
$protocolo =$_GET['protocolo'];

$sql = mysql_query ("select * from atividades where  id = '$id' " );


$sql2 = mysql_query ("select * from foto where  prot = '$protocolo' " );


 $i = 0;

 while ($dado2 = mysql_fetch_assoc($sql2)){

 $id = $dado2 ["id"]; 
 $foto = $dado2 ["foto"]; 
 $coment = $dado2 ["coment"]; 


 $ee[] = ' 
<figure style="border:0px solid black">
<img src="fotos/'.$foto.'"  width="300" height="300">
<figcaption>'.$coment.'</figcaption>
 </figure>

  


  ';}

 $i = 0;






  while ($dado = mysql_fetch_assoc($sql )){

  $nome = $dado ["nome"]; 
    $id = $dado ["id"]; 
     $gestor = $dado ["gestor"]; 

 $obs = $dado ["obs"]; 
      $cliente =$dado['cliente'];
$ccto =$dado['ccto'];
$data =$dado['data'];
$tipo =$dado['tipo'];
$supervisor =$dado['supervisor'];
$endereco =$dado['endereco'];
$contato =$dado['contato'];
$tec =$dado['tec'];
$produto =$dado['produto'];
$velocidade =$dado['velocidade'];
$tenc =$dado['tenc'];
$cordial =$dado['cordial'];
$quali =$dado['quali'];
$estacao =$dado['estacao'];
$ard =$dado['ard'];
$quali_ard =$dado['quali_ard'];
$padrao =$dado['padrao'];




  }



$pagina = 
'


<html>




<body>


 <img src="logo_sere.png" alt="" width="150" height="50"  > 
<h3 style="text-align: center;">FISCALIZAÇÃO SEMANAL</h3>
<h5>CLIENTE: <strong> '.$cliente.'  </strong> </h5>
<h5>CIRCUITO: '.$ccto.' </h5>
<h5>ENDEREÇO:'.$endereco.' </h5>
<h5>CONTATO:'.$contato.' </h5>
<h5>TECNICO:'.$tec.' </h5>
<h5>TIPO:'.$tipo.' </h5>
<h5>PRODUTO:'.$produto.' </h5>
<h5>VELOCIDADE:'.$velocidade.' </h5>
<h5>GA:'.$supervisor.' </h5>
<h5>DATA: '.$data.'</h5>
<h5>OBS: '.$obs.'</h5>
 <br> <br>


<h4 >1: INFRAESTRUTURA CLIENTE<h4/>
<table style="border: 1px solid black;">
    <thead>

      <tr>
       <th>ITENS VEREFICADOS</th>
        <th>CONDIÇÕES..........</th>
      
     
       
      


      </tr>
    </thead>
    <tbody>
      

     
      <tr>
         <td>1:1 Técnico esteve no cliente </td>
        <td>'.$tenc.' </td>
    
      
        
        
      </tr>

       <tr>
         <td>1:2 Cordialidade do técnico com o cliente_______________ </td>
        <td>'.$cordial.' </td>
  
      
        
        
      </tr>

      <tr>
         <td>1:3 Qualidade do serviço</td>
        <td>'.$quali.'</td>
      
      
        
        
      </tr>

      
     
    </tbody>
  </table><br>




  <h4 >2: INFRAESTRUTURA OI<h4/>
<table style="border: 1px solid black;">
    <thead>

      <tr>
       <th>ITENS VEREFICADOS</th>
        <th>CONDIÇÕES..........</th>
      
     
       
      


      </tr>
    </thead>
    <tbody>
      

     
      <tr>
         <td>2:1 Técnico esteve na Estação </td>
        <td>'.$estacao.' </td>
    
      
        
        
      </tr>

       <tr>
         <td>2:2 Técnico esteve no Armário </td>
        <td>'.$ard.' </td>
  
      
        
        
      </tr>

      <tr>
         <td>2:3 Qualidade do serviço executado____________________ </td>
        <td>'.$quali_ard.'</td>
      
      
        
        
      </tr>
      <tr>
         <td>2:4 Seguiu o padrão pré-definido  </td>
        <td>'.$padrao.'</td>
      
      
        
        
      </tr>

  
      
     
    </tbody>
  </table><br><br><br><br>

  <body>
<table>
<tr>  
<th>'.$ee[0].' </th> 
<th>'.$ee[1].' </th> 

</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>



  <body>
<table>
<tr>  
<th>'.$ee[2].' </th> 
<th>'.$ee[3].' </th> 

</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>

<body>
<table>
<tr>  
<th>'.$ee[4].' </th> 
<th>'.$ee[5].' </th> 

</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>

<body>
<table>
<tr>  
<th>'.$ee[6].' </th> 
<th>'.$ee[7].' </th> 

</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>

<body>
<table>
<tr>  
<th>'.$ee[8].' </th> 
<th>'.$ee[9].' </th> 

</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>

<body>
<table>
<tr>  
<th>'.$ee[10].' </th> 
<th>'.$ee[11].' </th> 

</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>

<body>
<table>
<tr>  
<th>'.$ee[12].' </th> 
<th>'.$ee[13].' </th> 

</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>

<body>
<table>
<tr>  
<th>'.$ee[14].' </th> 
<th>'.$ee[15].' </th> 

</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>

<body>
<table>
<tr>  
<th>'.$ee[16].' </th> 
<th>'.$ee[17].' </th> 

</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>

<body>
<table>
<tr>  
<th>'.$ee[18].' </th> 
<th>'.$ee[19].' </th> 

</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>
</body>
 
   
   













   ';

  











$footer = "<p style='font-size:10px;'>Comunicação de Dados –  Controle de fiscalizações</p>";
$arquivo = "cadastro02.pdf"; 


$mpdf = new mPDF();

$stylesheet = file_get_contents('css/bootstrap.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->SetHTMLFooter($footer,"O");

 $mpdf -> WriteHTML($pagina);

$mpdf -> Output($arquivo, 'I');




























?>