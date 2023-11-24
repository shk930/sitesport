<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tennis Score</title>
	<meta name="description" content="A free responsive website template made exclusively for Frittt by Themesforce and Sarfraz Shaukat">
	<meta name="keywords" content="website template, css3, one page, bootstrap, app template, web app, start-up">
	<meta name="author" content="Themesforce and Sarfraz Shaukat for Frittt">
	<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/all.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="wrapper">
		<header id="header">
			<div class="container">
				<div class="logo"><a href="#"><img style="height: 300px;" src="images/logo.jpg" alt="Sports"></a></div>
				<nav id="nav">
					<div class="opener-holder">
						<a href="#" class="nav-opener"><span></span></a>
					</div>
					
					<div class="nav-drop">
						<ul>
							<li class="active visible-sm visible-xs" style="color: black;"><a href="#">Accueil</a></li>
							<li><a href="#" style="color: black;">Résultats</a></li>
							<li><a href="#" style="color: black;">En Live</a></li>
							<li><a href="#" style="color: black;">Mes Favoris</a></li>
						</ul>
						
					</div>
				</nav>
			</div>
		</header>
	<section class="visual">
		<div class="container">
			<div class="text-block">
				<div class="heading-holder">
					<h1 style="color: black">Tennis Score</h1>
				</div>
			</div>
		</div>
		<img style="height: 900px; width: 1300px" src="images/img-bg-01.jpg" alt="" class="bg-stretch">
	</section>
	<section class="main">
		<div class="container">
			<div id="cta">
				<p class="btn btn-primary rounded">Vos résultats en direct</p>
			</div>
			<div class="row">
				<div class="text-box col-md-offset-1 col-md-10">
					<h2>À propos de nous</h2>
					<p>Nous vous proposons des résultats des match de tennis en direct, des liens pour regarder les match en direct</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Your existing HTML content... -->

<section class="area">
    <div class="container">
        <div class="subscribe">
            <h3>Contactez-nous par mail :</h3>
            <form method="post" action="mail.php">
                <div class="form-group">
                    <label for="nom">Nom:</label>
                    <input type="text" name="nom" id="nom" required placeholder="Nom" />
                </div>

                <div class="form-group">
                    <label for="objet">Objet du Message:</label>
                    <input type="text" name="objet" id="objet" required placeholder="Sujet" />
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required placeholder="email@exemple.com"/>
                </div>

                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" required></textarea>
                </div>

                <input type="submit" value="Envoyer Mon Message" name="ok"/>
            </form>
        </div>
    </div>
</section>

<!-- Your existing HTML content... -->



	
	<footer id="footer">
		<div class="container">
			<div class="footer-holder">
				<div class="row  text-center">
					<div class="col-md-12">
						<a href="#"><img style="height: 300px;" src="images/logo.jpg" alt="Sports HTML Template"></a>
					</div>
					  
				</div>
                <div class="row">
                	<div id="cta" class="cta-footer">
                        <p style="font-size: 20px;">Nous vous proposons des résultats des match de tennis en direct, des liens pour regarder les match en direct.</p>
                    </div>
                </div>
			</div>
		</div>
	</footer>
</div>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.main.js"></script>
</body>
</html>