<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>GraphCommunity</title>

		<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=fr">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-blue.min.css" />

		<link rel="stylesheet" href="asset/css/layout.css" type="text/css">
	</head>

	<body class="mdl-color--grey-100">
		<div class="mdl-layout mdl-js-layout">
			<header class="mdl-layout__header">
			  <div class="mdl-layout-icon"></div>
			  <div class="mdl-layout__header-row">
			    <span class="mdl-layout__title">GraphCommunity</span>
			    <div class="mdl-layout-spacer"></div>
			    <nav class="mdl-navigation">
			      <a class="mdl-navigation__link" href="index.php">Accueil</a>
			      <a class="mdl-navigation__link" href="index.php?page=formulaire">Contact</a>
			    </nav>
			  </div>
			</header>
			<div class="mdl-layout__drawer">
			  <span class="mdl-layout__title">GraphCommunity</span>
			  <nav class="mdl-navigation">
			    <a class="mdl-navigation__link" href="index.php">Accueil</a>
			    <a class="mdl-navigation__link" href="index.php?page=formulaire">Contact</a>
			    <a class="mdl-navigation__link" href="">Admin</a>
			  </nav>
			</div>

      <main class="mdl-layout__content">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>

					<?php
					if(isset($_GET['page']) && file_exists("page/". $_GET['page'] .".php")) {
						include("page/". $_GET['page'] .".php");
					} else {
						include("page/index.php");
					}
					?>

					<div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
				</div>
			</main>

		</div>
  </body>

</html>
