<!DOCTYPE html>
<html lang="pl-PL">
	<body>
		<head>
			<link type="text/css" rel="stylesheet" href="style.css" />
			<title>Decyzyjnik</title>
		</head>
			<?php
			
				if(isset($_POST['decyzja1']) && isset($_POST['decyzja2']))
				{
					echo '<div id="brak_wyboru">
							<h2>Błąd decyzji</h2>
							<p>Zaznaczono dwie opcje wyboru: <b>1</b> i <b>2</b> razem | 
							Wróć na <a href="index.php" title="Powrót do strony głównej">Stronę główną</a><br />
							</p>
						  </div>';
				}
				else if (isset($_POST['decyzja2']) && isset($_POST['decyzja3']))
				{
					echo '<div id="brak_wyboru">
							<h2>Błąd decyzji</h2>
							<p>Zaznaczono dwie opcje wyboru: <b>2</b> i <b>3</b> razem |
							Wróć na <a href="index.php" title="Powrót do strony głównej">Strona główna</a><br />
							</p>
						  </div>';
				}
				else if (isset($_POST['decyzja1']) && isset($_POST['decyzja3']))
				{	
					echo '<div id="brak_wyboru">
							<h2>Błąd decyzji</h2>
							<p>Zaznaczono dwie opcje wyboru: <b>1</b> i <b>3</b> razem |
							Wróć na <a href="index.php" title="Powrót do strony głównej">Stronę główną</a><br />
							</p>
						  </div>';
				}
				else if (isset($_POST['decyzja1']) && isset($_POST['decyzja2']) && isset($_POST['decyzja3']))
				{
					echo 'Błąd: dec 1 i 2 i 3 razem';
					echo '<div id="brak_wyboru">
							<h2>Błąd decyzji</h2>
							<p>Zaznaczono trzy opcje wyboru: <b>1</b>, <b>2</b> i <b>3</b> razem |
							Wroć na <a href="index.php" title="Powrót do strony głównej">Stronę główną</a><br />
							</p>
						  </div>';
				}
				else
				{
					if (isset($_POST['decyzja1']))
					{
					  $decyzja1 = $_POST['decyzja1'];
					  $decyzja_o = $_POST['decyzja_o'];
					  echo '<h2 id="decyzja_naglowek">Decyzja momentu</h2>
							<p><b>Decyzja momentu</b> - to nie taka duża sprawa, ale warto T O przemyśleć i właściwie podjąć decyzję <br />
							Niniejsze decyzje to Twoja osobista, subiektywna sprawa.<br />
							</p>';	
					  if(strlen($decyzja_o)<2)
					  {
						echo '<p class="cel_decyzji">Nie wpisano celu lub wpis jest za krótki</p>';
					  }
					  else
					  {
						echo '<p class="cel_decyzji">Cel podjęcia decyzji: <span><b>'.$decyzja_o.'</b></span></p>';
					  }	
					  echo '<form method="POST" action="decyzja_podsumowanie.php">
							<div id="wybor_zalety">
								<span><b>Argumenty Za: </b></span><br />
								<p>
								<input type="checkbox" name="check1[]" value="Czy stać">Czy stać mnie na TO<br />
								<input type="checkbox" name="check1[]" value="Potrzeba TERAZ">Czy jest mi to potrzebne teraz<br />
								<input type="checkbox" name="check1[]" value="Przydatne w przyszłości">Czy przyda mi się to w przyszłości?<br />
								<input type="checkbox" name="check1[]" value="Wartość tego">Czy przedmiot jest najwyższej jakości<br />
								<input type="checkbox" name="check1[]" value="Czy kasowo OK">Czy stać mnie na to<br />
								<input type="checkbox" name="check1[]" value="Relacje z innymi">Czy to wpłynie na moje relacje z innymi<br />
								<input type="checkbox" name="check1[]" value="Zgodność z przekonaniami">Czy to jest zgodne z moim przekonaniami<br />
								<input type="checkbox" name="check1[]" value="Osobiste powody">Inne osobiste powody<br />
								</p>
							</div>
							<div id="wybor_wady">
								<span><b>Argumenty Przeciw: </b></span><br />
								<p>
								<input type="checkbox" name="check2[]" value="Koszty">Duże koszty<br />
								<input type="checkbox" name="check2[]" value="Czas">Dużo czasu<br />
								<input type="checkbox" name="check2[]" value="Organizacja">Ograniczenia organizacyjne<br />
								<input type="checkbox" name="check2[]" value="Niezdecydowanie">Niezdacydowanie<br />
								<input type="checkbox" name="check2[]" value="Nieśmiałość">Nieśmiałość<br />
								<input type="checkbox" name="check2[]" value="Nieatrakcyjna oferta">Oferta nieatrakcyjna<br />
								<input type="checkbox" name="check2[]" value="Ukryte">Ukryte koszty<br />
								<input type="checkbox" name="check2[]" value="Brak plusów">Żadnych plusów<br />
								</p>
							</div>
							<input type="submit" value="Podejmij decyzje" OnClick="return confirm(\'Czy na pewno T A K Ą decyzję przesłać?\');">
							<input type="reset" value="Wyczyść">
							</form>';
					} 
					else if (isset($_POST['decyzja2']))
					{
						$decyzja2 = $_POST['decyzja2'];
						$decyzja_o = $_POST['decyzja_o'];
						echo '<h2 id="decyzja_naglowek">Decyzja przełomowa</h2>
							  <p><b>Decyzje przełomowe</b> - to takie sprawy, które mają na nas wpływ, ale mogą zmienić nas zarówno pozytywnie jak i negatywnie.<br />
							  Niniejsze decyzje to Twoja osobista, subiektywna sprawa.
							  </p>';
						if(strlen($decyzja_o)<2)
						{
							echo '<p class="cel_decyzji">Nie wpisano celu lub wpis jest za krótki</p>';
						}
						else
						{
							echo '<p class="cel_decyzji">Cel podjęcia decyzji: <span><b>'.$decyzja_o.'</b></span></p>';
						}		  
						echo '<form method="POST" action="decyzja_podsumowanie.php">
							<div id="wybor_zalety">
								<span><b>Argumenty Za: </b></span><br />
								<p>
								<input type="checkbox" name="check1[]" value="Odnowienie">To mnie odmieni<br />
								<input type="checkbox" name="check1[]" value="Nowe doświadczenia">Nowe doświadczenia<br />
								<input type="checkbox" name="check1[]" value="Dużo zyskam">Dużo mogę zyskać<br />
								<input type="checkbox" name="check1[]" value="Dla mnie duma">Dla mnie to duma<br />
								<input type="checkbox" name="check1[]" value="Zyskam w rodzinie">Zyskam w oczach rodziny<br />
								<input type="checkbox" name="check1[]" value="Zyskam wśród przyjaciół">Zyskam nowych przyjaciół<br />
								<input type="checkbox" name="check1[]" value="Sława">Stanę się sławny<br />
								<input type="checkbox" name="check1[]" value="Ambicja">Ambitnie do tego podchodzę<br />
								</p>
							</div>
							<div id="wybor_wady">
								<span><b>Argumenty Przeciw: </b></span><br />
								<p>
								<input type="checkbox" name="check2[]" value="Nie wiem">Nie wiem<br />
								<input type="checkbox" name="check2[]" value="Droga w nieznane">Droga w nieznane<br />
								<input type="checkbox" name="check2[]" value="Straty">Ile mogę na tym stracić<br />
								<input type="checkbox" name="check2[]" value="Duże koszty">Za duże koszty sam poniosę<br />
								<input type="checkbox" name="check2[]" value="Nieznane rzeczy">Nieznane rzeczy i sprawy<br />
								<input type="checkbox" name="check2[]" value="Na nie">Dużo na N I E<br />
								<input type="checkbox" name="check2[]" value="Ostrzeżenia">Wszyscy mnie ostrzegają<br />
								<input type="checkbox" name="check2[]" value="Nic">Nic na przeciw<br />
								</p>
							</div>
							<input type="submit" value="Podejmij decyzje" OnClick="return confirm(\'Czy na pewno T A K Ą decyzję chcesz przesłać?\');">
							<input type="reset" value="Wyczyść">
							</form>';
					}
					else if (isset($_POST['decyzja3']))
					{
						$decyzja3 = $_POST['decyzja3'];
						$decyzja_o = $_POST['decyzja_o'];
						echo '<h2 id="decyzja_naglowek">Decyzja przyszłościowa</h2>
							  <p><b>Decyzja przyszłościowa</b> może zawarzyć na wiele lat w Twoim życiu. Ostrożnie podejmuj tak ważne decyzje.<br />
							  Niniejsze decyzje to Twoja osobista, subiektywna sprawa.
							  </p>';
						if(strlen($decyzja_o)<2)
						{
							echo '<p class="cel_decyzji">Nie wpisano celu lub wpis jest za krótki</p>';
						}
						else
						{
							echo '<p class="cel_decyzji">Cel podjęcia decyzji: <span><b>'.$decyzja_o.'</b></span></p>';
						}	
						echo '<form method="POST" action="decyzja_podsumowanie.php">
								<div id="wybor_zalety">
								<span><b>Argumenty Za: </b></span><br />
								<p>
								<input type="checkbox" name="check1[]" value="Rozwój">Rozwój osobisty<br />
								<input type="checkbox" name="check1[]" value="Prestiż">Wzrośnie prestiż<br />
								<input type="checkbox" name="check1[]" value="Duma">Wzrośnie poczucie dumy<br />
								<input type="checkbox" name="check1[]" value="Niezależność">Wybiję się na niezależność<br />
								<input type="checkbox" name="check1[]" value="Szczęście osobiste">Będę szczęśliwszy<br />
								<input type="checkbox" name="check1[]" value="Bogactwo">Mogę być bogatszy<br />
								<input type="checkbox" name="check1[]" value="Ważny wybór">To dla mnie bardzo ważne<br />
								<input type="checkbox" name="check1[]" value="Ambicja">Ambitnie do tego podchodzę<br />
								</p>
							</div>
							<div id="wybor_wady">
								<span><b>Argumenty Przeciw: </b></span><br />
								<p>
								<input type="checkbox" name="check2[]" value="Osiewienie">Mogę osiwieć<br />
								<input type="checkbox" name="check2[]" value="Jak sobie poradze">Jak sobie poradzę<br />
								<input type="checkbox" name="check2[]" value="Rozłąka i dojazdy">Rozłąka i dojazdy<br />
								<input type="checkbox" name="check2[]" value="Koszty">Koszty utrzymania<br />
								<input type="checkbox" name="check2[]" value="Niepewność">Osobista niepewność<br />
								<input type="checkbox" name="check2[]" value="Ryzyko">Zbyt duże ryzyko<br />
								<input type="checkbox" name="check2[]" value="Nieznane">Nieznane doświadczenia<br />
								<input type="checkbox" name="check2[]" value="Nieważne">Żadne z powyższych<br />
								</p>
							</div>
							<input type="submit" value="Podejmij decyzje" OnClick="return confirm(\'Czy na pewno T A K Ą decyzję chcesz przesłać?\');">
							<input type="reset" value="Wyczyść">
							</form>';
					}
					else
					{
					  echo '<div id="brak_wyboru">
							 <h2>Brak decyzji</h2>
							 <p>Zaznaczono <b>0</b> pól.<br />
								Nie wiesz na co się zdecydować?<br />
							    Wróć na <a href="#">stronę główną<a>.
							 </p>
							</div>';
					}
				}
				
			?>
	</body>
</html>