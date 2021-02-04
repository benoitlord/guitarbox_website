<?php ob_start(); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GuitarBox</title>
	<link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="css/app.css">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	
	<link rel="icon" type="image/png" href="img/favicon.png">
	<!--<link rel="shortcut icon" type="image/png" href="img/icon.png">-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/icon_57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/icon_114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/icon_72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/icon_144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/icon_60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/icon_120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/icon_76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/icon_152.png">
	
	<meta name="apple-itunes-app" content="app-id=1320296077">
</head>
<body>
	<?php 
		include("include/add_lang.php"); 
		/*<?php echo $_GET["lang"] == "fr" ? "français" : ($_GET["lang"] == "en" ? "anglais" : ""); ?>*/ 
	?>
	<!--<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
		  <button class="menu-icon" type="button" data-toggle></button>
		  <div class="title-bar-title">Menu</div>
	</div>

	<div class="top-bar" id="main-menu">
		<div class="top-bar-left">
			<ul class="dropdown menu" data-dropdown-menu>
				<li class="menu-text">GuitarBox</li>
				<li><a href="#a-propos" class="anchor-link">À propos</a></li>
				<li><a href="#developpeur" class="anchor-link">Le développeur</a></li>
				<li><a href="#contact" class="anchor-link">Contact</a></li>
			</ul>
		</div>
	</div>-->
	
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
			<div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas>
				<!-- left off-canvas markup -->
				<div class="grid-container">
					<div class="grid-x grid-padding-x main-menu">
						<div class="large-12 cell">
							<h1>Menu</h1>
						</div>
						<div class="large-12 cell">
							<div class="link"><a href="#a-propos" class="anchor-link"><i class="fa fa-2x fa-question"></i><div class="text"><?php echo $_GET["lang"] == "fr" ? "À propos" : ($_GET["lang"] == "en" ? "About" : ""); ?></div></a></div>
							<div class="link"><a href="#developpeur" class="anchor-link"><i class="fa fa-2x fa-code"></i><div class="text"><?php echo $_GET["lang"] == "fr" ? "Le développeur" : ($_GET["lang"] == "en" ? "The developer" : ""); ?></div></a></div>
							<div class="link"><a href="#contact" class="anchor-link"><i class="fa fa-2x fa-envelope"></i><div class="text">Contact</div></a></div>
							<div class="link"><a href="https://itunes.apple.com/ca/app/guitarbox/id1320296077?l=<?php echo $_GET["lang"]; ?>&mt=8" target="_blank"><i class="fa fa-2x fa-download"></i><div class="text"><?php echo $_GET["lang"] == "fr" ? "Télécharger" : ($_GET["lang"] == "en" ? "Download" : ""); ?></div></a></div>
							<div class="link"><a href="index.php?lang=<?php echo $_GET["lang"] == "fr" ? "en" : ($_GET["lang"] == "en" ? "fr" : ""); ?>"><i class="fa fa-2x fa-globe"></i><div class="text"><?php echo $_GET["lang"] == "fr" ? "English" : ($_GET["lang"] == "en" ? "Français" : ""); ?></div></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
				<!-- right off-canvas markup -->
			</div>
			<div class="off-canvas-content" data-off-canvas-content>
				<div class="menu" data-toggle="offCanvasLeft"><i class="fa fa-2x fa-bars"></i></div>

				<div class="grid-container full">
					<div class="grid-x grid-padding-x">
						<div class="row">
							<div class="large-12 cell">
								<img class="desktop" src="img/header_<?php echo $_GET["lang"]; ?>.png">
								<img class="mobile" src="img/header_mobile_<?php echo $_GET["lang"]; ?>.png">
							</div>
						</div>
					</div>
				</div>

				<div class="section-1">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="large-6 cell">
								<h1 id="a-propos"><?php echo $_GET["lang"] == "fr" ? "À propos de GuitarBox" : ($_GET["lang"] == "en" ? "About GuitarBox" : ""); ?></h1>
								<p>
									<?php echo $_GET["lang"] == "fr" ? "GuitarBox, une application pour iPhone et iPad créée à la fois par un développeur indépendant et un guitariste passionné, est une boîte à outils contenant quelques outils utiles pour n'importe quel guitariste, débutant ou avancé. Elle comprend des outils utiles comme un livre d'accord avec images et son, un accordeur ainsi qu'un métronome. Découvrez-la dès maintenant!" : ($_GET["lang"] == "en" ? "GuitarBox, an iPhone and iPad app created by an indie developer and passionate guitarist, is a toolbox with some tools of use for any guitarist, beginner or expert. It contains useful tools like a chord book with images and sounds, a tuner as well as a metronome. Discover it now!" : ""); ?>
								</p>
								<a href="https://itunes.apple.com/ca/app/guitarbox/id1320296077?l=<?php echo $_GET["lang"]; ?>&mt=8" target="_blank"><img src="img/badge-app-store_<?php echo $_GET["lang"]; ?>.png" class="download"></a>
							</div>
							<div class="large-6 cell">
								<img src="img/about2_<?php echo $_GET["lang"]; ?>.png">
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-12 cell">
								<h2><?php echo $_GET["lang"] == "fr" ? "Outils" : ($_GET["lang"] == "en" ? "Tools" : ""); ?></h2>
							</div>
							<div class="large-12 cell">
								<ul class="tabs" data-tabs id="example-tabs">
									<li class="tabs-title is-active"><a href="#panel1" aria-selected="true"><?php echo $_GET["lang"] == "fr" ? "Livre d'accords" : ($_GET["lang"] == "en" ? "Chord book" : ""); ?></a></li>
									<li class="tabs-title"><a href="#panel2"><?php echo $_GET["lang"] == "fr" ? "Accordeur" : ($_GET["lang"] == "en" ? "Tuner" : ""); ?></a></li>
									<li class="tabs-title"><a href="#panel3"><?php echo $_GET["lang"] == "fr" ? "Métronome" : ($_GET["lang"] == "en" ? "Metronome" : ""); ?></a></li>
								</ul>
								<div class="tabs-content" data-tabs-content="example-tabs">
									<div class="tabs-panel is-active" id="panel1">
										<div class="grid-container">
											<div class="grid-x grid-padding-x">
												<div class="large-12 cell"> 
													<div class="media-object stack-for-small">
														<div class="media-object-section">
															<img src="img/accords_<?php echo $_GET["lang"]; ?>.png" width="250">
														</div>
														<div class="media-object-section">
															<h3><?php echo $_GET["lang"] == "fr" ? "Livre d'accords" : ($_GET["lang"] == "en" ? "Chord book" : ""); ?></h3>
															<p>
																<?php echo $_GET["lang"] == "fr" ? "Un livre d'accords contenant la plupart des accords commun et moins commun, avec des images claires montrant les notes à jouer et les doigtés. Et vous pouvez aussi entre le son de l'accords. Tapez l'icône de haut-parleur et entendez un enregistrement de l'accord pour savoir si vous la jouer comme il faut. " : ($_GET["lang"] == "en" ? "A chord book containing common and less common chords, with clear images showing the notes to play for the chord and the figuering. You can also hear how the chord sounds by pressing a button. Tap the speaker icon and hear a recording of the chord to know if you are playing it right." : ""); ?>
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>			
									</div>
									<div class="tabs-panel" id="panel2">
										<div class="grid-container">
											<div class="grid-x grid-padding-x">
												<div class="large-12 cell">
													<div class="media-object stack-for-small">
														<div class="media-object-section">
															<img src="img/accordeur_<?php echo $_GET["lang"]; ?>.png" width="250">
														</div>
														<div class="media-object-section">
															<h3><?php echo $_GET["lang"] == "fr" ? "Accordeur" : ($_GET["lang"] == "en" ? "Tuner" : ""); ?></h3>
															<p>
																<?php echo $_GET["lang"] == "fr" ? "Un accordeur vous permettant d'accorder votre guitare facilement et précisément, sans aucun accessoire. GuitarBox utilise le microphone de votre appareil pour reconnaître le son de votre guitare et montrer la hauteur de la note." : ($_GET["lang"] == "en" ? "A tuner allowing you to tune your guitar precisely and easily, no accessories needed. GuitarBox uses you device's microphone to recognize the sound of your guitar and show you the string's pitch." : ""); ?> 
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tabs-panel" id="panel3">
										<div class="grid-container">
											<div class="grid-x grid-padding-x">
												<div class="large-12 cell">
													<div class="media-object stack-for-small">
														<div class="media-object-section">
															<img src="img/metronome_<?php echo $_GET["lang"]; ?>.png" width="250">
														</div>
														<div class="media-object-section">
															<h3><?php echo $_GET["lang"] == "fr" ? "Métronome" : ($_GET["lang"] == "en" ? "Metronome" : ""); ?></h3>
															<p>
																 <?php echo $_GET["lang"] == "fr" ? "Vous pouvez maintenant avoir un métronome dans votre poche à tout moment ! GuitarBox vous offre un métronome facile à utiliser au bout de vos doigts. Avec une vaste gamme de tempos et de différents types de mesures, il s'adapte à n'importe quelle chanson. Vous pouvez même brancher un haut-parleur Bluetooth ou avec fil pour entendre le son du métronome plus fort." : ($_GET["lang"] == "en" ? "You can now have a metronome in your pocket at any time ! GuitarBox offers you an easy to use metronome at the tip of your fingers. With a wide range of tempos and different measure types, it can adapt to any song. You can even pair your device to any bluetooth or wired speaker to ear the metronome louder." : ""); ?>
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section-2">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="large-12 cell">
								<h1 id="developpeur"><?php echo $_GET["lang"] == "fr" ? "Le développeur - Benoit Lord" : ($_GET["lang"] == "en" ? "The Developer - Benoit Lord" : ""); ?></h1>
							</div>
						</div>
						<div class="grid-x grid-padding-x">
							<div class="large-8 cell">
								<p>
									<?php echo $_GET["lang"] == "fr" ? "Je suis un guitariste passioné et amoureux de programmation et de design web. J'ai commencé récemment à programmer à l'aide du language Swift et ceci est la première application que j'ai publié sur l'App Store. J'ai étudié en intégration multimédia, ce qui m'a donné de vastes connaissances en design graphique, design web et programmation avec divers langauges comme HTML, CSS, JavaScript et PHP. En téléchargeant GuitarBox, vous avez l'occasion de soutenir un développeur indépendant et de m'aider à continuer de développer cette application ainsi qu'éventuellement d'autres. Vous également pouver visiter mon portfolio en cliquant sur le bouton ci-dessous." : ($_GET["lang"] == "en" ? "I am a passionate guitarist and a fan of programming and web design. I recently learned to code with the Swift programming language and this is my first app on the App Store. I studied in Multimedia Integration and this gave me a good knowledge in graphic design, web design and programming in many languages such as HTML, CSS, JavaScript and PHP. By downloading GuitarBox, you have the occasion to encourage an independant developer and to help me continue develop this app and eventually others. You can also visit my portfolio by clicking on the button below." : ""); ?>
								</p>
								<a href="http://www.benoit-lord.ca/?lang=<?php echo $_GET["lang"]; ?>" target="_blank" class="button"><?php echo $_GET["lang"] == "fr" ? "Visiter mon portfolio" : ($_GET["lang"] == "en" ? "Visit my portfolio" : ""); ?></a>
							</div>
							<div class="large-4 cell">
								<img src="img/moi.jpg" alt="" width="300">
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-12 cell">
								<h2 id="contact"><?php echo $_GET["lang"] == "fr" ? "Contacter le développeur" : ($_GET["lang"] == "en" ? "Contact the Developer" : ""); ?></h2>
								<p><?php echo $_GET["lang"] == "fr" ? "Vous pouvez me contacter par courriel à-travers ce formulaire simple. Je vous répondrai dès que possible !" : ($_GET["lang"] == "en" ? "You can contact me by email through this simple form. I will reply as soon as possible!" : ""); ?></p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-12 cell">

								<!-- PHP pour le formulaire -->
								<?php
									$prenom = $_POST["prenom"];
									$nom = $_POST["nom"];
									$email = $_POST["email"];
									switch($_POST["sujet"]){
										case "info-1":
											$sujet = "Information à propos de l'application";
											break;
										case "info-2":
											$sujet = "Information à propos du développeur";
											break;
										case "probleme":
											$sujet = utf8_decode("Signalement de problème");
											break;
										case "autre":
											$sujet = "Autre";
											break;
										default: 
											$sujet = "Autre";
											break;
									}
									$message = nl2br($_POST["message"]);

									$headers = "Content-Type: text/html\n" .
											   "From: " . utf8_decode("$prenom $nom") . "<$email>\n" .
											   'MIME-Version: 1.0' . "\n";

									$msg = "
									<style>

										*{
											font-family: Roboto;
										}

									</style>
									<h1>Courriel de GuitarBox</h1>
									<p><strong>Nom :</strong> $prenom $nom</p>
									<p><strong>Email :</strong> $email</p> 
									<p><strong>Sujet :</strong> $sujet</p>
									<p><strong>Message :</strong> </p>
									<p>$message</p>";

									if(isset($_POST["submit"])){
										if(mail("info@benoit-lord.ca", "Courriel de GuitarBox", $msg, $headers)){
											if($_GET["lang"] == "fr"){
												echo "<p class='callout success'>Votre message a été envoyé !</p>";
											}
											else if($_GET["lang"] == "en"){
												echo "<p class='callout success'>Your message has been sent!</p>";
											}
										}
									}

								?>

								<form id="contact-form" onsubmit="return valider();" method="post" action="index.php?lang=<?php echo $_GET["lang"]; ?>#contact">
									<div class="grid-x grid-padding-x">
										<div class="large-6 cell">
											<label><?php echo $_GET["lang"] == "fr" ? "Prénom : " : ($_GET["lang"] == "en" ? "First Name: " : ""); ?></label>
											<input type="text" placeholder="<?php echo $_GET["lang"] == "fr" ? "Votre prénom" : ($_GET["lang"] == "en" ? "Your first name" : ""); ?>" name="prenom" id="prenom" />
										</div>
										<div class="large-6 cell">
											<label><?php echo $_GET["lang"] == "fr" ? "Nom : " : ($_GET["lang"] == "en" ? "Last Name: " : ""); ?></label>
											<input type="text" placeholder="<?php echo $_GET["lang"] == "fr" ? "Votre nom" : ($_GET["lang"] == "en" ? "Your last name" : ""); ?>" name="nom" id="nom" />
										</div>
									</div>
									<div class="grid-x grid-padding-x">
										<div class="large-8 cell">
											<label><?php echo $_GET["lang"] == "fr" ? "Adresse courriel" : ($_GET["lang"] == "en" ? "Email Address" : ""); ?></label>
											<input type="text" placeholder="<?php echo $_GET["lang"] == "fr" ? "votrenom@exemple.com" : ($_GET["lang"] == "en" ? "yourname@example.com" : ""); ?>" name="email" id="email" />
										</div>
										<div class="large-4 medium-4 cell">
											<label><?php echo $_GET["lang"] == "fr" ? "Sujet" : ($_GET["lang"] == "en" ? "Subject" : ""); ?></label>
											<select name="sujet" id="sujet">
												<option value="default" selected disabled><?php echo $_GET["lang"] == "fr" ? "Veuillez choisir une option" : ($_GET["lang"] == "en" ? "Please select an option" : ""); ?></option>
												<option value="info-1"><?php echo $_GET["lang"] == "fr" ? "Information à propos de l'application" : ($_GET["lang"] == "en" ? "Information about the app" : ""); ?></option>
												<option value="info-2"><?php echo $_GET["lang"] == "fr" ? "Information à propos du développeur" : ($_GET["lang"] == "en" ? "Information about the developer" : ""); ?></option>
												<option value="probleme"><?php echo $_GET["lang"] == "fr" ? "Signalement de problème" : ($_GET["lang"] == "en" ? "Bug report" : ""); ?></option>
												<option value="autre"><?php echo $_GET["lang"] == "fr" ? "Autre" : ($_GET["lang"] == "en" ? "Other" : ""); ?></option>
											</select>
										</div>
									</div>
									<div class="grid-x grid-padding-x">
										<div class="large-12 cell">
											<label>Message</label>
											<textarea placeholder="<?php echo $_GET["lang"] == "fr" ? "Votre message" : ($_GET["lang"] == "en" ? "Your message" : ""); ?>" rows="7" name="message" id="message"></textarea>
										</div>
									</div>
									<input type="submit" class="button" value="<?php echo $_GET["lang"] == "fr" ? "Envoyer" : ($_GET["lang"] == "en" ? "Send" : ""); ?>" name="submit">
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="section-3">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="large-12 cell">
								<h1><?php echo $_GET["lang"] == "fr" ? "Aidez-moi !" : ($_GET["lang"] == "en" ? "Encourage Me!" : ""); ?></h1>
								<p><?php echo $_GET["lang"] == "fr" ? "N'oubliez pas d'aller télécharger GuitarBox afin de m'encourager." : ($_GET["lang"] == "en" ? "Don't forget to download GuitarBox to encourage me." : ""); ?></p>
								<a href="https://itunes.apple.com/ca/app/guitarbox/id1320296077?l=<?php echo $_GET["lang"]; ?>&mt=8" target="_blank"><img src="img/badge-app-store_<?php echo $_GET["lang"]; ?>.png" width="170"></a>
							</div>
						</div>
					</div>
				</div>

				<div class="grid-container full footer">
					<div class="grid-x grid-padding-x">
						<div class="large-8 large-offset-1 cell">
							<p>&copy; <a href="http://benoit-lord.ca/?lang=<?php echo $_GET["lang"]; ?>" target="_blank">Benoit Lord</a>, 2018</p>
						</div> 
						<div class="large-3 cell">
							<p><a href="privacy_policy.php?lang=<?php echo $_GET["lang"]; ?>" target="_blank"><?php echo $_GET["lang"] == "fr" ? "Politique de Confidentialité" : ($_GET["lang"] == "en" ? "Privacy Policy" : ""); ?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="top"><i class="fa fa-2x fa-angle-double-up"</div>
		
	<?php
		echo "<script> var lang = \"" . $_GET["lang"] . "\"; </script>";
	?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
	<script src="js/validation.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
  </body>
</html>
