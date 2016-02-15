<?php
	$kunnen = $_POST['kunnen'];
	$persoon = $_POST['persoon'];
	$getal = $_POST['getal'];
	$vakantie = $_POST['vakantie'];
	$besteeigenschap = $_POST['besteeigenschap'];
	$slechtsteeigenschap = $_POST['slechtsteeigenschap'];
	$overkomen = $_POST['overkomen'];
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/Style.css" />
		<title>Mad libs</title>
	</head>
	<body>
		<div class="header">
			<h1>Mad Libs</h1>
		</div>
		<div class="container">
			<ul>
				<li><a href="../index.php">Er heerst paniek...</a></li>
				<li><a href="../onkunde.php">Onkunde</a></li>
			</ul>
			<h2>Onkunde</h2>
			<p>Er zijn veel mensen die niet kunnen <?php echo $kunnen; ?>. Neem nou <?php echo $persoon; ?>.
			Zelfs met de hulp van een <?php echo $vakantie; ?> of zelfs <?php echo $getal; ?> kan <?php echo $persoon; ?> niet <?php echo $kunnen; ?>.
			Dat heeft niet te maken met een gebrek aan <?php echo $besteeigenschap; ?>, maar met een te veel aan <?php echo $slechtsteeigenschap; ?>.
			Te veel <?php echo $slechtsteeigenschap; ?> leidt tot <?php echo $overkomen; ?> en dat is niet goed als je wilt <?php echo $kunnen; ?>.
			Helaas voor <?php echo $persoon; ?>.</p>
			<div class="footer">
				<p class="footertext">Deze website is gemaakt door Hakan.</p>
			</div>
	</body>
</html>