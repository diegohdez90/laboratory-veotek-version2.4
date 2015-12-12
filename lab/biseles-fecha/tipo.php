<html lang="en">
<head>
<title>Informes Bisel</title>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/lab.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/informes.css">
<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="../css/print-bisel.css" type="text/css" media="print" />
<link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../js/lab.js"></script>
</head>


<body>

	<div class="container">
		<div class="row header">
			<div class="col-md-8">
				<img width="100%" align="center" src="../../img/veotek-lab.png">	
			</div>
			<div class="col-md-4">
				
<?php

$fecha=$_GET['fecha'];
$completos = $_GET['completos'];
$ranurados = $_GET['ranurados'];
$tresPiezas = $_GET['tresPiezas'];

$cr39 = $_GET['cr39'];
$poly = $_GET['poly'];
$hi_index = $_GET['hiindex'];
$cristal = $_GET['cristal'];

$progresivo = $_GET['progresivo'];
$monofocal = $_GET['monofocal'];
$ft = $_GET['ft'];
$blend = $_GET['blend'];

$w = $_GET['w'];
$ar = $_GET['ar'];
$foto = $_GET['foto'];
$transitions = $_GET['transitions'];
$crizal = $_GET['crizal'];
$transitions_crizal = $_GET['transitions_crizal'];
$arfoto = $_GET['arFoto'];
$polarizado = $_GET['polarizado'];
$polarizado_ar = $_GET['polarizado_ar'];

$fecha = $_GET['fecha'];
$terminado = $_GET['terminado'];
$procesado = $_GET['procesado'];
$rebisel = $_GET['rebisel'];

$sergio = $_GET['sergio'];
$jorge = $_GET['jorge'];
$angel = $_GET['angel'];
$francisco = $_GET['francisco'];


			include ('../funciones.php');
							if (verificar_usuario()){
								print "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenido $_SESSION[login] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> ";
								print "<a href='../salir.php'/> Cerrar Sesion</a> ";


							} else {
								header('Location:../sesion.php');
							}

echo'			
			</div>
		</div>';

