<?php
session_start();
require "conn.php";
require "dbclass.php";
$db = new DB_functions();
$type = $_POST['submit'];

if ($type == "Allenamento"){
	$trainings = $db->getAllTrainingsNoDupl($conn);
}
else $trainings = $db->getTrainingsPerTypeNoDupl($type,$conn);
$length = mysqli_num_rows($trainings);
?>

<!-- Utilizzo l'iframe in modo da poter visualizzare le diverse schede sulla stessa pagina "allenamento.php" -->
<!DOCTYPE="html">
<!-- Your Own Fitness - Page: Allenamento -->
<html lang="it"> <!-- HTML Language, lo si mette per default -->
	<head>
		<!-- Intestazione, dichiariamo i meta dati (N.B. keywords non necessari) -->
    <title> Your Own Fitness - Allenamento </title>
		<meta name="author" content="Francesco Barletta" />
		<meta name="description" content="Your Own Fitness (YOF) - Allenamento" />
		<meta name="keywords" content="fitness" />
		<!-- File .css external, messo nella repository css/style.css -->
	 	<link rel="stylesheet" type="text/css" href="css/styles.css">

	 	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	   <!-- Latest compiled and minified CSS -->
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	   <!-- Optional theme -->
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	   <!-- Latest compiled and minified JavaScript -->
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>

		<!-- Container per il cookie -->
		<link rel="stylesheet" href="purecookie.css"/>
		<script src="purecookie.js"></script>

 </head>
 <body>
<!-- Testata del sito, Logo del sito -->
<header>
<?php if (($_SESSION['login'] != "done")): ?>
	<div class="Login"> <!-- Percorso per la registrazione -->
		<a href="login.php" style="color: black; text-decoration: none" title="Clicca per il login">
		Login
	</a></div>

	<img class="Logo" width="10%" src="images/logo.png" alt="Il logo andrà qui"/>
<?php endif; ?>
<?php if ($_SESSION['login'] == "done"): ?>
	<div class="Login"> <!-- Percorso per la registrazione -->
		<a href="logout.php" style="color: black; text-decoration: none" title="Clicca per il login">
		Logout
	</a></div>
	<img class="Logo" width="10%" src="images/logo.png" alt="Il logo andrà qui"/>
<?php endif; ?>
</header>

<!-- Menù del sito, realizzato come tendina a comparsa verso il basso -->
<!-- Menù del sito, realizzato come tendina a comparsa verso il basso -->
<nav>
	<ul>
		<!-- Home -->
		<li><form id="homeform" action="index.php" method="get">
			<input class="submit2" type="submit" name="submit" id="homesubmit" value="Home">
		</form></li>

		<!-- Menù a tendina -->
		<li class="dropdown">

		<!-- Allenamento -->
		<form id="allenamentoform" action="#" method="post">
				<input class="submit2" type="submit" name="submit" id="allenamentosubmit" value="Allenamento">

			<div class="dropdown-content1">

				<input class="submit3" type="submit" name='submit' id="cardiosubmit" value="Cardio">
				<hr>

				<input class="submit3" type="submit" name='submit' id="pesisubmit" value="Pesi">
				<hr>

				<input class="submit3" type="submit" name='submit' id="clsubmit" value="Corpo Libero">
				<hr>
				</script>
			</div>
		</form>
		</li>
		<!-- Fine menù a tendina -->

		<!-- Calcolo IMC -->
		<li><form id="imcform" action="imc.php" method="get">
			<input class="submit2" type="submit" name="submit1" id="imcsubmit" value="Calcolo IMC">
		</form></li>

		<!-- Diete -->
		<li><form id="dieteform" action="diete.php" method="get">
			<input class="submit2" type="submit" name="submit1" id="dietesubmit" value="Diete">
		</form></li>

		<!-- Consulenze -->
		<li><form id="imcform" action="consulenza.php" method="get">
			<input class="submit2" type="submit" name="submit1" id="consulenzasubmit" value="Consulenze">
		</form></li>

		<!-- Contatti -->
		<li><form id="imcform" action="contatti.php" method="get">
			<input class="submit2" type="submit" name="submit1" id="imcsubmit" value="Contatti">
		</form></li>

		<!-- Vecchio menù a tendina
		<li><a href="imc.php">Calcolo IMC</a></li>
		<li><a href="diete.php">Diete</a></li>
		<li><a href="consulenza.php">Consulenze</a></li>
		<li><a href="contatti.php">Contatti</a></li> -->
	</ul>
