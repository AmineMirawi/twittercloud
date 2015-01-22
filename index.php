<?php include "API/twitteroauth.php"; ?>

<?php
	$ConsumerKey = "78knUcgdbZAfxLWQWFy36Q2kI";
	$ConsumerSecret = "XYnXZmfO3IIrqf8gpVSLj75oVFd9SevQUTw8i31Zrtdg3fZFu1";
	$AccessToken = "2991522929-Nui5CaQGAbBxy80WfzZo6NnjlRWYjMI1EYk9iSy";
	$AccessTokenSecret = "Biv6CqzBnXIwDDZX5TKFrHuuVnqi3Ed9P7jofsheVSZnK";
	
	$twitter = new TwitterOAuth($ConsumerKey, $ConsumerSecret, $AccessToken, $AccessTokenSecret);
	
	if(isset($_POST['sujets'])){
		$sujets = $_POST['sujets'];
		$nbTweet = $_POST['nbTweet'];
		
			
		$tweets = $twitter->get("https://api.twitter.com/1.1/search/tweets.json?q=".$sujets."&result_type=recent&count=".$nbTweet);
	}
?>

<!DOCTYPE html>
<html>
	<head>
	        <meta charset="utf-8" />
	        <title>Recherche Tweet</title>
		<link href="common/css/reset.css" rel="stylesheet">
		<link href="common/css/style.css" rel="stylesheet">
		
	</head>

	<body>
		<div id="resultat">
			<form action="" method="post">
				<label>Sujet : </label><SELECT name="sujets">
		<OPTION VALUE="Robin Williams">Robin Williams</OPTION>
		<OPTION VALUE="World Cup">World Cup</OPTION>
		<OPTION VALUE="Ebola">Ebola</OPTION>
		<OPTION VALUE="Malaysia Airlines">Malaysia Airlines</OPTION>
		<OPTION VALUE="Ebola">Ebola</OPTION>
		<OPTION VALUE="Flappy Bird">Flappy Bird</OPTION>
		<OPTION VALUE="ALS Ice Bucket Challenge">ALS Ice Bucket Challenge</OPTION>
		<OPTION VALUE="Ferguson">Ferguson</OPTION>
		<OPTION VALUE="Frozen">Frozen</OPTION>
		<OPTION VALUE="Ukraine">Ukraine</OPTION>
		<OPTION VALUE="Jennifer Lawrence">Jennifer Lawrence</OPTION>
		<OPTION VALUE="Kim Kardashian">Kim Kardashian</OPTION>
		<OPTION VALUE="Tracy Morgan">Tracy Morgan</OPTION>
		<OPTION VALUE="Ray Rice">Ray Rice</OPTION>
		<OPTION VALUE="Tony Stewart">Tony Stewart</OPTION>
		<OPTION VALUE="Iggy Azalea">Iggy Azalea</OPTION>
		<OPTION VALUE="Donald Sterling">Donald Sterling</OPTION>
		<OPTION VALUE="Adrian Peterson">Adrian Peterson</OPTION>
		<OPTION VALUE="Rene Zellweger">Rene Zellweger</OPTION>
		<OPTION VALUE="Jared Leto">Jared Leto</OPTION>
		<OPTION VALUE="Lego">Lego</OPTION>
		<OPTION VALUE="Clash of Clans">Clash of Clans</OPTION>
		<OPTION VALUE="Candy Crush Saga">Candy Crush Saga</OPTION>
		<OPTION VALUE="Flappy Bird">Flappy Bird</OPTION>
		<OPTION VALUE="Pokémon">Pokémon</OPTION>
		<OPTION VALUE="Patience">Patience</OPTION>
		<OPTION VALUE="Destiny">Destiny</OPTION>
		<OPTION VALUE="Scrabble">Scrabble</OPTION>
		<OPTION VALUE="Magic: The Gathering">Magic: The Gathering</OPTION>
		<OPTION VALUE="Poker">Poker</OPTION>
		<OPTION VALUE="Frozen">Frozen</OPTION>
		<OPTION VALUE="Interstellar">Interstellar</OPTION>
		<OPTION VALUE="Divergent">Divergent</OPTION>
		<OPTION VALUE="Gone Girl">Gone Girl</OPTION>
		<OPTION VALUE="Lone Survivor">Lone Survivor</OPTION>
		<OPTION VALUE="Godzilla">Godzilla</OPTION>
		<OPTION VALUE="22 Jump Street">22 Jump Street</OPTION>
		<OPTION VALUE="Big Hero 6">Big Hero 6</OPTION>
		<OPTION VALUE="Annabelle">Annabelle</OPTION>
		<OPTION VALUE="Maleficent">Maleficent</OPTION>
		<OPTION VALUE="Oscar Selfie">Oscar Selfie</OPTION>
		<OPTION VALUE="Oscar Selfie">Oscar Selfie</OPTION>
		<OPTION VALUE="Monkey Selfie">Monkey Selfie</OPTION>
		<OPTION VALUE="Obama Selfie">Obama Selfie</OPTION>
		<OPTION VALUE="Squirrel Selfie">Squirrel Selfie</OPTION>
		<OPTION VALUE="David Ortiz Selfie">David Ortiz Selfie</OPTION>
		<OPTION VALUE="Zach Mettenberger Selfie">Zach Mettenberger Selfie</OPTION>
		<OPTION VALUE="Colin Powell Selfie">Colin Powell Selfie</OPTION>
		<OPTION VALUE="Elephant Selfie">Elephant Selfie</OPTION>
		<OPTION VALUE="Shark Selfie">Shark Selfie</OPTION>
		<OPTION VALUE="Plane Crash Selfie">Plane Crash Selfie</OPTION>
		<OPTION VALUE="Real Madrid">Real Madrid</OPTION>
		<OPTION VALUE="Arsenal F.C">Arsenal F.C</OPTION>
		<OPTION VALUE="Manchester United">Manchester United</OPTION>
		<OPTION VALUE="F.C. Barcelona">F.C. Barcelona</OPTION>
		<OPTION VALUE="Atlético Madrid">Atlético Madrid</OPTION>
		<OPTION VALUE="Manchester City">Manchester City</OPTION>
		<OPTION VALUE="Liverpool F.C">Liverpool F.C</OPTION>
		<OPTION VALUE="Chelsea F.C">Chelsea F.C</OPTION>
		<OPTION VALUE="Bayern Munich">Bayern Munich</OPTION>
		<OPTION VALUE="A.S. Roma">A.S. Roma</OPTION>
		<OPTION VALUE="Tunisie">Tunisie</OPTION>
<OPTION VALUE="Tunisie">Ensit</OPTION>		
	</SELECT>
	
	
	<br />
				<label>Nombre de tweets : </label><SELECT name="nbTweet">
		<OPTION VALUE="3">3</OPTION>
		<OPTION VALUE="5">5</OPTION>
		<OPTION VALUE="10">10</OPTION>
		<OPTION VALUE="20">20</OPTION>
		</SELECT>
				<input type="submit" name="OK" value="Rechercher" />
			</form>
			<hr>
			<?php
				if(isset($_POST['sujets'])):
				foreach($tweets->statuses as $tweet):
			?>
			
			<p class="tweet">
				<img src="<?php echo $tweet->user->profile_image_url; ?>" alt="profile utilisateur" />
				<span><?php echo $tweet->text; ?></span>
			</p>
			
			<?php
				endforeach;
				else:
			?>
			<p>Ceci est une liste des sujets les plus recherchés sur le net en 2014 inculant la recherche google,people,films...</p>
			<p>Selectionnez un sujet et voyez les plus récents tweets :)</p>
			<?php
				endif;
			?>
		</div>
	</body>
</html>