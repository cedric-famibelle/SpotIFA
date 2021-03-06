<!DOCTYPEhtml>

<html lang="eng">

<head>
	<meta charset="utf-8">
	<title>SpotIFA</title>
	<link rel="stylesheet" href="../style/style.css">
</head>

<body>

<?php require "../menu/menu.html"; ?>

<div id="content">

	<header>
		<img src="/SpotIFA/library/SpotIFA_logo.png" width="180" height="60">
		<<h3>Artists</h3>
	</header>


	<form class="search_bar" action="/SpotIFA/page/artist_sheet.php">
	  <input type="search" id="search" name="name" placeholder="Name">
	  <input type="submit" value="Submit">
	</form>

	<hr>

	<p>


	<?php

	$db_spot = new PDO('mysql:host=localhost;dbname=SpotIFA','root',''/* or 'root'*/,
                        array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));

	$db_prt = $db_spot->query(
		'SELECT name 
		FROM artists
		ORDER BY id_artist ASC'
	);

	while($data = $db_prt -> fetch()){
                        echo "<a class='button' href='artist_sheet.php?name=".$data['name']."'>".$data['name']."</a>";
                        echo "<hr>";
                    }

	?>

	</p>

	<footer>
		"J.L.DevProg"
	</footer>

</div>

</body>

</html>