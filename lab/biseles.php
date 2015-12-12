<html lang="en">
<head>
<title>Informes Bisel</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lab.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/informes.css">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="css/report-print.css" type="text/css" media="print" />
<link href="https://fonts.googleapis.com/css?family=Michroma" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script src="js/lab.js"></script>
<script src="js/chart.js"></script>
<script src="js/donut.js"></script>
</head>


<body>

	<div class="container">
		<div class="row header">
			<div class="col-md-8">
				<img width="100%" align="center" src="../img/veotek-lab.png">	
			</div>
			<div class="col-md-4">
				
<?php
			include ('funciones.php');
							if (verificar_usuario()){
								print "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenido $_SESSION[login] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> ";
								print "<a href='salir.php'/> Cerrar Sesion</a> ";


							} else {
								header('Location:sesion.php');
							}

echo'			
			</div>
		</div>';

?>

		<div class="row">
			<div class="col-md-8 informes">
					<div id="reports" class="tab-pane fade in active reports ">
						<img width="10%" src="../img/veotek-lab.png">
						<h4 class="text-center">Biseles</h4>
						<canvas id="canvas" height="249" width="600"></canvas>
						<p class="text-center">
							<a href="informes-fecha.php"><button  type="submit" class="btn btn-default form-control">INFORMES POR FECHAS</button></a>
							<a href="informes-tecnico.php"><button  type="submit" class="btn btn-default form-control">INFORMES POR TECNICOS</button></a>
							<a href="informe-bisel.php"><button  type="submit" class="btn btn-default form-control">BISELES POR DIA</button></a>

						</p>
					</div>

					<?php
							$sdatea=date("Y-m-d");
							$sdateb=date("Y-m-d",strtotime("-1 days"));
							$sdatec=date("Y-m-d",strtotime("-2 days"));
							$sdated=date("Y-m-d",strtotime("-3 days"));
							$sdatee=date("Y-m-d",strtotime("-4 days"));
							$sdatef=date("Y-m-d",strtotime("-5 days"));
							$sdateg=date("Y-m-d",strtotime("-6 days"));

					?>
								

			<script>
			var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

			var barChartData = {
				labels : ["<?php echo $sdateg; ?>","<?php echo $sdatef; ?>","<?php echo $sdatee; ?>","<?php echo $sdated; ?>","<?php echo $sdatec; ?>","<?php echo $sdateb; ?>","<?php echo $sdatea; ?>"],
				datasets : [
					{
						fillColor : "rgba(220,220,220,0.5)",
						strokeColor : "rgba(220,220,220,0.8)",
						highlightFill: "rgba(220,220,220,0.75)",
						highlightStroke: "rgba(220,220,220,1)",
						data : [<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateg'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>,
								<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatef'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>,
								<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatee'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>,
								<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdated'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>,
								<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatec'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>,
								<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateb'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>,
								<?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatea'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>
								]
					}

				]

			}
			window.onload = function(){
				var ctx = document.getElementById("canvas").getContext("2d");
				window.myBar = new Chart(ctx).Bar(barChartData, {
					responsive : true
				});
			}
			<?php


			?>
			</script>
			<script type="text/javascript" src="https://www.google.com/jsapi"></script>
			    <script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateg' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateg' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateg' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateg' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdateg; ?>',
						//pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart-6'));
					chart.draw(data, options);
				}
			</script>


			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatef' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatef' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatef' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatef' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdatef; ?>',
						//pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart-5'));
					chart.draw(data, options);
				}
			</script>




			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatee' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatee' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatee' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatee' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdatee; ?>',
					//	pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart-4'));
					chart.draw(data, options);
				}
			</script>


			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdated' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdated' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdated' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdated' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdated; ?>',
					//	pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart-3'));
					chart.draw(data, options);
				}
			</script>


			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatec' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatec' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatec' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatec' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdatec; ?>',
					//	pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart-2'));
					chart.draw(data, options);
				}
			</script>



			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateb' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateb' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateb' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdateb' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdateb; ?>',
					//	pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart-1'));
					chart.draw(data, options);
				}
			</script>


			<script type="text/javascript">
				google.load("visualization", "1", {packages:["corechart"]});
				google.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Tecnico', 'Biseles'],
						['Sergio',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatea' and tecnico='Sergio'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
		                        			}
									?>],
						['Francisco',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatea' and tecnico='francisco'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Angel',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatea' and tecnico='Angel'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						['Jesus',     <?php
									include('connection.php');
		      						$queEmp = "SELECT count(*) as numero  FROM pedido where fecha='$sdatea' and tecnico='Jesus'";
		    						$resEmp = mysql_query($queEmp, $con) or die(mysql_error());
		    						$totEmp = mysql_num_rows($resEmp);
									 while ($rowEmp = mysql_fetch_assoc($resEmp)) {
									  echo $rowEmp['numero'];
									  
		                        			}
									?>],
						]);

					var options = {
						title: 'Biseles de <?php echo $sdatea; ?>',
					//	pieHole: 0.4,
						pieStartAngle: 125,
					};

					var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
					chart.draw(data, options);
				}
			</script>



			</div>
			<div class="col-md-4 menu">
				<div class="row">
					<ul>
						<li>
							<p class="text-center"><a href="seleccionar-pedido.php"><span class="glyphicon glyphicon-list-alt select" style="font-size:44px;"></span></a><br>
	                        Modificar Pedidos</p>
						</li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-6">
						<ul>
							<ul>
							<li>
								<p class="text-center"><a href="index.php"><span class="glyphicon glyphicon-home" style="font-size:44px;"></span></a><br>
								Home</p>
							</li>
							<li>
								<p class="text-center"><a href="articulos.php"><span class="glyphicon glyphicon-file" style="font-size:44px;"></span></a><br>
								Articulos</p>
							</li>
							<li>
								<p class="text-center"><a href="alta.php"><span class="glyphicon glyphicon-log-in" style="font-size:44px;"></span></a><br>
		                        Entradas</p>
							</li>
							<li>
								<p class="text-center"><a href="baja.php"><span class="glyphicon glyphicon-log-out" style="font-size:44px;"></span></a><br>
		                        Salidas</p>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul>
							<li>
								<p class="text-center"><a href="modificar.php"><span class="glyphicon glyphicon-refresh" style="font-size:44px;"></span></a><br>
		                        Modificar</p>
							</li>
							<li>
								<p class="text-center"><a href="pedidos.php"><span class="glyphicon glyphicon-list-alt" style="font-size:44px;"></span></a><br>
		                        Pedidos</p>
							</li>
							<li>
								<p class="text-center"><a href="informes.php"><span class="glyphicon glyphicon-folder-open" style="font-size:44px;"></span></a><br>
		                        Informes</php>
							</li>
							<li>
								<p class="text-center"><a href="busqueda.php"><span class="glyphicon glyphicon-search" style="font-size:44px;"></span></a><br>
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


