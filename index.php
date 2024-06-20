<?php
  session_start();

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pokemon Trading Card Game</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Ubuntu:700" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/7d95cd1ec0.js" crossorigin="anonymous"></script>
  <style>

* {
	box-sizing: border-box;
}
html, body {
	min-height: 100%;
	background: #fff;
	color: #000;
}

body {
	font-family: 'Poppins', sans-serif;
	font-size: 1.4rem;
	text-rendering: optimizeLegibility;
	margin: 2%;
}

article, aside, audio,
footer, header, nav, section, video {
	display: block;
	}

h1, h2, h3, h4 {
	font-family: 'Ubuntu', sans-serif;
	font-size: 1.5em;
}

img {
	border: none;
	max-width: 100%;
}

.section-title {
	text-align: center;
	font-size: 3rem;
	padding-top: 1.5rem;
}

header {
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
	height: 100%;
}

.header {
	width: 100%;
	text-align: center;
	font-size: 3.5em;
	margin: 0;
	padding-top: 2%;
}

.logo {
	width: 15%;
	justify-content: center;
}

.navbar {
	width: 100%;
	display: flex;
	justify-content: space-around;
	background-color: #123524;
	border-top-left-radius: 20px;
	border-top-right-radius: 20px;
	border: solid 2px #000000;
}

a {
	text-decoration: none;
	width: 100%;
	font-weight: 700;
	outline: none;
	text-align: center;
	line-height: 3;
	color: #000000;
	transition-duration: 0.4s;
}

a:link,
a:visited,
a:focus {
	color: #ffffff;
}

a:hover {
	background: #138808;
}

a:active {
	background: #123524;
	outline-style: dotted;
	outline-color: #001F1B;
	outline-offset: -4px;
	transition-duration: 0s;
}

a.left-nav-button:hover,
a.left-nav-button:active,
a.left-nav-button:visited {
	border-top-left-radius: 20px;
}

a.right-nav-button:hover,
a.right-nav-button:active
a.left-nav-button:visited {
	border-top-right-radius: 20px;
}

.active-page {
	background: #123524;
	border-top-left-radius: 20px;
}

.hero {
	position: relative;
  background-image: url('jjkl.jpg');
	height: 100vh;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
}

.hero::before {
	content: "";
	background-size: cover;
	position: absolute;
	top: 0px;
	right: 0px;
	bottom: 0px;
	left: 0px;
	opacity: 0.7;
	border-bottom-left-radius: 20px;
	border-bottom-right-radius: 20px;
     border: solid 2px #000000;
     border-top: none;
}

.hero-description {
	position: relative;
	color: #000000;
	font-size: 1rem;
	line-height: 1.2;
	text-align: center;
}

.hero-description h2 {
	font-family: 'Pacifico', cursive;
	font-weight: 200;
	font-size: 5rem;
}

.about {
	display: flex;
	flex-direction: column;
	align-items: center;
	text-align: center;
}

.owner-image {
	width: 250px;
	border-radius: 50%;
	border: solid 2px #000000;
	margin-bottom: 0px;
}

.about-description {
	margin: 40px 0;
	font-size: 1.6rem;
	width: 60%;
}

.about-images {
	width: 100%;
	display: flex;
	justify-content: space-around;
}

.about-images a {
	text-decoration: none;
	width: auto;
	font-weight: normal;
	outline: none;
	text-align: center;
	line-height: 1;
	color: #000000;
	transition-duration: 0.4s;
}

.about-images a:link,
.about-images a:visited,
.about-images a:focus {
	color: #000000;
}

.about-images a:hover {
	background: #ffffff;
	transform: translate(0, -5%);
}

.about-images-item {
	margin: 2%;
	color: #00302A;
}

.about-image {
	width: 300px;
	height: 300px;
	border-radius: 50%;
	border: solid 2px #000000;
}

.about-image:hover {
	box-shadow: 0 5px 5px rgba(0, 0, 0, 0.5);
}

