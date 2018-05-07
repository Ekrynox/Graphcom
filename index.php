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
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-deep_purple.min.css" />

		<link rel="stylesheet" href="asset/css/layout.css" type="text/css">
	</head>

	<body class="mdl-base">
		<div class="mdl-layout mdl-js-layout">
			<?php include("header.php"); ?>

      <main class="index-layout-content mdl-layout__content">


				<!-- Wide card with share menu button -->
				<style>
					.demo-card-wide.mdl-card {
						width: 30%;
					}

					.demo-card-wide > .mdl-card__title {
						height: 12vw;
						background: url('asset/img/welcome_card.jpg') center / cover;
					}

					.demo-card-wide > .mdl-card__menu {
						color: #fff;
					}
				</style>

				<div class="demo-card-wide mdl-card mdl-shadow--2dp">
					<div class="mdl-card__title">
					</div>
					<div class="mdl-card__supporting-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						Mauris sagittis pellentesque lacus eleifend lacinia...
					</div>
					<div class="mdl-card__actions mdl-card--border">
						<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">
							Mon affiche
						<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
					</div>
					<div class="mdl-card__menu">
						<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FGraphCommunity.ESIEA%2F&amp;src=sdkprepars', '_blank')" data-upgraded=",MaterialButton,MaterialRipple">
							<i class="material-icons">share</i>
						<span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 92.5097px; height: 92.5097px; transform: translate(-50%, -50%) translate(12px, 18px);"></span></span></button>
					</div>
				</div>


			</main>

		</div>
  </body>

</html>
