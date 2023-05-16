<?php
/************************
* PHP Form Processor  *
*************************/
$emailTo = "kingricdesign@gmail.com";
$subject = "Response from your site";
//Trim removes white space after strip_tags gets rid of any html, javascript, etc tags from the input
$name = trim(strip_tags($_POST['name']));
$email = trim(strip_tags($_POST['email']));
$question = trim(strip_tags($_POST['question']));

//Creating a single variable to format and hold all the inputs
$body = "
Website Contact Form
Name: $name
Email Address: $email
Comments: $question";

mail ($emailTo, $subject, $body, "From: <$email>");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About page</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" type="image/x-icon" href="images/poke.svg">
</head>
<body id="aPage">		
	<header>
		<div>
		<a href="index.html" > <img src=  "images/logo.png" /> </a>
				<a href="https://tickets.nianticlabs.com/events/#/login?returnUrl=%2Feventlisting&appId=pgo" target="_blank"> Tickets </a>
		</div>
		<nav>
			<ul>
				<li><a href="index.html" > Home</a></li> 
				<li><a href="tickets.html" > Products </a></li> 
				<li class="current"><a href="about.html" > About </a></li> 
			</ul>
		</nav>


	</header>
<main>
	<div class="hero"> 

	</div>
	<div> 
		<section> 
			<article> 
				<h2> Plan Your Trip!</h2>
				<p>The world of Pokémon GO combines with the majesty of Sunset Park—experience this unique event only in Las Vegas on February 18, 2023, and February 19, 2023.
Sunset Park
 </p>
			</article>
			<article>
						<h3> FAQ</h3>
			<details> 

				<summary><h4> Where is the entrance to Pokémon GO Tour: Hoenn – Las Vegas?</h4>	</summary>
				<p>Sunset Park is just a few miles from the Reid International Airport and is accessible on foot, by private vehicle, and by public transit.

Trainers can enter Pokémon GO Tour: Hoenn – Las Vegas via two entrances.
</br>

North Entrance: Sunset Road Entrance
South Entrance: South Eastern Ave
</br>
Please note that your ticket designates your starting time and date at Sunset Park. Event gameplay will begin automatically once you enter the park during your assigned time and date. You will not be able to play in the park before the time and date on your ticket.
 </p>
			</details>
			<details> 
				<summary><h4> What are the transit options for Pokémon GO Tour: Hoenn – Las Vegas?</h4></summary>
				<p>Airport
Las Vegas’s major airport is Reid International Airport (LAS). It takes approximately 10 minutes to drive from the airport to Sunset Park.

Public Transportation
Numerous bus routes serve Sunset Park, including routes 212, 110, 111, and 217. Route 212 serves the north entrance of the park via Sunset Road, and Route 217 serves the south entrance of the park via E Warm Springs Road. Route 110 serves the north and south entrances of the park via S Eastern Ave, and Route 111 serves the north and south entrances of the park via S Pecos Road.

Rideshare/Taxis
Uber, Lyft, and taxis have the following designated rideshare drop-off locations at Sunset Park.

North Entrance: Clark County Parks & Recreation Building off Mira Vista St.
South Entrance: Foxtail parking lot south of Sunset Park Pond
Biking / Wheeled Devices
You are welcome to ride your bike to the event, but the use of wheeled devices (bicycles, skateboards, roller skates, scooters, etc.) on the Sunset Park campus is not allowed. Children’s strollers and wheeled equipment used by disabled individuals are permitted. </p>
			</details>
			<details> 

				<summary><h4> Where Can I park for the event?</h4>	</summary>
				<p>Parking Lots
There is ample parking available within Sunset Park, including at the North Sunset Road Entrance and the South Eastern Ave Entrance.

Accessible Parking
All lots in Sunset Park have designated ADA parking spaces. There will be reserved ADA parking spaces available in the North Entrance parking lot at the Clark County Parks & Recreation Building.
 </p>
			</details>
			</article>

			<form action="test.php" name="signup" method="post"class="cf">
			<fieldset>
  			<h4>  Thank you for your question, we will get back to you within 3 buisness days </h4>
  			</fieldset>	
  			</form>


  								<div class="myBack">
			</div>
		</section>
		<aside>
			<h4> Gallery </h4>
			<div class="gall">
				<a href="images/pstop.jpg"><img src="images/pstop.jpg" /></a>
				<a href="images/zap.jpg"><img src="images/zap.jpg" /></a>
				<a href="images/egg.jpg"><img src="images/egg.jpg" /></a>
				<a href="images/bridge.jpg"><img src="images/bridge.jpg" /></a>
			</div>
		</aside>
	</div>
</main>
	<footer>
		<div>
		<article> 
<p> This is a student made site purely for the purpose of education. I do not claim the rights to any of the images, assets, articles, or other content on the site. If you wish to see the offical Pokemon GO Tour site please visit <a href="https://gotour.pokemongolive.com/?hl=en"></a></p>
		</article>
		<ul>
			<li> <a href="#"> Facebook </a> </li>
			<li> <a href="#"> Instagram </a> </li>
			<li> <a href="#"> LinkedIn </a> </li>
		</ul>
		<article>

			<ul> 
				<li> <a href="#"> Pokemon Company </a> </li>
				<li> <a href="#"> Nintendo</a> </li>
			</ul>
		</article>
	</div>
		<small>  @kingricdesign </small>
	</footer>
	
</body>
</html>