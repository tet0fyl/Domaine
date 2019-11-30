<?php include("tools/path.php")	?>
<!DOCTYPE html>
<html lang='fr'>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo ucfirst($page) ?></title>
		<link rel="stylesheet" href="ressources/styles/styles.css">
		<link rel="icon" type="image/png" href="ressources/images/logo/logo.png" />
    </head>
	<body>
		<header>
			<nav>
				<ul>
					<li <?php echo (isset($page) && $page=='home')?"class='active'":""; ?> ><a href="home" title="Page d'accueil">Accueil</a></li>
					<li <?php echo (isset($page) && $page=='programme')?"class='active'":""; ?> ><a href="evenement" title="Programme">Programme</a></li>
					<li <?php echo (isset($page) && $page=='actualite')?"class='active'":""; ?> ><a href="actualite" title="Actualités">Actualités</a></li>
					<li <?php echo (isset($page) && $page=='presse')?"class='active'":""; ?> ><a href="presse" title="Presse">Presse</a></li>
                    <li <?php echo (isset($page) && $page=='media')?"class='active'":""; ?> ><a href="media" title="Presse">Media</a></li>
                    <li <?php echo (isset($page) && $page=='infos pratiques')?"class='active'":""; ?> ><a href="contact" title="Infos Pratiques">Infos Pratiques</a></li>
                    <li><a href="https://www.helloasso.com/associations/six-six/adhesions/adhesion-annuelle-six-six" target="_blank" title="Devenir adhérent">Devenir adhérent</a></li>
                </ul>
			</nav>
		</header>
		<main>
		
		