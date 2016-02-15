<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./css/Style.css" />
		<title>Mad libs</title>
	</head>
	<body>
		<div class="header">
			<h1>Mad Libs</h1>
		</div>
		<div class="container">
			<ul>
				<li><a href="index.php">Er heerst paniek...</a></li>
				<li><a href="onkunde.php">Onkunde</a></li>
			</ul>
			<h2>Onkunde</h2>
			<form method="post" ACTION="results/resultonkunde.php">
				<p>Wat zou je graag willen kunnen?<input name="kunnen" class="inputfield" type="text"></p>
				<p>Met welke persoon kun je goed opschieten?<input name="persoon" class="inputfield" type="text"></p>
				<p>Wat is je favoriete getal?<input name="getal" class="inputfield" type="text"></p>
				<p>Wat heb je altijd bij je als je op vakantie gaat?<input name="vakantie" class="inputfield" type="text"></p>
				<p>Wat is je beste persoonlijke eigenschap?<input name="besteeigenschap" class="inputfield" type="text"></p>
				<p>Wat is je slechtste persoonlijke eigenschap?<input name="slechtsteeigenschap" class="inputfield" type="text"></p>
				<p>Wat is het ergste dat je kan overkomen?<input name="overkomen" class="inputfield" type="text"></p>
				<INPUT class="button" NAME="verzenden" TYPE="submit" VALUE="Versturen" />
			</form>
			<div class="footer">
				<p class="footertext">Deze website is gemaakt door Hakan.</p>
			</div>
	</div>
	</body>
</html>