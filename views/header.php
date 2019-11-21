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
		<header >
			
			</div>
			<nav>
				<ul>
					<li <?php echo (isset($page) && $page=='home')?"class='active'":""; ?> ><a href="index.php?controller=evenement_actualite&action=home" title="Page d'accueil">Accueil</a></li>
					<li <?php echo (isset($page) && $page=='evenement')?"class='active'":""; ?> ><a href="index.php?controller=evenement&action=evenement" title="Evenements">Evenements</a></li>
					<li <?php echo (isset($page) && $page=='actualite')?"class='active'":""; ?> ><a href="index.php?controller=actualite&action=actualite" title="Actualités">Actualités</a></li>
					<li <?php echo (isset($page) && $page=='presse')?"class='active'":""; ?> ><a href="index.php?controller=presse&action=presse" title="Presse">Presse</a></li>
                    <li <?php echo (isset($page) && $page=='media')?"class='active'":""; ?> ><a href="index.php?controller=media&action=media" title="Presse">Media</a></li>
                    <li <?php echo (isset($page) && $page=='contact')?"class='active'":""; ?> ><a href="index.php?controller=pages&action=contact" title="Contact">Contact</a></li>
				</ul>
			</nav>
		</header>
		<main>
		
		