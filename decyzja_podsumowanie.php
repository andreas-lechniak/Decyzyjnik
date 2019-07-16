<!DOCTYPE html>
<html lang="pl-PL">
	<body>
		<head>
			<link type="text/css" rel="stylesheet" href="style.css" />
			<title>Decyzyjnik</title>
		</head>
		<body>
			<?php
				
				error_reporting(E_ALL & ~E_NOTICE);

				echo '<h2>Podsumowanie podjętej decyzji</h2>';
				
				//----------- Zaznaczone na TAK ---------------
				
				echo '<p>Odpowiedzi pozytywnych - tzn. na T A K: <br /><img src="kontrolka.png" /> ';
				if(!empty($_POST['check1']))
				{
					foreach($_POST['check1'] as $check1)
					{
						echo $check1.', ';
					}
				}
				else
				{
					//Opcja bez zaznaczenia żadnego z pól na TAK
					echo 'Nie zaznaczono żadnego pola.';
				}
					
				if(isset($_POST['check1']))
				{
					$zaznaczone1 = $_POST['check1'];
				}
				
				$count1 = is_array($zaznaczone1) ? count($zaznaczone1) : 0;
				echo '<br />Zaznaczono: <b>'.$count1.'</b> punkty/ów.</p>';
				
				//------------ Zaznaczone na NIE -----------------
				
				echo '<p>Odpowiedzi negatywnych - tzn. na N I E: <br /><img src="kontrolka.png" /> ';
				if(!empty($_POST['check2']))
				{
					foreach($_POST['check2'] as $check2)
					{
						echo $check2.', ';
					}
				}
				else
				{
					//Opcja bez zaznaczenia żadnego z pól na NIE
					echo 'Nie zaznaczono żadnego pola.';
				}
				
				if(isset($_POST['check2']))
				{
					$zaznaczone2 = $_POST['check2'];
				}
				
				$count2 = is_array($zaznaczone2) ? count($zaznaczone2) : 0;
				echo '<br />Zaznaczono: <b>'.$count2.'</b> punkty/ów.</p>';
				
				//------------ Decyzja --------------
				
				if($count1 > $count2)
				{
					//Decyzja na TAK - komentarz
					echo '<p>
						  <span class="na_tak">Więcej na <b>tak</b>.</span>
						  <br />Mimo wątpliwości - komentarz <b><span class="na_tak">POZYTYWNY</span></b>.
						  <br/ >Ale ostateczna decyzja należy do Ciebie.
						  </p>';
				}
				else if ($count2 > $count1)
				{
					//Decyzja na TAK - komentarz
					echo '<p>
						  <span class="na_nie"><b>Więcej na nie</b>.</span> 
						  <br />Mimo wątpliwości - komentarz <b><span class="na_nie">NEGATYWNY</span></b>
						  <br/ >Ale ostateczna decyzja należy do Ciebie.
						  </p>';
				}
				else
				{
					//Decyzja neutralna - sugestii na tak i nie po równo
					echo '<p>Sprawa trudna do oceny.
						  <br />Pomyśl jeszcze raz.
						  <br />Komentarz <b>NEUTRALNY</b>
						  </p>';
				}
			?>
		
		<p class="dolne_info">
			<!-- Zapis do pliku
			Zapisz do pliku | 
			-->
			<a href="index.php" title="Powrót do strony głównej">Strona główna</a>
		</p>
	</body>
</html>