</nav>

	<div id="content">
		 <div id="front1">
			 <h1 style="margin-left: 14px; color: rgb(192, 109, 26)">
				 Your Own Fitness, la scelta <br>giusta per il tuo fisico!
			 </h1>
		 </div>
	</div>


	<?php if(isset($_SESSION['email'])): $my_trainings = $db->getAllTrainingsByUser($_SESSION['email'],$conn);
		if(mysqli_num_rows($my_trainings)>0):?>
	<div id="Presentation">
		<h1> I TUOI ALLENAMENTI</h1>
		<?php
		for($x=0; $x<mysqli_num_rows($my_trainings) ;$x++){ $training = mysqli_fetch_row($my_trainings);?>
			<div class="panel panel-info">
      		<div class="panel-heading"><?php echo "NOME SCHEDA: ".$training[1];?></div>
      		<div class="panel-body">
		  	<a> COMPLETAMENTO SCHEDA
			 </a>
		  <div style=" width: 100%;
   	    background-color: #ddd;" id="<?php echo "myProgress".$training[3]."%";?>">
		<div style="width: <?php echo $training[3]?>%;
		height: 30px;
		background-color: #04AA6D;" id="<?php echo "myBar".$x;?>"></div>
 			</div>
			<form id='my_training<?php echo $x;?>' method='post'>
 			<br>
			<input type='hidden' name='email' value = "<?php echo $_SESSION['email'];?>">
			<input type='hidden' name='allenamento' value = "<?php echo $training[1];?>">
 			<button type="button" class="btn btn-outline-primary" id = 'button_progress<?php echo $x;?>' onclick="move()">Update Progress</button>
			</form>
	  </div>
    </div>
		<?php } ?>
</div>
<?php endif; endif; ?>
		<!-- Qui andranno le varie schede di allenamento attraverso l'iframe. Utilizzare4 iframe anche per linkare i video tutorial di determinati esercizi su YouTube -->


		<div id="Presentation">
		<?php if (($_POST['submit'] == "Cardio") || ($_POST['submit'] == "Allenamento")): ?>
