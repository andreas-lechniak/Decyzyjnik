<!DOCTYPE html>
<html lang="pl-PL">
	<head>
		<meta name="keyword" content="Decyzyjnik decyzje decyzja" />
		<meta name="description" content="Decyzyjnik decyzje decyzja" />
		<link type="text/css" rel="stylesheet" href="style.css" />
		<title>Decyzyjnik</title>
	</head>
	<body>
		<h2>Strona pomagająca podejmować decyzje [WEB Test]</h2>
		<p>
			Masz zły dzień, kiepski humor - nie wiesz jaką podjąć decyzję? <br />
			Jesteś rozchwiany w niepewności - nie wiesz, jaką podjąć decyzję? <br />
			Skorzystaj z mojego programu - nie podejmę za Ciebie decyzji - ale trochę odciążę od tego Ciebie.
		</p>
		
		<div class="formularz">
			<form action="decyzja1.php" method="POST">
				<h3>W JAKIEJ KWESTII NIE MOŻESZ SIĘ ZDECYDOWAĆ ?</h3>
				<img src="kontrolka.png">
				<input type="checkbox" name="decyzja1" />
				<b>Decyzja momentu</b>
				<img src="komentarz.png" title="Np. czy kupić rower, wyjechać na weekend w góry lub kupić taki prezent czy inny]">
				<br />
				
				<img src="kontrolka.png">
				<input type="checkbox" name="decyzja2" />
				<b>Decyzja przełomowa</b>
				<img src="komentarz.png" title="Np. dotyczące finansów, wyznania osobiste, wybór drogi życiowej">
				<br />
				
				<img src="kontrolka.png">
				<input type="checkbox" name="decyzja3" />
				<b>Decyzja przyszłościowa</b>
				<img src="komentarz.png" title="Np. zakup samochodu czy mieszkania, emigracja zarobkowa">
				<p>
					<img src="kontrolka.png"> <b>CZEGO DOTYCZY DECYZJA:</b> <input type="text" name="decyzja_o">
				</p>
				<hr />
				
				<input type="submit" value="Prześlij formularz">
			</form>
		</div>
		
		<p class="dolne_info">
			<button onclick="wyswietlKomunikat()">Jak podjąć decyzję</button>
			<script>
				function wyswietlKomunikat() 
				{
				  alert("Podejmując jakąkolwiek decyzje, kieruj się sercem i rozumem");
				}
			</script>
			Strona ver. 1.0 | 
			Wykonanie: <a href="mailto:andrzejlechniak@wp.pl" title="Napisz do mnie">DomAnd</a> &copy; - 
			<?php
				$year = date('Y');
				echo $year;
				echo " r.";
			?>
		</p>
	</body>
</html>