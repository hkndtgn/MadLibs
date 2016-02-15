<?php
	$huisdier = $_POST['huisdier'];
	$persoon = $_POST['persoon'];
	$land = $_POST['land'];
	$vervelen = $_POST['vervelen'];
	$speelgoed = $_POST['speelgoed'];
	$spijbel = $_POST['spijbel'];
	$kopen = $_POST['kopen'];
	$bezigheid = $_POST['bezigheid'];
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
			<h2>Er heerst paniek...</h2>
			
			<p>Er heerst paniek in het koninkrijk <?php echo $land; ?> Koning <?php echo $spijbel; ?>
				is ten einde raad en als koning <?php echo $spijbel; ?> ten einde raad is,
				dan roept hij zijn ten-einde-raadsheer <?php echo $persoon; ?></p>
			<p>"<?php echo $persoon; ?>! Het is een ramp! Het is een schande!"</p>
			<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
			<p>"Mijn <?php echo $huisdier; ?> is verdwenen! Zo maar, zonder waarschuwing. 
				En ik had net <?php echo $speelgoed; ?> voor hem gekocht!"</p>
			<p>"Majesteit, uw <?php echo $huisdier; ?> komt vast vanzelf weer terug?"</p>
			<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $bezigheid; ?> leren?"</p>
			<p>"Maar Sire, daar kunt u toch uw <?php echo $kopen; ?> voor gebruiken."</p>
			<p>"<?php echo $persoon; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
			<p>"<?php echo $vervelen; ?>, Sire."</p>
			<div class="footer">
				<p class="footertext">Deze website is gemaakt door Hakan.</p>
			</div>
	</body>
</html>