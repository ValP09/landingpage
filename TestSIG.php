<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="https://callmepower.be/sites/callmepower.be/files/styles/_default/public/swde-logo.jpg.webp" />
	<title>WikiSIG - Accueil</title>
</head>
<body>
	<nav>
		<a href="index.html"><img id="logo" src="img/Logo_ESRI_Mini.png" height="55px"></a>		
		<!DOCTYPE html>
		<html>
			<head></head>
			<body>
				<ul>
					<li><a href="welcome.html">                 WELCOME</a></li>
					<li><a href="instructions.html">            INSTRUCTIONS</a></li>
					<li><a href="info.html">                    INFOS / ASTUCES</a></li>
				</ul>
			</body>
		</html>
	</nav>
    <div id="contenu">
    	<img src="img/Logo_ESRI_Mini.png" height="85px">
    	<p id="revision">Dernière màj : <span id="js_maj"></span></p>
		<p>Le <b>WikiSIG</b> a pour but de rassembler en un seul et même endroit toutes les informations dont vous avez besoin quotidiennement. Les procédures et instructions qu'il contient sont à jour et sont donc celles qui prévalent.</p>
		<HR>
		<section id="sousmenu">			
			<div class="divCenter">
				<div class="divInlineCenter">
					<a href="communes.html"><img class="img" src="img/vannes.jpg"></a></br>
					Vannes
				</div>
				<div class="divInlineCenter">
					<a href="transferts.html"><img class="img" src="img/hydrants.jpg"></a></br>
					Hydrants
				</div>
				<div class="divInlineCenter">
					<a href="calltech.php"><img class="img" src="img/cathodiques.jpg"></a></br>
					Technique - Fil rouge
				</div>
				<div class="divInlineCenter">
					<a><img class="img" src="img/cathodiques.jpg"></a></br>
					<?php include 'calltech.php';?>Test
				</div>
			</div>
    	</section>
    	<section id="part2">
    		<H1>News</H1>
    		<div class="news">
    			<iframe src="news.html"></iframe>
    		</div>    		
			<p><a href="news.html">Voir toutes les news</a></p>
    	</section>
		<section id="lastPart">
			<!DOCTYPE html>
			<html>
				<head>
					<link rel="stylesheet" href="css/style.css" />
				</head>
				<body>
					<table class="lastpart_menu">
						<tr>
							<td><H3>Liens rapides</H3></td>
							<td><H3>Le métier</H3></td>
							<td><H3>Les autres rubriques</H3></td>
						</tr>
						<tr>
							<td><a style="text-decoration:none;" href="https://wikicall.swde.be/communes.php">Liste des communes</a></td>
							<td><a style="text-decoration:none;" href="https://wikicall.swde.be/welcome.html">Welcome</a></td>
							<td><a style="text-decoration:none;" href="https://wikicall.swde.be/partenaire.html">Créer un partenaire</a></td>
						</tr>
						<tr>
							<td><a style="text-decoration:none;" href="https://wikicall.swde.be/transferts.html">Règles de transfert</a></td>
							<td><a style="text-decoration:none;" href="https://wikicall.swde.be/instructions.html">Instructions</a></td>
							<td><a style="text-decoration:none;" href="https://wikicall.swde.be/listebp.html">BP à utiliser</a></td>
						</tr>
						<tr>
							<td><a style="text-decoration:none;" href="calltech.php">Appels techniques</a></td>
							<td><a style="text-decoration:none;" href="https://wikicall.swde.be/info.html">Infos / Astuces</a></td>
							<td><a style="text-decoration:none;" href="https://wikicall.swde.be/simulation.html">Simulation</a></td>
						</tr>
						<tr>
							<td><a style="text-decoration:none;" href="https://wikicall.swde.be/contact.html">Qui contacter ?</a></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td><a style="text-decoration:none;" href="https://wikicall.swde.be/fuites.html">Fuites</a></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td><a style="text-decoration:none;" href="https://wikicall.swde.be/frais.html">Tarifs & Frais</a></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</body>
			</html>
		</section>		
	</div>
	<footer>
		<!DOCTYPE html>
		<html>
			<head>
			</head>
			<body>
				<a href="faq.html">FAQ</a> | <a href="glossaire.html">Glossaire</a>
			</body>
		</html>
	</footer>	
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>