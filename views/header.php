<?php include("tools/path.php")	?>
<?php include("tools/utility.php")	?>
<!DOCTYPE html>
<html lang='fr'>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo ucfirst($page) ?></title>
        <link rel="stylesheet" href="ressources/styles/bootstrap.css">
        <link rel="stylesheet" href="ressources/styles/styles.css">
		<link rel="icon" type="image/png" href="ressources/images/logo/logo.png" />
    </head>
	<body class="min-vh-100 d-flex flex-column justify-content-between">
		<header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                            <a class="nav-link d-lg-none d-inline justify-self-start" href="home" title="Page d'accueil">
                            <img src="ressources/images/logo/Logo-White.svg" width="100" height="100"></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex justify-content-center align-items-center w-100">
                        <li class="nav-item <?php echo (isset($page) && $page=='home')?"active":""; ?>" >
                            <a class="nav-link" href="home" title="Page d'accueil">Accueil</a>
                        </li>
                        <li class="nav-item <?php echo (isset($page) && $page=='programme')?"active":""; ?>" >
                            <a class="nav-link" href="evenement" title="Programme">Programme</a>
                        </li>
                        <li class="nav-item <?php echo (isset($page) && $page=='actualite')?"active":""; ?>" >
                            <a class="nav-link" href="actualite" title="Actualités">Actualités</a>
                        </li>
                        <li class="nav-item <?php echo (isset($page) && $page=='presse')?"active":""; ?>" >
                            <a class="nav-link" href="presse" title="Presse">Presse</a>
                        </li>
                        <li class="nav-item <?php echo (isset($page) && $page=='home')?"active":""; ?>" >
                            <a class="nav-link d-lg-inline d-none" href="home" title="Page d'accueil">
                            <img src="ressources/images/logo/Logo-White.svg" width="100" height="100"></a>
                        </li>
                        <li class="nav-item <?php echo (isset($page) && $page=='media')?"active":""; ?>" >
                            <a class="nav-link" href="media" title="Presse">Media</a>
                        </li>
                        <li class="nav-item <?php echo (isset($page) && $page=='infos')?"active":""; ?>" >
                            <a class="nav-link" href="contact" title="Infos Pratiques">Infos Pratiques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.helloasso.com/associations/six-six/adhesions/adhesion-annuelle-six-six" target="_blank" title="Devenir adhérent">Devenir adhérent</a>
                        </li>
                        <?php
                        if(isset($_SESSION['admin']) && $_SESSION['admin']) {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="admin-deconnexion" title="Deconnexion">Deconnexion</a>
                            </li>
                            <?php
                        }
                        ?>
                </div>
            </nav>
		</header>
		<main class="container shadow mt-2 pt-3 mb-2 pb-3">
		
		