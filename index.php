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
			<h2>Er heerst paniek...</h2>
			<form method="post" ACTION="results/result.php">
				<p>Welk dier zou je nooit als huisdier willen hebben?<input name="huisdier" class="inputfield" type="text"></p>
				<p>Wie is de belangrijkste persoon in je leven?<input name="persoon" class="inputfield" type="text"></p>
				<p>In welk land zou je graag willen wonen?<input name="land" class="inputfield" type="text"></p>
				<p>Wat doe je als je je verveelt?<input name="vervelen" class="inputfield" type="text"></p>
				<p>Met welk speelgoed speelde je als kind het meest?<input name="speelgoed" class="inputfield" type="text"></p>
				<p>Bij welke docent spijbel je het liefst?<input name="spijbel" class="inputfield" type="text"></p>
				<p>Als je EUR 100.000,- had, wat zou je dan kopen?<input name="kopen" class="inputfield" type="text"></p>
				<p>Wat is je favoriete bezigheid?<input name="bezigheid" class="inputfield" type="text"></p>
				<INPUT class="button" NAME="verzenden" TYPE="submit" VALUE="Versturen" />
			</form>
			<div class="footer">
				<p class="footertext">Deze website is gemaakt door Hakan.</p>
			</div>
	</div>
	</body>
</html>