.shop-items {
	background: #005449;
	color: #ffffff;
	margin-top: 5%;
	border-radius: 20px;
}

.furniture {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
}

.candles {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
}

.lighting {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-around;
}

.items-title {
	width: 100%;
	text-align: center;
	font-size: 1.7em;
}

.item {
	width: 400px;
	margin: 0 5% 3% 5%;
}

.item img {
	width: 400px;
	height: 400px;
	border-radius: 20px;
	border: solid 2px #000000;
}

.price {
	font-weight: 600;
}

.contact {
	background-color: #00302A;
	color: #ffffff;
	text-align: center;
	border-radius: 20px;
}

.contact a:active,
.contact a:hover {
	padding: 0.5em;
	border-radius: 20px;
}

.footer {
	padding-top: 2em;
	padding-bottom: 1.5rem;
}

@media screen and (max-width: 480px) {

	.header {
		font-size: 1.9em;
	}

	.logo {
		width: 20%;
	}

	.navbar {
		flex-direction: column;
	}

	.hero {
		height: 50vh;
	}

	.hero-description {
		font-size: 1.4rem;
	}

	.hero-description h2 {
		font-size: 2.5rem;
	}

	.section-title {
		font-size: 2.5rem;
	}

	.owner-image {
		width: 150px;
	}

	.about-description {
		width: 100%;
		margin: 20px 0;
	}

	.about p {
		font-size: 0.8em;
	}

	.about-images {
		flex-direction: column;
	}

	.about-images-item h3 {
		font-size: 1.2em;
	}

	.about-image {
		width: 200px;
		height: 200px;
	}

	.items-title {
		font-size: 1.3em;
	}

	.mobile-span {
		display: inline-flex;
		justify-content: space-between;
		width: 100%;
	}

	.mobile-span.item-description {
		width: 60%;
	}

	div.mobile-span {
		font-size: 0.8em;
		margin: 0 0 5% 0;
	}

	div.price {
		margin-left: 5%;
	}

	.item {
		margin-bottom: 5%;
		width: 350px;
	}

	.item img {
		width: 350px;
		height: 350px;
	}

	.contact a {
		font-size: 1.3rem;
	}
}

@media screen and (min-width: 480px) and (max-width: 768px) {

	.header {
		font-size: 2.5em;
	}

	.logo {
		width: 25%;
	}

	.hero {
		height: 70vh;
	}

	.navbar {
		flex-direction: column;
	}

	.hero-description {
		font-size: 1.4rem;
	}

	.hero-description h2 {
		font-size: 2.5rem;
	}

	.owner-image {
		width: 175px;
	}

	.about-description {
		width: 100%;
	}

	.about p {
		font-size: 0.9em;
	}

	.about-images {
		flex-direction: column;
	}

	.about-images-item h3 {
		font-size: 1.4em;
	}

	.about-image {
		width: 250px;
		height: 250px;
	}

	.section-title {
		font-size: 2.6rem;
	}

	.items-title {
		font-size: 1.5em;
	}

	.mobile-span {
		display: inline-flex;
		justify-content: space-between;
		width: 100%;
	}

	.mobile-span.item-description {
		width: 60%;
	}

	div.mobile-span {
		font-size: 0.8em;
		margin: 0 0 5% 0;
	}

	div.price {
		margin-left: 5%;
	}

	.item {
		margin-bottom: 5%;
		width: 294px;
	}

	.item img {
		width: 294px;
		height: 294px;
	}

	.contact a {
		font-size: 1.2rem;
	}

}

.lag {
    height: 50%;
    width: 100%;
    background-image: url('135286.jpg');
    background-size: cover;
    background-position: center;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
}
  </style>
</head>

