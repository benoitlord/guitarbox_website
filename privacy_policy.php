<?php ob_start(); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $_GET["lang"] == "fr" ? "Engagement de confidentialité" : ($_GET["lang"] == "en" ? "Privacy Policy" : ""); ?></title>
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
</head>

<body>
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
				<div class="large-12 cell">
					<?php 
						include("include/add_lang.php"); 
						/*<?php echo $_GET["lang"] == "fr" ? "français" : ($_GET["lang"] == "en" ? "anglais" : ""); ?>*/ 

						if($_GET["lang"] == "fr"){
							echo "
							<h1>Politique de Confidentialité</h1>


							<p>Date de prise d'effet: October 14, 2018</p>


							<p>GuitarBox (\"nous\", \"notre\", \"nos\") exploite le site web  et l'application mobile GuitarBox (ci-après désignés par le terme \"Service\").</p>

							<p>Cette page vous explique nos politiques en matière de collecte, d'utilisation et de communication des données à caractère personnel lorsque vous utilisez notre Service ainsi que les choix qui s'offrent à vous en ce qui concerne ces données. <a href=\"https://www.freeprivacypolicy.com/free-privacy-policy-generator.php\" target=\"_blank\">Politique de Confidentialité via Free Privacy Policy</a>.</p>

							<p>Nous utilisons vos données pour fournir et améliorer le Service. En utilisant le Service, vous consentez à la collecte et à l'utilisation d'informations conformément à la présente politique. Sauf définition contraire dans la présente Politique de Confidentialité, les termes utilisés dans la présente Politique de Confidentialité ont la même signification que dans nos Conditions Générales.</p>

							<h2>Définitions</h2>
							<ul>
								<li>
									<p><strong>Service</strong></p>
										<p>Par Service on entend le site web et l'application mobile GuitarBox exploités par GuitarBox</p>
									</li>
								<li>
									<p><strong>Données à caractère personnel</strong></p>
									<p>Données à Caractère Personnel désigne des données concernant un individu vivant qui peut être identifié à partir de ces données (ou à partir de ces données et d'autres informations en notre possession ou susceptibles d'entrer en notre possession).</p>
								</li>
								<li>
									<p><strong>Données d'Utilisation</strong></p>
									<p>Les Données d'Utilisation sont recueillies automatiquement et sont générées soit par l'utilisation du Service, soit par l'infrastructure du Service proprement dite (par exemple, durée de consultation d'une page).</p>
								</li>
								<li>
									<p><strong>Cookies</strong></p>
									<p>Les cookies sont de petits fichiers enregistrés sur votre dispositif (ordinateur ou dispositif mobile).</p>
								</li>
							</ul>

							<h2>Collecte et utilisation des données</h2>
							<p>Nous recueillons plusieurs types de données à différentes fins en vue de vous fournir notre Service et de l'améliorer.</p>

							<h3>Types de données recueillies</h3>

							<h4>Données à Caractère Personnel</h4>
							<p>Lorsque vous utilisez notre Service, il est possible que nous vous demandions de nous fournir certaines données personnelles nominatives qui peuvent servir à vous contacter ou à vous identifier (\"Données à Caractère Personnel\"). Les données personnelles nominatives peuvent comprendre, mais de manière non limitative:</p>

							<ul>
								<li>Cookies et Données d'Utilisation</li>
							</ul>

							<h4>Données d'Utilisation</h4>

							<p>Nous pouvons également recueillir les informations que votre navigateur envoie chaque fois que vous consultez notre Service ou que vous accédez au Service par le biais d'un dispositif mobile (\"Données d'Utilisation\").</p>
							<p>Ces Données d'Utilisation peuvent comprendre des informations telles que l'adresse de protocole Internet (c.-à-d. l'adresse IP) de votre ordinateur, le type de navigateur, la version du navigateur, les pages de notre Service que vous consultez, la date et l'heure de votre visite, le temps passé sur ces pages, les identifiants uniques de dispositifs ainsi que d'autres données de diagnostic.</p>
							<p>Lorsque vous accédez au Service au moyen d'un dispositif mobile, ces Données d'Utilisation peuvent comprendre des informations telles que le type de dispositif mobile que vous utilisez, l'identifiant unique de votre dispositif mobile, l'adresse IP de votre dispositif mobile, votre système d'exploitation mobile, le type de navigateur Internet mobile que vous utilisez, les identifiants uniques de dispositifs ainsi que d'autres données de diagnostic.</p>

							<h4>Suivi et données de cookies</h4>
							<p>Nous avons recours à des cookies et à d'autres technologies de suivi similaires pour effectuer un suivi des activités effectuées dans notre Service, et nous conservons certaines informations.</p>
							<p>Les cookies sont des fichiers à faible volume de données pouvant comporter un identifiant unique anonyme. Les cookies sont envoyés à votre navigateur depuis un site web et sont stockés sur votre dispositif. D'autres technologies de suivi telles que les pixels, les balises et les scripts sont également utilisées pour recueillir et suivre des informations et afin d'améliorer et d'analyser notre Service.</p>
							<p>Vous pouvez demander à votre navigateur de refuser tous les cookies ou de vous avertir lorsqu'un cookie est envoyé. Toutefois, si vous n'acceptez pas les cookies, il se peut que vous ne puissiez pas utiliser certains éléments de notre Service.</p>
							<p>Exemples de cookies que nous utilisons :</p>
							<ul>
								<li><strong>Cookies de Session.</strong> Nous utilisons des Cookies de Session pour faire fonctionner notre Service.</li>
								<li><strong>Cookies de Préférences.</strong> Nous utilisons des Cookies de Préférences pour mémoriser vos préférences et vos différents paramètres.</li>
								<li><strong>Cookies de Sécurité.</strong> Nous utilisons des Cookies de Sécurité pour des raisons de sécurité.</li>
							</ul>

							<h2>Utilisation des données</h2> 

							<p>GuitarBox utilise les données recueillies à des fins diverses:</p>    
							<ul>
								<li>Pour fournir et assurer notre Service</li>
								<li>Pour vous faire part des changements apportés à notre Service</li>
								<li>Pour vous permettre d'utiliser les fonctions interactives de notre Service quand vous le souhaitez</li>
								<li>Pour assurer l'assistance client</li>
								<li>Pour recueillir des données précieuses ou d'analyses qui nous permettront d'améliorer notre Service</li>
								<li>Pour contrôler l'utilisation de notre Service</li>
								<li>Pour détecter, prévenir et régler les problèmes techniques</li>
							</ul>

							<h2>Transfert des données</h2>
							<p>Les informations vous concernant, notamment vos Données à Caractère Personnel, peuvent être transférées de votre région, province, pays, ou autre division territoriale vers des ordinateurs – et stockées sur ces derniers – situés à un endroit où la législation relative à la protection des données diffère de celle du territoire où vous résidez.</p>
							<p>Si vous résidez hors de/du Canada et que vous choisissez de nous communiquer des informations, sachez que nous transférons les données, y compris les Données à Caractère Personnel, vers le/la Canada et que nous les y traitons.</p>
							<p>En acceptant la présente Politique de Confidentialité puis en soumettant ces informations, vous consentez à ce transfert.</p>
							<p>GuitarBox prendra toutes les mesures raisonnablement nécessaires pour faire en sorte que vos données soient traitées de manière sécurisée et conformément à la présente Politique de Confidentialité et vos Données à Caractère Personnel ne seront transférées vers aucune organisation ni aucun pays à moins que des contrôles adéquats ne soient en place, notamment en ce qui concerne la sécurité de vos données et d'autres données personnelles.</p>

							<h2>Communication de données</h2>

							<h3>Exigences légales</h3>
							<p>GuitarBox peut communiquer vos Données à Caractère Personnel si elle estime de bonne foi que cela est nécessaire pour:</p>
							<ul>
								<li>S'acquitter d'une obligation légale</li>
								<li>Protéger et défendre les droits ou les biens de GuitarBox</li>
								<li>Prévenir d'éventuels actes répréhensibles ou enquêter sur de tels actes dans le cadre du Service </li>
								<li>Assurer la sécurité personnelle des utilisateurs du Service ou du public</li>
								<li>Se protéger contre la responsabilité civile</li>
							</ul>

							<h2>Sécurité des données</h2>
							<p>La sécurité de vos données nous tient à cœur. Toutefois, n'oubliez pas qu'aucune méthode de transmission de données par Internet ou méthode de stockage électronique n'est sûre à 100 %. Bien que nous nous efforcions d'utiliser des méthodes commercialement acceptables pour protéger vos Données à Caractère Personnel, nous ne pouvons pas leur garantir une sécurité absolue.</p>

							<h2>Prestataires de services</h2>
							<p>Nous pouvons faire appel à des sociétés tierces et à des tierces personnes pour faciliter la prestation de notre Service (\"Prestataires de Services\"), assurer le Service en notre nom, assurer des services liés au Service ou nous aider à analyser la façon dont notre Service est utilisé.</p>
							<p>Ces tiers n'ont accès à vos Données à Caractère Personnel que pour effectuer ces tâches en notre nom et il leur est interdit de les communiquer ou de les utiliser à quelle qu'autre fin. </p>



							<h2>Liens pointant vers d'autres sites</h2>
							<p>Il se peut que notre Service contienne des liens pointant vers d'autres sites que nous n'exploitons pas. Si vous cliquez sur un lien de tiers, vous serez redirigé vers le site de ce tiers. Nous vous recommandons vivement d'examiner la politique de confidentialité de chacun des sites que vous consultez.</p>
							<p>Nous n'avons aucun contrôle sur le contenu, les politiques ou pratiques de confidentialité des sites ou services de tiers et déclinons toute responsabilité en ce qui les concerne.</p>



							<h2>Modifications de la présente Politique de Confidentialité</h2>
							<p>Nous nous réservons le droit d'actualiser notre Politique de Confidentialité de temps à autre. Nous vous informerons de toute modification en publiant la nouvelle Politique de Confidentialité sur cette page.</p>
							<p>Avant que la modification ne prenne effet, nous vous en informerons par e-mail et/ou en plaçant un avis bien en vue dans notre Service et nous actualiserons la \"date de prise d'effet\" qui figure en haut de la présente Politique de Confidentialité.</p>
							<p>Nous vous conseillons de consulter la présente Politique de Confidentialité périodiquement pour prendre connaissance de toute modification. Les modifications apportées à la présente Politique de Confidentialité prennent effet lorsqu'elles sont publiées sur cette page.</p>


							<h2>Nous contacter</h2>
							<p>Pour toute question relative à la présente Politique de Confidentialité, veuillez nous contacter:</p>
							<ul>
								<li>Par courrier électronique: <a href=\"mailto:info@benoit-lord.ca\">info@benoit-lord.ca</a></li>
								<li>En consultant cette page sur notre site web: <a href=\"http://guitarbox.ca/?lang=fr#contact\" target=\"_blank\">guitarbox.ca/?lang=fr#contact</a></li>
							</ul>
							";
						}
						else if($_GET["lang"] == "en"){
							echo "
							<h1>Privacy Policy</h1>

							<p>Effective date: October 14, 2018</p>


							<p>GuitarBox (\"us\", \"we\", or \"our\") operates the  website and the GuitarBox mobile application (the \"Service\").</p>

							<p>This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data. Our Privacy Policy  for GuitarBox is managed through <a href=\"https://www.freeprivacypolicy.com/free-privacy-policy-generator.php\" target=\"_blank\">Free Privacy Policy</a>.</p>

							<p>We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions.</p>


							<h2>Information Collection And Use</h2>

							<p>We collect several different types of information for various purposes to provide and improve our Service to you.</p>

							<h3>Types of Data Collected</h3>

							<h4>Personal Data</h4>

							<p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (\"Personal Data\"). Personally identifiable information may include, but is not limited to:</p>

							<ul>
							<li>Cookies and Usage Data</li>
							</ul>

							<h4>Usage Data</h4>

							<p>We may also collect information that your browser sends whenever you visit our Service or when you access the Service by or through a mobile device (\"Usage Data\").</p>
							<p>This Usage Data may include information such as your computer's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
							<p>When you access the Service by or through a mobile device, this Usage Data may include information such as the type of mobile device you use, your mobile device unique ID, the IP address of your mobile device, your mobile operating system, the type of mobile Internet browser you use, unique device identifiers and other diagnostic data.</p>

							<h4>Tracking & Cookies Data</h4>
							<p>We use cookies and similar tracking technologies to track the activity on our Service and hold certain information.</p>
							<p>Cookies are files with small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Tracking technologies also used are beacons, tags, and scripts to collect and track information and to improve and analyze our Service.</p>
							<p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</p>
							<p>Examples of Cookies we use:</p>
							<ul>
								<li><strong>Session Cookies.</strong> We use Session Cookies to operate our Service.</li>
								<li><strong>Preference Cookies.</strong> We use Preference Cookies to remember your preferences and various settings.</li>
								<li><strong>Security Cookies.</strong> We use Security Cookies for security purposes.</li>
							</ul>

							<h2>Use of Data</h2>

							<p>GuitarBox uses the collected data for various purposes:</p>    
							<ul>
								<li>To provide and maintain the Service</li>
								<li>To notify you about changes to our Service</li>
								<li>To allow you to participate in interactive features of our Service when you choose to do so</li>
								<li>To provide customer care and support</li>
								<li>To provide analysis or valuable information so that we can improve the Service</li>
								<li>To monitor the usage of the Service</li>
								<li>To detect, prevent and address technical issues</li>
							</ul>

							<h2>Transfer Of Data</h2>
							<p>Your information, including Personal Data, may be transferred to — and maintained on — computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.</p>
							<p>If you are located outside Canada and choose to provide information to us, please note that we transfer the data, including Personal Data, to Canada and process it there.</p>
							<p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>
							<p>GuitarBox will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of your data and other personal information.</p>

							<h2>Disclosure Of Data</h2>

							<h3>Legal Requirements</h3>
							<p>GuitarBox may disclose your Personal Data in the good faith belief that such action is necessary to:</p>
							<ul>
								<li>To comply with a legal obligation</li>
								<li>To protect and defend the rights or property of GuitarBox</li>
								<li>To prevent or investigate possible wrongdoing in connection with the Service</li>
								<li>To protect the personal safety of users of the Service or the public</li>
								<li>To protect against legal liability</li>
							</ul>

							<h2>Security Of Data</h2>
							<p>The security of your data is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>

							<h2>Service Providers</h2>
							<p>We may employ third party companies and individuals to facilitate our Service (\"Service Providers\"), to provide the Service on our behalf, to perform Service-related services or to assist us in analyzing how our Service is used.</p>
							<p>These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>



							<h2>Links To Other Sites</h2>
							<p>Our Service may contain links to other sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.</p>
							<p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>


							<h2>Changes To This Privacy Policy</h2>
							<p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>
							<p>We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update the \"effective date\" at the top of this Privacy Policy.</p>
							<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>


							<h2>Contact Us</h2>
							<p>If you have any questions about this Privacy Policy, please contact us:</p>
							<ul>
								<li>By email: <a href=\"mailto:info@benoit-lord.ca\">info@benoit-lord.ca</a></li>
								<li>By visiting this page on our website: <a href=\"http://guitarbox.ca?lang=en#contact\" target=\"_blank\">guitarbox.ca?lang=en#contact</a></li>
							</ul>
							";
						}
						else{
							echo "";
						}
					?>
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