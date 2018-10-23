

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

$sql = mysql_query ("select * from check_eqp where  id = '$id' " );







  while ($dado = mysql_fetch_assoc($sql )){

  $nome = $dado ["nome"]; 
    $id = $dado ["id"]; 
     $gestor = $dado ["gestor"]; 


      $camisa_tam =$dado['camisa_tam'];
$camisa_qtd =$dado['camisa_qtd'];
$camisa_troca =$dado['camisa_troca'];
$calca_tam =$dado['calca_tam'];
$calca_qtd =$dado['calca_qtd'];
$calca_troca =$dado['calca_troca'];
$bota_tam =$dado['bota_tam'];
$bota_qtd =$dado['bota_qtd'];
$bota_troca =$dado['bota_troca'];
$jaqueta_tam =$dado['jaqueta_tam'];
$jaqueta_qtd =$dado['jaqueta_qtd'];
$jaqueta_troca =$dado['jaqueta_troca'];
$capa_tam =$dado['capa_tam'];
$capa_qtd =$dado['capa_qtd'];
$capa_troca =$dado['capa_troca'];
$id_possui =$dado['id_possui'];
$id_estado =$dado['id_estado'];
$crlv =$dado['crlv'];
$crlv_ano =$dado['crlv_ano'];
$cnh =$dado['cnh'];
$cnh_vencimento =$dado['cnh_ano'];
$obs =$dado['obs'];
 $cracha =$dado['cracha'];
 $cracha_estado =$dado['cracha_estado'];
 $data =$dado['data'];

  $ventosa_possui =$dado['ventosa_possui'];
$ventosa_qtd =$dado['ventosa_qtd'];
 $ventosa_estado =$dado['ventosa_estado'];
 $organzacao =$dado['organzacao'];

  $foto_tec1 =$dado['foto_tec1'];
$foto_tec2 =$dado['foto_tec2'];
 $foto_carro_1 =$dado['carro_1'];
 $foto_carro_2 =$dado['carro_2'];



  }



$pagina = 
'


<html>

<body>




<img src="logo_sere.png" alt="" width="150" height="50"  > 
<h3 style="text-align: center;">FISCALIZAÇÃO IQF TECNICOS</h3>
<h5>TÉCNICO: <strong> '.$nome.'  </strong> </h5>
<h5>ID: '.$id.' </h5>
<h5>GA:'.$gestor.' </h5>
<h5>DATA: '.$data.'</h5> <br> <br>


<h4 >1: UNIFORME<h4/>
<table style="border: 1px solid black;">
    <thead>

      <tr>
       <th>UNIFORME..........</th>
        <th>TAMANHO..........</th>
        <th>QUANTIDADE.........</th>
        <th>TROCA</th>
     
       
      


      </tr>
    </thead>
    <tbody>
      

     
      <tr>
         <td>CAMISA </td>
        <td>'.$camisa_tam.' </td>
        <td> '.$camisa_qtd.'</td>
        <td>'.$capa_troca.'</td>
      
        
        
      </tr>

       <tr>
         <td>CALÇA </td>
        <td>'.$calca_tam.' </td>
        <td> '.$capa_qtd.'</td>
        <td>'.$calca_troca.'</td>
      
        
        
      </tr>

      <tr>
         <td>BOTA </td>
        <td>'.$bota_tam.'</td>
        <td> '.$bota_qtd.'</td>
        <td>'.$bota_troca.'</td>
      
        
        
      </tr>

      <tr>
         <td>JAQUETA </td>
        <td>'.$jaqueta_tam.'</td>
        <td> '.$jaqueta_qtd.'</td>
        <td>'.$jaqueta_troca.'</td>
      
        
        
      </tr>

      <tr>
         <td>CAPA CHUVA </td>
        <td>'.$capa_tam.' </td>
        <td> '.$capa_qtd.'</td>
        <td>'.$capa_troca.'</td>
      
        
        
      </tr>
     
    </tbody>
  </table><br>


  <h4>1:1 IDENTIFICAÇÃO<h4/>

  <table style="border: 1px solid black;">
    <thead>

      <tr>
       <th>TIPO..........</th>
        <th>POSSUI.........</th>
        <th>ESTADO</th>
       
     
       
      


      </tr>
    </thead>
    <tbody>
      

     
      <tr>
      <td>CRACHA</td>
         <td>'.$cracha.'</td>
        <td>'.$cracha_estado.'</td>
       
      
        
        
      </tr>


     
     
    </tbody>
  </table><br>


  <h4>2: CARRO:<h4/>
<table style="border: 1px solid black;">
    <thead>

      <tr>
        <th>ITEM....................</th>
        <th>POSSUI..........</th>
        <th>QUANTIDADE..........</th>
        <th>ESTADO</th>
     
       
      


      </tr>
    </thead>
    <tbody>
      

     
      <tr>
         <td>VENTOSA</td>
        <td>'.$ventosa_possui.'</td>
        <td> '.$ventosa_qtd.'</td>
        <td>'.$ventosa_estado.'</td>
      
        
        
      </tr>

       <tr>
           <td>ORGANIZAÇÃO</td>
        <td>'.$organzacao.'</td>
         <td></td>
          <td></td>
        
      
        
        
      </tr>

      

     
     
    </tbody>
  </table> <br>


<h4>2:1 DOCUMENTAÇÃO<h4/>
<table style="border: 1px solid black;">
    <thead>

      <tr>
        <th>CRLV..........</th>
        <th>ANO</th>
        
     
       
      


      </tr>
    </thead>
    <tbody>
      

     
      <tr>
         <td>'.$crlv.'</td>
        <td>'.$crlv_ano.'</td>
       
      
        
        
      </tr>

      

      

     
     
    </tbody>
  </table>
<br><br>
  <table style="border: 1px solid black;">
    <thead>

      <tr>
        <th>CNH...........</th>
        <th>VENCIMENTO</th>
        
     
       
      


      </tr>
    </thead>
    <tbody>
      

     
      <tr>
         <td>'.$cnh.'</td>
        <td>'.$cnh_vencimento.'</td>
       
      
        
        
      </tr>

      

      

     
     
    </tbody>
  </table>

  <br><br>

  <h5>OBSERVAÇÃO DO GA:<h5/> <br>
    <p  style="border: 1px solid black;"> '.$obs.'
</p><br><br><br><br>





  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h5>REGISTRO FOTOGRAFICO:<h5/> <br><br>	

  
 <img src="fotos/'.$foto_tec1.'" alt="" width="300" height="300"  >  
     <img src="fotos/'.$foto_tec2.'" alt="" width="300" height="300"  >  
     <br>  <br>  <br>
     <img src="fotos/'.$foto_carro_1.'" alt="" width="300" height="300"  >
     <img src="fotos/'.$foto_carro_2.'" alt="" width="300" height="300"  >

</body>
</html>




'	 ;

$footer = "<p style='font-size:10px;'>Comunicação de Dados –  Controle de Uniformes</p>";
$arquivo = "cadastro01.pdf"; 


$mpdf = new mPDF();

$stylesheet = file_get_contents('css/bootstrap.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->SetHTMLFooter($footer,"O");

 $mpdf -> WriteHTML($pagina);

$mpdf -> Output($arquivo, 'I');




























?>