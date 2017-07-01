<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <title>Choura</title>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
	
</head>
<body>
<form name="formu" action="choura.php" method="post">
	<h1>Chourra du <input type="text" id="datepicker" name="date"/></h1>
	<p><em>Emir de la semaine :</em>
	<select name="emir">
		<option>Amadou</option>
		<option>Idrissa</option>
		<option>Moussa</option>
		<option>Thiam</option>
		<option>Kada</option>
	</select>
	</p>
	<p><em>Personnes présentes : </em>
	<input type="text" name="participant" size="30"/>	
	</p>
	<p>Adeb :
	<select name="nomAdeb">
		<option>Amadou</option>
		<option>Idrissa</option>
		<option>Moussa</option>
		<option>Thiam</option>
		<option>Kada</option>
	</select>
	</p>
	<textarea name="adeb" rows="4" cols="50"></textarea>

	<ol>
		<li>L'Enfant Tidjani :
		<select>
			<option>Amadou</option>
			<option>Idrissa</option>
			<option>Moussa</option>
			<option>Thiam</option>
			<option>Kada</option>
		</select>
		</li><br/>
		<li>Organisation :</li><br/>
		<ul>
			<li>Lundi : 
				<select>
					<option>Amadou</option>
					<option>Idrissa</option>
					<option>Moussa</option>
					<option>Thiam</option>
					<option>Kada</option>
					<option>Zaouiya</option>
				</select>
			</li>
			<li>Mardi : 
				<select>
					<option>Amadou</option>
					<option>Idrissa</option>
					<option>Moussa</option>
					<option>Thiam</option>
					<option>Kada</option>
					<option>Zaouiya</option>
				</select>
			</li>
			<li>Mercredi : 
				<select>
					<option>Amadou</option>
					<option>Idrissa</option>
					<option>Moussa</option>
					<option>Thiam</option>
					<option>Kada</option>
					<option>Zaouiya</option>
				</select>
			</li>
			<li>Jeudi : 
				<select>
					<option>Amadou</option>
					<option>Idrissa</option>
					<option>Moussa</option>
					<option>Thiam</option>
					<option>Kada</option>
					<option>Zaouiya</option>
				</select>
			</li>
			<li>Vendredi : 
				<select>
					<option>Amadou</option>
					<option>Idrissa</option>
					<option>Moussa</option>
					<option>Thiam</option>
					<option>Kada</option>
					<option>Zaouiya</option>
				</select>
			</li>
			<li>Samedi : 
				<select>
					<option>Amadou</option>
					<option>Idrissa</option>
					<option>Moussa</option>
					<option>Thiam</option>
					<option>Kada</option>
					<option>Zaouiya</option>
				</select>
			</li>
			<li>Dimanche : 
				<select>
					<option>Amadou</option>
					<option>Idrissa</option>
					<option>Moussa</option>
					<option>Thiam</option>
					<option>Kada</option>
					<option>Zaouiya</option>
				</select>
			</li>
		</ul><br/>
		<li>Siyaha :</li>
			<textarea rows="4" cols="50"></textarea><br/>
		
		<li>Istiqbal :</li>
			<textarea rows="4" cols="50"></textarea><br/>
		
		<li>Ziarra :</li>
			<textarea rows="4" cols="50"></textarea><br/>
		
		<li>Taalim Nissa :</li>
			<textarea rows="4" cols="50"></textarea><br/>
		
		<li>3 points :</li>
			<textarea rows="4" cols="50"></textarea><br/>
		
		<li>Divers :</li>
			<textarea rows="4" cols="50"></textarea><br/>
		
	</ol>
	<input type="submit" name="Envoyer" value="Envoyer" />
	<input type="submit" name="Annuler" value="Annuler" />
</form>
<p>Tous les fréres demandent dou'a et passe le Salam à Cheikh</p>
</body>
</html>