?>
		<div class="row">
			<div class="col-md-8 informes">
				<div class="reports">
					<div id="donutchart" style="width: 770px; height: 450px;"></div>
				</div>
				<div class="row change-page">
					<ul class="pagination" style="font-size:10px;margin-left:20px;">
			            <li class="armazon"><a href="armazon.php?fecha=<?php echo $fecha; ?>&amp;ranurados=<?php echo $ranurados;?>&amp;completos=<?php echo $completos?>&amp;tresPiezas=<?php echo $tresPiezas;?>&amp;monofocal=<?php echo $monofocal;?>&amp;progresivo=<?php echo $progresivo;?>&amp;ft=<?php echo $ft;?>&amp;blend=<?php echo $blend;?>&amp;cr39=<?php echo $cr39; ?>&amp;poly=<?php echo $poly; ?>&amp;hiindex=<?php echo $hi_index; ?>&amp;cristal=<?php echo $cristal; ?>&amp;w=<?php echo $w; ?>&amp;ar=<?php echo $ar; ?>&amp;foto=<?php echo $foto; ?>&amp;transitions=<?php echo $transitions; ?>&amp;crizal=<?php echo $crizal; ?>&amp;transitions_crizal=<?php echo $transitions_crizal; ?>&amp;arFoto=<?php echo $arfoto; ?>&amp;polarizado=<?php echo $polarizado; ?>&amp;polarizado_ar=<?php echo $polarizado_ar; ?>&amp;terminado=<?php echo $terminado; ?>&amp;procesado=<?php echo $procesado; ?>&amp;rebisel=<?php echo $rebisel; ?>&amp;sergio=<?php echo $sergio; ?>&amp;angel=<?php echo $angel; ?>&amp;francisco=<?php echo $francisco; ?>&amp;jorge=<?php echo $jorge; ?>">Armazones</a></li>
			            <li class="micas"><a href="micas.php?fecha=<?php echo $fecha; ?>&amp;ranurados=<?php echo $ranurados;?>&amp;completos=<?php echo $completos?>&amp;tresPiezas=<?php echo $tresPiezas;?>&amp;monofocal=<?php echo $monofocal;?>&amp;progresivo=<?php echo $progresivo;?>&amp;ft=<?php echo $ft;?>&amp;blend=<?php echo $blend;?>&amp;cr39=<?php echo $cr39; ?>&amp;poly=<?php echo $poly; ?>&amp;hiindex=<?php echo $hi_index; ?>&amp;cristal=<?php echo $cristal; ?>&amp;w=<?php echo $w; ?>&amp;ar=<?php echo $ar; ?>&amp;foto=<?php echo $foto; ?>&amp;transitions=<?php echo $transitions; ?>&amp;crizal=<?php echo $crizal; ?>&amp;transitions_crizal=<?php echo $transitions_crizal; ?>&amp;arFoto=<?php echo $arfoto; ?>&amp;polarizado=<?php echo $polarizado; ?>&amp;polarizado_ar=<?php echo $polarizado_ar; ?>&amp;terminado=<?php echo $terminado; ?>&amp;procesado=<?php echo $procesado; ?>&amp;rebisel=<?php echo $rebisel; ?>&amp;sergio=<?php echo $sergio; ?>&amp;angel=<?php echo $angel; ?>&amp;francisco=<?php echo $francisco; ?>&amp;jorge=<?php echo $jorge; ?>">Micas</a></li>
			            <li class="materiales"><a href="materiales.php?fecha=<?php echo $fecha; ?>&amp;ranurados=<?php echo $ranurados;?>&amp;completos=<?php echo $completos?>&amp;tresPiezas=<?php echo $tresPiezas;?>&amp;monofocal=<?php echo $monofocal;?>&amp;progresivo=<?php echo $progresivo;?>&amp;ft=<?php echo $ft;?>&amp;blend=<?php echo $blend;?>&amp;cr39=<?php echo $cr39; ?>&amp;poly=<?php echo $poly; ?>&amp;hiindex=<?php echo $hi_index; ?>&amp;cristal=<?php echo $cristal; ?>&amp;w=<?php echo $w; ?>&amp;ar=<?php echo $ar; ?>&amp;foto=<?php echo $foto; ?>&amp;transitions=<?php echo $transitions; ?>&amp;crizal=<?php echo $crizal; ?>&amp;transitions_crizal=<?php echo $transitions_crizal; ?>&amp;arFoto=<?php echo $arfoto; ?>&amp;polarizado=<?php echo $polarizado; ?>&amp;polarizado_ar=<?php echo $polarizado_ar; ?>&amp;terminado=<?php echo $terminado; ?>&amp;procesado=<?php echo $procesado; ?>&amp;rebisel=<?php echo $rebisel; ?>&amp;sergio=<?php echo $sergio; ?>&amp;angel=<?php echo $angel; ?>&amp;francisco=<?php echo $francisco; ?>&amp;jorge=<?php echo $jorge; ?>">Materiales</a></li>
			            <li class="tratamiento"><a href="tratamiento.php?fecha=<?php echo $fecha; ?>&amp;ranurados=<?php echo $ranurados;?>&amp;completos=<?php echo $completos?>&amp;tresPiezas=<?php echo $tresPiezas;?>&amp;monofocal=<?php echo $monofocal;?>&amp;progresivo=<?php echo $progresivo;?>&amp;ft=<?php echo $ft;?>&amp;blend=<?php echo $blend;?>&amp;cr39=<?php echo $cr39; ?>&amp;poly=<?php echo $poly; ?>&amp;hiindex=<?php echo $hi_index; ?>&amp;cristal=<?php echo $cristal; ?>&amp;w=<?php echo $w; ?>&amp;ar=<?php echo $ar; ?>&amp;foto=<?php echo $foto; ?>&amp;transitions=<?php echo $transitions; ?>&amp;crizal=<?php echo $crizal; ?>&amp;transitions_crizal=<?php echo $transitions_crizal; ?>&amp;arFoto=<?php echo $arfoto; ?>&amp;polarizado=<?php echo $polarizado; ?>&amp;polarizado_ar=<?php echo $polarizado_ar; ?>&amp;terminado=<?php echo $terminado; ?>&amp;procesado=<?php echo $procesado; ?>&amp;rebisel=<?php echo $rebisel; ?>&amp;sergio=<?php echo $sergio; ?>&amp;angel=<?php echo $angel; ?>&amp;francisco=<?php echo $francisco; ?>&amp;jorge=<?php echo $jorge; ?>">Tratamiento</a></li>
			            <li class="tipos active pagination"><a href="#">Tipos</a></li>
			            <li class="tecnicos"><a href="tecnicos.php?fecha=<?php echo $fecha; ?>&amp;ranurados=<?php echo $ranurados;?>&amp;completos=<?php echo $completos?>&amp;tresPiezas=<?php echo $tresPiezas;?>&amp;monofocal=<?php echo $monofocal;?>&amp;progresivo=<?php echo $progresivo;?>&amp;ft=<?php echo $ft;?>&amp;blend=<?php echo $blend;?>&amp;cr39=<?php echo $cr39; ?>&amp;poly=<?php echo $poly; ?>&amp;hiindex=<?php echo $hi_index; ?>&amp;cristal=<?php echo $cristal; ?>&amp;w=<?php echo $w; ?>&amp;ar=<?php echo $ar; ?>&amp;foto=<?php echo $foto; ?>&amp;transitions=<?php echo $transitions; ?>&amp;crizal=<?php echo $crizal; ?>&amp;transitions_crizal=<?php echo $transitions_crizal; ?>&amp;arFoto=<?php echo $arfoto; ?>&amp;polarizado=<?php echo $polarizado; ?>&amp;polarizado_ar=<?php echo $polarizado_ar; ?>&amp;terminado=<?php echo $terminado; ?>&amp;procesado=<?php echo $procesado; ?>&amp;rebisel=<?php echo $rebisel; ?>&amp;sergio=<?php echo $sergio; ?>&amp;angel=<?php echo $angel; ?>&amp;francisco=<?php echo $francisco; ?>&amp;jorge=<?php echo $jorge; ?>">T&eacute;cnicos</a></li>    

					</ul>
				</div>

			</div>

								

			<script type="text/javascript" src="https://www.google.com/jsapi"></script>


			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tipo', 'Total'],
						['Terminado',<?php echo $terminado;?>],
						['Procesado',<?php echo $procesado;?>],
						['Rebisel',<?php echo $rebisel;?>],
						]);
					var options = {
						title: 'Tipos de <?php echo $fecha; ?>',
					//	pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
					chart.draw(data, options);
				}
			</script>



			<div class="col-md-4 menu">
				<div class="row">
					<ul>
						<li>
							<p class="text-center"><a href="../seleccionar-pedido.php"><span class="glyphicon glyphicon-list-alt select" style="font-size:44px;"></span></a><br>
	                        Modificar Pedidos</p>
						</li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-6">
						<ul>
							<ul>
							<li>
								<p class="text-center"><a href="../index.php"><span class="glyphicon glyphicon-home" style="font-size:44px;"></span></a><br>
								Home</p>
							</li>
							<li>
								<p class="text-center"><a href="../articulos.php"><span class="glyphicon glyphicon-file" style="font-size:44px;"></span></a><br>
								Articulos</p>
							</li>
							<li>
								<p class="text-center"><a href="../alta.php"><span class="glyphicon glyphicon-log-in" style="font-size:44px;"></span></a><br>
		                        Entradas</p>
							</li>
							<li>
								<p class="text-center"><a href="../baja.php"><span class="glyphicon glyphicon-log-out" style="font-size:44px;"></span></a><br>
		                        Salidas</p>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul>
							<li>
								<p class="text-center"><a href="../modificar.php"><span class="glyphicon glyphicon-refresh" style="font-size:44px;"></span></a><br>
		                        Modificar</p>
							</li>
							<li>
								<p class="text-center"><a href="../pedidos.php"><span class="glyphicon glyphicon-list-alt" style="font-size:44px;"></span></a><br>
		                        Pedidos</p>
							</li>
							<li>
								<p class="text-center"><a href="../informes.php"><span class="glyphicon glyphicon-folder-open" style="font-size:44px;"></span></a><br>
		                        Informes</php>
							</li>
							<li>
								<p class="text-center"><a href="../busqueda.php"><span class="glyphicon glyphicon-search" style="font-size:44px;"></span></a><br>
		                        Busqueda</p>
							</li>
							<li>
								<p class="text-center"><span onclick="window.print()" class="glyphicon glyphicon-print" style="font-size:44px;"></span></a><br>
		                        Imprimir</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>