<?php if($_POST['submit'] == "Allenamento"): $trainings = $db->getTrainingsPerTypeNoDupl("Cardio",$conn); $length = mysqli_num_rows($trainings); endif; ?>
<h1><a name= "CARDIO"><p class="w3-container" style="color:rgb(192, 109, 26);text-align:center"><strong>CARDIO</strong></p></a></h1>

			<div>
				<!-- Qui vanno gli allenamenti -->

				<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators" style="align-content: center;">
					<li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
					<?php for ($x = 1; $x < $length; $x++){?>
					<li data-target="#carousel-example-generic2" data-slide-to="<?php echo $x;?>"></li>
					<?php } ?>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">

					<div class="item active">
					<div class='container' style='width:500px; height:30% '>
						<h1 id = "nome"><?php $train = mysqli_fetch_row($trainings); echo "Allenamento: ". strtoupper($train[0]); ?></h1>
						<form id='my_training_<?php echo str_replace(' ', '', $train[0]);?>' method='post'>
						<input type='hidden' name='email' value = "<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?>">
						<input type='hidden' name='allenamento' value = "<?php echo $train[0];?>">
						<button type="button"class="btn btn-primary"  style='height: 60px; width: 50%; left: 200px' id ='button_<?php echo str_replace(' ', '', $train[0]);?>'>SELEZIONA E REGISTRA</button>
						</form>
					</div>
						<img class="w3-image" src="./images/CARDIO1.jpg" style="width:100%" >
						<table class="table table-hover table-dark">
							<thead>
								<tr>
								<th scope="col" class="bg-warning">ESERCIZIO</th>
								<th scope="col" class="bg-warning">PESO</th>
	    						<th scope="col"class="bg-warning">SERIE</th>
	    						<th scope="col"class="bg-warning">RIPETIZIONI</th>
	    						<th scope="col"class="bg-warning">DURATA</th>
								<th scope="col"class="bg-warning">WEEK</th>
							</tr>
						</thead>
						<?php
						$schede = $db->getAllTrainingsByName($train[0],$conn);
						for ($x = 0; $x < mysqli_num_rows($schede); $x++){
							$resrow = mysqli_fetch_row($schede);

							$esercizio = $resrow[3];
							$peso = $resrow[4];
							$serie = $resrow[5];
							$ripetizioni = $resrow[6];
							$durata = $resrow[2];
						?>
						<tbody>
						<tr>
						<th scope = "row"class="bg-warning"><?php echo $esercizio;?></th>
						<td class="bg-warning"><?php echo $peso;?></td>
						<td class="bg-warning"><?php echo $serie;?></td>
						<td class="bg-warning"><?php echo $ripetizioni;?></td>
						<td class="bg-warning"><?php echo $durata;?></td>
						</tr><?php }?>
						</tbody>
						</table>

					  <div class="carousel-caption">

					</div>
					</div>
					<?php for ($x = 1; $x < mysqli_num_rows($trainings); $x++){ $train = mysqli_fetch_row($trainings); ?>
					<div class="item">
					<div class='container' style='width:500px; height:30% '>
						<h1 id = "nome"><?php echo "Allenamento: ". strtoupper($train[0]); ?></h1>
						<form id='my_training_<?php echo str_replace(' ', '', $train[0]);?>' method='post'>
						<input type='hidden' name='email' value = "<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?>">
						<input type='hidden' name='allenamento' value = "<?php echo $train[0];?>">
						<button type="button"class="btn btn-primary"  style='height: 60px; width: 50%; left: 200px' id ='button_<?php echo str_replace(' ', '', $train[0]);?>'>SELEZIONA E REGISTRA</button>
						</form>
					</div>
					<img class="w3-image" src="./images/CARDIO1.jpg" style="width:100%">

					<table class="table table-hover table-dark">
						<thead>
							<tr>
							<th scope="col" class="bg-warning">ESERCIZIO</th>
							<th scope="col" class="bg-warning">PESO</th>
    						<th scope="col"class="bg-warning">SERIE</th>
    						<th scope="col"class="bg-warning">RIPETIZIONI</th>
    						<th scope="col"class="bg-warning">DURATA</th>
							<th scope="col"class="bg-warning">WEEK</th>
						</tr>
					</thead>
						<?php
						$schede = $db->getAllTrainingsByName($train[0],$conn);
						for ($x1 = 0; $x1 < mysqli_num_rows($schede); $x1++){
							$resrow = mysqli_fetch_row($schede);

							$esercizio = $resrow[3];
							$peso = $resrow[4];
							$serie = $resrow[5];
							$ripetizioni = $resrow[6];
							$durata = $resrow[2];
						?>
						<tbody>
						<tr>
						<th scope = "row"class="bg-warning"><?php echo $esercizio;?></th>
						<td class="bg-warning"><?php echo $peso;?></td>
						<td class="bg-warning"><?php echo $serie;?></td>
						<td class="bg-warning"><?php echo $ripetizioni;?></td>
						<td class="bg-warning"><?php echo $durata;?></td>
						</tr><?php }?>
						</tbody>
						</table>
					<div class="carousel-caption">
					</div>
					</div>
					<?php }?>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				  <!-- <button type="button"class="w3-btn w3-ripple w3-orange" style="align-items:center;height: 1%; width: 100%" data-toggle="modal" data-target="#Mymodal"> </button> -->
				</div>

		</div>
