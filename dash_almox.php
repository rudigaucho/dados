<?php include "conn.php"; include "pegardados_grafico.php" ?>


<?php 


session_start();
if(!isset($_SESSION["login"]) || ($_SESSION["acesso"] != 'GE' ) && ($_SESSION["acesso"] != 'ALMOX' ) )
{
  header("Location: index.html");
  exit;
  
  
}



 


?>



<!DOCTYPE html>
<html lang="en">

<head>

   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);
      google.charts.setOnLoadCallback(drawStuff2);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Quantidade'],
          ["JAN", <?php echo $jan ?>],
          ["FEV", <?php echo $fev ?>],
          ["MAR", <?php echo $mar ?>],
          ["ABR", <?php echo $abr ?>],
          ['MAI', <?php echo $mai ?>],
          ['JUN', <?php echo $jun ?>],
          ['JUL', <?php echo $jul ?>],
          ['AGO', <?php echo $ago ?>],
          ['SET', <?php echo $sete ?>],
          ['OUT', <?php echo $outu ?>],
          ['NOV', <?php echo $nov ?>],
          ['DEZ', <?php echo $dez ?>]
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Logistica Reversa',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: 'Reparados ano atual'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };


      function drawStuff2() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Quantidade'],
          ["2015", <?php echo $ANO_2015 ?> ],
          ["2016", <?php echo $ANO_2016 ?>],
          ["2017", <?php echo $ANO_2017 ?>],
          ["2018", <?php echo $ANO_2018 ?>],
          ["2019", <?php echo $ANO_2019 ?>],
         
          
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: '',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: 'Reparados anual '} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div2'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
        

</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADM</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->
   
  <link href="css/style.css" rel="stylesheet">


 <script src="jquery-min.js"></script>
 <script src="jquery-ui.js"></script>
 <script src="jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

    <!-- ///////PASTA BOOTSTRAP ////////////////////-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo $_SESSION["nome"]?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                      
                        <li>
                            <a href="modifica_senha.php"><i class="fa fa-fw fa-gear"></i> Trocar senha</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="almox.php"><i class="fa fa-fw fa-user"></i> CADASTRO</a>
                        <a href="pesq_almox.php"><i class="fa fa-fw fa-user"></i> PESQUISA EQP</a>
                        <a href="pesq_serie.php"><i class="fa fa-fw fa-user"></i> PESQUISA SERIE</a>
                    </li>
                   
                   
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Equipamentos</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

           
                <!-- /.row -->

                <div id="top_x_div" style="width: 400px; height: 300px;"></div><br><br>
                <div id="top_x_div2" style="width: 400px; height: 300px;"></div>









                <!-- /.row -->



               
              <p style="margin-right:9%; font-size: 10px;"><strong>© Copyright Serede S/A Desenvolvimento Rudinei Rossales  </strong></p>

</body>

</html>
