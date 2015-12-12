
<html lang="en">
<head>
<title>Biseles Modificados</title>
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

$fecha=$_GET['date'];
$fecha2=$_GET['date2'];

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
				<h4>Biseles modificados del <?php echo $fecha; ?> al <?php echo $fecha2; ?></h4>

				<?php
					include('../connection.php');

					$cant = "SELECT count(*) as numero  FROM pedido where fecha>='$fecha' and fecha<='$fecha2' and motivos!=''";
					$result = mysql_query($cant, $con) or die(mysql_error());
					 while ($rs = mysql_fetch_assoc($result)) {
					  echo "Cantidad: ".$rs['numero'];
	            	}
	            	?>
	            	<table class="table">
	            		<tr>
	            			<th>Folio</th>
	            			<th>Referencia</th>
	            			<th>Fecha</th>
	            			<th>Motivos</th>
	            		</tr>
	            	<?php
					$cant = "SELECT *  FROM pedido where fecha>='$fecha' and fecha<='$fecha2' and motivos!=''";
					$result = mysql_query($cant, $con) or die(mysql_error());
					 while ($rs = mysql_fetch_assoc($result)) {
					  echo "<tr>";
					  echo "<td>: ".$rs['folio']."</td>";
					  echo "<td>: ".$rs['ref']."</td>";
					  echo "<td>: ".$rs['fecha']."</td>";
					  echo "<td>: ".$rs['motivos']."</td>";
					  echo "</tr>";
	            	}					

				?>
					</table>
	            	
			</div>


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