<?php endif; ?>
		<?php if (($_POST['submit'] == "Pesi") || ($_POST['submit'] == "Allenamento")): ?>
			<?php if($_POST['submit'] == "Allenamento"): $trainings = $db->getTrainingsPerTypeNoDupl("Pesi",$conn); $length = mysqli_num_rows($trainings); endif; ?>
			<h1><a name= "PESI"><p class="w3-container" style="color:rgb(192, 109, 26);text-align:center"><strong>ALLENAMENTO CON I PESI</strong></p></a></h1>

			<div>
				<!-- Qui vanno gli allenamenti -->

				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators" style="align-content: center;">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<?php for ($x = 1; $x < $length; $x++){?>
					<li data-target="#carousel-example-generic" data-slide-to="<?php echo $x;?>"></li>
					<?php } ?>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">

					<div class="item active">
							<div class='container' style='width:500px; height:30% '>
								<h1 id = "nome"><?php $train = mysqli_fetch_row($trainings); echo "Allenamento: ". strtoupper($train[0]); ?></h1>
								<form id='my_training_<?php echo str_replace(' ', '', $train[0]);?>' method='post'>
								<input type='hidden' name='email' value = "<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?>">
								<input type='hidden' name='allenamento' value = "<?php echo $train[0];?>">
								<button type="button"class="btn btn-primary"  style='height: 60px; width: 50%; left: 200px' id ='button_<?php echo str_replace(' ', '', $train[0]);?>'>SELEZIONA E REGISTRA</button>
								</form>
						</div>

						<img class="w3-image" src="./images/PESI.jpg" style="width:100%" >
						<table class="table table-hover table-dark">
							<thead>
								<tr>
								<th scope="col" class="bg-warning">ESERCIZIO</th>
								<th scope="col" class="bg-warning">PESO</th>
	    						<th scope="col"class="bg-warning">SERIE</th>
	    						<th scope="col"class="bg-warning">RIPETIZIONI</th>
	    						<th scope="col"class="bg-warning">DURATA</th>
								<th scope="col"class="bg-warning">WEEK</th>
							</tr>
						</thead>
						<?php
						$schede = $db->getAllTrainingsByName($train[0],$conn);
						for ($x = 0; $x < mysqli_num_rows($schede); $x++){
							$resrow = mysqli_fetch_row($schede);

							$esercizio = $resrow[3];
							$peso = $resrow[4];
							$serie = $resrow[5];
							$ripetizioni = $resrow[6];
							$durata = $resrow[2];
						?>
						<tbody>
						<tr>
						<th scope = "row"class="bg-warning"><?php echo $esercizio;?></th>
						<td class="bg-warning"><?php echo $peso;?></td>
						<td class="bg-warning"><?php echo $serie;?></td>
						<td class="bg-warning"><?php echo $ripetizioni;?></td>
						<td class="bg-warning"><?php echo $durata;?></td>
						</tr><?php }?>
						</tbody>
						</table>
					  <div class="carousel-caption">
					</div>
					</div>
					<?php for ($x = 1; $x < mysqli_num_rows($trainings); $x++){ $train = mysqli_fetch_row($trainings); ?>
					<div class="item">
						<div class='container' style='width:500px; height:30% '>
							<h1 id = "nome"><?php echo "Allenamento: ". strtoupper($train[0]); ?></h1>
							<form id='my_training_<?php echo str_replace(' ', '', $train[0]);?>' method='post'>
							<input type='hidden' name='email' value = "<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?>">
							<input type='hidden' name='allenamento' value = "<?php echo $train[0];?>">
							<button type="button"class="btn btn-primary"  style='height: 60px; width: 50%; left: 200px' id ='button_<?php echo str_replace(' ', '', $train[0]);?>'>SELEZIONA E REGISTRA</button>
							</form>
					</div>
					<img class="w3-image" src="./images/PESI.jpg" style="width:100%">
					<table class="table table-hover table-dark">
						<thead>
							<tr>
							<th scope="col" class="bg-warning">ESERCIZIO</th>
							<th scope="col" class="bg-warning">PESO</th>
    						<th scope="col"class="bg-warning">SERIE</th>
    						<th scope="col"class="bg-warning">RIPETIZIONI</th>
    						<th scope="col"class="bg-warning">DURATA</th>
							<th scope="col"class="bg-warning">WEEK</th>
						</tr>
					</thead>
						<?php
						$schede = $db->getAllTrainingsByName($train[0],$conn);
						for ($x1 = 0; $x1 < mysqli_num_rows($schede); $x1++){
							$resrow = mysqli_fetch_row($schede);

							$esercizio = $resrow[3];
							$peso = $resrow[4];
							$serie = $resrow[5];
							$ripetizioni = $resrow[6];
							$durata = $resrow[2];
						?>
						<tbody>
						<tr>
						<th scope = "row"class="bg-warning"><?php echo $esercizio;?></th>
						<td class="bg-warning"><?php echo $peso;?></td>
						<td class="bg-warning"><?php echo $serie;?></td>
						<td class="bg-warning"><?php echo $ripetizioni;?></td>
						<td class="bg-warning"><?php echo $durata;?></td>
						</tr><?php }?>
						</tbody>
						</table>

				  <div class="carousel-caption">
					</div>
					</div>
					<?php }?>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				  <!-- <button type="button"class="w3-btn w3-ripple w3-orange" style="align-items:center;height: 1%; width: 100%" data-toggle="modal" data-target="#Mymodal"> </button> -->
				</div>

		</div>
		<?php endif; ?>

	<?php if (($_POST['submit'] == "Corpo Libero") || ($_POST['submit'] == "Allenamento")): ?>
		<?php if($_POST['submit'] == "Allenamento"): $trainings = $db->getTrainingsPerTypeNoDupl("Corpo Libero",$conn); $length = mysqli_num_rows($trainings);endif; ?>
	<h1><a name= "CORPO LIBERO"><p class="w3-container" style="color:rgb(192, 109, 26);text-align:center"><strong>CORPO LIBERO</strong></p></a></h1>

			<div>
				<!-- Qui vanno gli allenamenti -->

				<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators" style="align-content: center;">
					<li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
					<?php for ($x = 1; $x < $length; $x++){?>
					<li data-target="#carousel-example-generic1" data-slide-to="<?php echo $x;?>"></li>
					<?php } ?>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">

					<div class="item active">
						<div class='container' style='width:500px; height:30% '>
							<h1 id = "nome"><?php $train = mysqli_fetch_row($trainings); echo "Allenamento: ". strtoupper($train[0]); ?></h1>
							<form id='my_training_<?php echo str_replace(' ', '', $train[0]);?>' method='post'>
							<input type='hidden' name='email' value = "<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?>">
							<input type='hidden' name='allenamento' value = "<?php echo $train[0];?>">
							<button type="button"class="btn btn-primary"  style='height: 60px; width: 50%; left: 200px' id ='button_<?php echo str_replace(' ', '', $train[0]);?>'>SELEZIONA E REGISTRA</button>
							</form>
					</div>
						<img class="w3-image" src="./images/CORPOLIBERO2.jpg" style="width:100%" >
						<table style="width: 100%">
							<table class="table table-hover table-dark">
								<thead>
									<tr>
									<th scope="col" class="bg-warning">ESERCIZIO</th>
									<th scope="col" class="bg-warning">PESO</th>
		    						<th scope="col"class="bg-warning">SERIE</th>
		    						<th scope="col"class="bg-warning">RIPETIZIONI</th>
		    						<th scope="col"class="bg-warning">DURATA</th>
									<th scope="col"class="bg-warning">WEEK</th>
								</tr>
							</thead>
						<?php
						$schede = $db->getAllTrainingsByName($train[0],$conn);
						for ($x = 0; $x < mysqli_num_rows($schede); $x++){
							$resrow = mysqli_fetch_row($schede);

							$esercizio = $resrow[3];
							$peso = $resrow[4];
							$serie = $resrow[5];
							$ripetizioni = $resrow[6];
							$durata = $resrow[2];
						?>
						<tbody>
						<tr>
						<th scope = "row"class="bg-warning"><?php echo $esercizio;?></th>
						<td class="bg-warning"><?php echo $peso;?></td>
						<td class="bg-warning"><?php echo $serie;?></td>
						<td class="bg-warning"><?php echo $ripetizioni;?></td>
						<td class="bg-warning"><?php echo $durata;?></td>
						</tr><?php }?>
						</tbody>
						</table>
					</div>
					<?php for ($x = 1; $x < mysqli_num_rows($trainings); $x++){ $train = mysqli_fetch_row($trainings); ?>
					<div class="item">
						<div class='container' style='width:500px; height:30% '>
							<h1 id = "nome"><?php echo "Allenamento: ". strtoupper($train[0]); ?></h1>
							<form id='my_training_<?php echo str_replace(' ', '', $train[0]);?>' method='post'>
							<input type='hidden' name='email' value = "<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}?>">
							<input type='hidden' name='allenamento' value = "<?php echo $train[0];?>">
							<button type="button"class="btn btn-primary"  style='height: 60px; width: 50%; left: 200px' id ='button_<?php echo str_replace(' ', '', $train[0]);?>'>SELEZIONA E REGISTRA</button>
							</form>
					</div>

					<img class="w3-image" src="./images/CORPOLIBERO2.jpg" style="width:100%">
					<table style="width: 100%">
						<table class="table table-hover table-dark">
							<thead>
								<tr>
								<th scope="col" class="bg-warning">ESERCIZIO</th>
								<th scope="col" class="bg-warning">PESO</th>
	    						<th scope="col"class="bg-warning">SERIE</th>
	    						<th scope="col"class="bg-warning">RIPETIZIONI</th>
	    						<th scope="col"class="bg-warning">DURATA</th>
								<th scope="col"class="bg-warning">WEEK</th>
							</tr>
						</thead>
						<?php
						$schede = $db->getAllTrainingsByName($train[0],$conn);
						for ($x1 = 0; $x1 < mysqli_num_rows($schede); $x1++){
							$resrow = mysqli_fetch_row($schede);

							$esercizio = $resrow[3];
							$peso = $resrow[4];
							$serie = $resrow[5];
							$ripetizioni = $resrow[6];
							$durata = $resrow[2];
						?>
						<tbody>
						<tr>
						<th scope = "row"class="bg-warning"><?php echo $esercizio;?></th>
						<td class="bg-warning"><?php echo $peso;?></td>
						<td class="bg-warning"><?php echo $serie;?></td>
						<td class="bg-warning"><?php echo $ripetizioni;?></td>
						<td class="bg-warning"><?php echo $durata;?></td>
						</tr><?php }?>
						</tbody>
						</table>
					<div class="carousel-caption">
					</div>
					</div>
					<?php }?>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				  <!-- <button type="button"class="w3-btn w3-ripple w3-orange" style="align-items:center;height: 1%; width: 100%" data-toggle="modal" data-target="#Mymodal"> </button> -->
				</div>

		</div>