<body class="lag">
  <div class="header">
  </div>
  <header>

    <h3 class="header">Pokemon Trading Card Game Library</h3>

    <img class="logo" src="Pokemon-Logo-PNG-Pic.png" alt="IndutrialEdison Logo" />

    <nav class="navbar">
      <a href="#home" class="left-nav-button active-page">Home</a>
      <a href="#shop-items" class="right-nav-button">Pokemon Box & Packs</a>
      <a href="#about">About</a>
      <a href="#contact" class="right-nav-button">Contact</a>
      <a href="index.php?logout='1'" style="color: red;">logout</a>
    </nav>
  </header>

  <div class="hero">

    <div class="hero-description">
      <h2>Gotta Catch 'em All</h2>

      <p>The Pokémon Trading Card Game (TCG) is a popular collectible card game based on the Pokémon franchise. </p>
    </div>

  </div>

  <section class="about" id="about">

    <h2 class="section-title">About</h2>

    <p class="about-description">Initially released in Japan in the 1990s to accompany the Pokémon video games,
      the Pokémon Trading Card Game has transformed into one of the most popular trading card games of all-time.
      Because of the red-hot popularity of the franchise, some of the most expensive Pokemon cards can sell into
      the six-figure range and beyond. That may sound shocking, at first, but given that Pokémon is a worldwide phenom,
      there is a vast, passionate collector base around the globe just waiting to get their hands on these prized cards.
      From trophy cards, to First Edition Pokemon cards, to lesser-known rarities, the value of these cards is quite impressive.</p>

  </section>


  <section class="shop-items" id="shop-items">

    <div class="furniture" id="furniture">

      <h3 class="items-title">Pokemon Box & Packs</h3>

      <div class="item">
        <img src="images/shop-items/1.png" alt="Acacia End Table" />
        <div class="mobile-span">
          <div class="item-description">1Pokémon TCG: Scarlet & Violet—Paldean Fates Pokémon Center Elite Trainer Box</div>
          <div class="price">$159.95</div>
        </div>
      </div>

      <div class="item">
        <img src="images/shop-items/2.png" alt="Black Walnut End Table" />
        <div class="mobile-span">
          <div class="item-description">Pokémon TCG: Crown Zenith Elite Trainer Box</div>
          <div class="price">$189.95</div>
        </div>
      </div>

      <div class="item">
        <img src="images/shop-items/3.png" alt="Coffee Table" />
        <div class="mobile-span">
          <div class="item-description">Pokémon TCG: Mimikyu ex Showcase</div>
          <div class="price">$249.95</div>
        </div>
      </div>

    </div>

    <div class="candles" id="candles">
      <div class="item">
        <img src="images/shop-items/4.png" alt="Black Sea Candle" />
        <div class="mobile-span">
          <div class="item-description">Pokémon TCG: Mimikyu ex Showcase</div>
          <div class="price">$18.00</div>
        </div>
      </div>

      <div class="item">
        <img src="images/shop-items/5.png" alt="Eucalyptus Spa Candle" />
        <div class="mobile-span">
          <div class="item-description">Pokémon TCG: Trainer’s Toolkit</div>
          <div class="price">$18.00</div>
        </div>
      </div>

      <div class="item">
        <img src="images/shop-items/6.png" alt="Coconut Milk Candle" />
        <div class="mobile-span">
          <div class="item-description">Pokémon TCG: Collector Chest (Summer 2023: Sprigatito/Fuecoco/Quaxly)</div>
          <div class="price">$18.00</div>
        </div>
    </div>

  </section>

  <section class="contact" id="contact">

    <h2 class="section-title">Contact</h2>

    <a href="mailto:pacquingrafael007@gmail.com">pacquingrafael007@gmail.com</a></br>

    Facebook Account <a href="https://web.facebook.com/rafael.pacquing.55"
      target="_blank"<u>Click Here!</u></a>

    <p class="footer"><i class="fa-regular fa-copyright" style="color: #ffffff;"></i>Pokemon Trading Card Game Library 2024</p>

  </section>

  <script>

  </script>
</body>

</html>