<?php endif; ?>


			<!-- .modal -->
<div class="modal fade" id="Mymodal">
			<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">
				&times;
			  </button>
			<h4 class="modal-title">
				Scheda
			  </h4>
			</div>
			<div class="modal-body"></div>

<div class="modal fade" id="Mymodal1">
			<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">
				&times;
			  </button
			<h4 class="modal-title">
				Notification
			  </h4>
			</div>
			<div id = "modal-body" class="modal-body"><table style="width: 100%">
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">
				Close
			  </button>
			<button type="button" class="btn btn-primary">
				Ok
			  </button>
			</div>
			</div>
			</div>
			</div>
		</div>


<!-- STRUTTURA
SLIDER
bottone per accedere ai MODEL
MODEL
scheda model presa dal database
-->



				<!-- Prova a mettere un iframe con il video di Miletto -->
		<!--	<iframe style="position: relative"width="560" height="315" src="https://www.youtube.com/embed/CjMhgsKP0t0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>-->

	<footer>

			<ul class="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="allenamento.php">Allenamento</a></li>
				<li><a href="imc.php">Calcolo IMC</a></li>
				<li><a href="diete.php">Diete</a></li>
				<li><a href="consulenza.php">Consulenze</a></li>
				<li><a href="contatti.php">Contatti</a></li>
			</ul>

			<div class="copyright">
				I contenuti presenti sul sito <b>"Your Own Fitness"</b> dei quali &egrave; autore il proprietario del sito <b>Barlo&Fitness</b>
				non possono essere copiati, riprodotti, pubblicati o redistribuiti perch&egrave; appartenenti all'autore stesso.
				&#200; vietata la copia e la riproduzione dei contenuti in qualsiasi modo o forma.
				&#200; vietata la pubblicazione e la redistribuzione dei contenuti non autorizzata espressamente dall’autore.
				<hr>Copyright © 2021 Your Own Fitness by Barlo&Fitness, BARLETTA Francesco Pio. All rights reserved
			</div>

	</footer>
<?php include("ajax.js"); ?>
</body>

</html>
