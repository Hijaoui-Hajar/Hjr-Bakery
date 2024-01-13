<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script 
		src="https://kit.fontawesome.com/fdfb0448c2.js" 
		crossorigin="anonymous">
	</script> <!--fontawesome-->
	<link rel="stylesheet" href="style.css"/>
	<title>Hjr Bakery</title>

</head>
<body>
	<header class="header">
		<a href="" class="logo"><img src="img/Logo.png"></a>
		<nav class="navbar">
			<a href="#Home">Home</a>
			<a href="#Cakes">Cakes</a>
			<a href="#Cheese-cakes">Cheesecakes</a>
			<a href="#new-arrivals">New arrivals</a>
			<a href="#About Us">About Us</a>
			<a href="#contact">Contact</a>
		</nav>
		<div class="icons">
			<div class="search-icon"><i class="fas fa-search"></i></div>
			<div class="cart-icon"><i class="fas fa-cart-arrow-down"></i></div>
			<div class="menu-icon"><i class="fas fa-bars"></i></div>
		</div>
		<div class="search-form" class="hidden">
			<input type="search" name="search" id="search-box" placeholder=" search here ...">
			<label for="search-box" class="fas fa-search"></label>
		</div>
		<div class="cart-items-container">
			<!--item 1-->
			<div class="cart-item">
				<span class="fas fa-times"></span>
				<img src="img/NewArrivals-Croissants.jpg" alt="">
				<div class="content">
					<h3>Croissant</h3>
					<div class="price">	$20.99/-</div>
				</div>
			</div>
			<!--item 2-->
			<div class="cart-item">
				<span class="fas fa-times"></span>
				<img src="img/NewArrivals-FruitTart.jpg" alt="">
				<div class="content">
					<h3>Tarte Fruits</h3>
					<div class="price">	$49.99/-</div>
				</div>
			</div>
			<!--item 3-->
			<div class="cart-item">
				<span class="fas fa-times"></span>
				<img src="img/NewArrivals-Pancakes.jpg" alt="">
				<div class="content">
					<h3>Pancake Fruits Sec</h3>
					<div class="price">	$29.99/-</div>
				</div>
			</div>
			<!--item 4-->
			<div class="cart-item">
				<span class="fas fa-times"></span>
				<img src="img/NewArrivals-Donuts.jpg" alt="">
				<div class="content">
					<h3>Yummy Donuts</h3>
					<div class="price">	$4.99/-</div>
				</div>
			</div>
			<a href="" class="btn">order now</a>
		</div>
	</header>
	<section class="home" id="Home">
		<div class="hero">
			<h3>indulge in heavenly sweet delights</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing Lorem, molestiae deleniti!</p>
			<a href="" class="btn">get yours now</a>
		</div>
	</section>
<!--cakes section-->	
	<section class="cakes" id="Cakes">
		<h3 class="title"> our <span> Cakes </span></h3>
		<div class="wrapper">
			<!-- item 1-->
			<div class="cake-card">
				<img src="img/OurCakes-Cake1.jpg" alt="">
				<h3>Ice Cake </h3>
				<div class="price">$39.99/-<span>$49.99</span></div>
				<a href="" class="btn">add to cart</a>
			</div>
			<!-- item 2-->
			<div class="cake-card">
				<img src="img/OurCakes-Cake2.jpg" alt="">
				<h3>Cream Cake </h3>
				<div class="price">$49.99/-</div>
				<a href="" class="btn">add to cart</a>
			</div>
			<!-- item 3-->
			<div class="cake-card">
				<img src="img/OurCakes-Cake3.jpg" alt="">
				<h3>Chocolate Cake </h3>
				<div class="price">$29.99/-</div>
				<a href="" class="btn">add to cart</a>
			</div>
			<!-- item 4-->
			<div class="cake-card">
				<img src="img/OurCakes-Cake4.jpg" alt="">
				<h3>Pary Cake </h3>
				<div class="price">$29.99/-</div>
				<a href="" class="btn">add to cart</a>
			</div>
			<!-- item 5-->
			<div class="cake-card">
				<img src="img/OurCakes-Cake5.jpg" alt="">
				<h3>Birthday Cake </h3>
				<div class="price">$499.99/-</div>
				<a href="" class="btn">add to cart</a>
			</div>
			<!-- item 6-->
			<div class="cake-card">
				<img src="img/OurCakes-Cake6.jpg" alt="">
				<h3>Wedding Cake </h3>
				<div class="price">$499.99/- <span>$599.99</span></div>
				<a href="" class="btn">add to cart</a>
			</div>
		</div>
	</section>
<!--Cheesecakes section-->
	<section class="Cheese-cakes" id="Cheese-cakes">
		<h3 class="title"> our <span> Cheese Cakes </span></h3>
		<div class="wrapper">
			<!-- cheese cake 1-->
			<div class="cheese-card">
				<div class="icons">
					<a class="fa-solid fa-cart-shopping"></a>
					<a class="fa-solid fa-heart"></a>
					<a class="fa-solid fa-eye"></a>
				</div>
				<div class="img">
					<img src="img/OurCheeseCakes-Cheese1.jpg">
				</div>
				<div class="content">
					<h3> Strawberry CheeseCake </h3>
					<div class="stars">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star-half-stroke"></i>
					</div>
					<div class="price">$15.99/-<span>$20.99</span></div>
				</div>		
			</div>
			<!-- chesse cake 2-->
			<div class="cheese-card">
				<div class="icons">
					<a class="fa-solid fa-cart-shopping"></a>
					<a class="fa-solid fa-heart"></a>
					<a class="fa-solid fa-eye"></a>
				</div>
				<div class="img">
					<img src="img/OurCheeseCakes-Cheese2.jpg">
				</div>
				<div class="content">
					<h3> Lemon CheeseCake </h3>
					<div class="stars">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star-half-stroke"></i>
					</div>
					<div class="price">$15.99/-<span>$20.99</span></div>
				</div>		
			</div>
			<!-- cheese cake 3-->
			<div class="cheese-card">
				<div class="icons">
					<a class="fa-solid fa-cart-shopping"></a>
					<a class="fa-solid fa-heart"></a>
					<a class="fa-solid fa-eye"></a>
				</div>
				<div class="img">
					<img src="img/OurCheeseCakes-Cheese3.jpg">
				</div>
				<div class="content">
					<h3> Chocolate CheeseCake </h3>
					<div class="stars">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star-half-stroke"></i>
					</div>
					<div class="price">$15.99/-<span>$20.99</span></div>
				</div>		
			</div>
		</div>
	</section>
<!----------------new arrivals section------------------------>		
	<section class="new-arrivals" id="new-arrivals">
		<h1 class="title">New <span>arrivals</span></h1>
		<div class="wrapper">
			<!--new arrival 1-->	
			<div class="card">
				<div class="img">
					<img src="img/NewArrivals-Macaron.jpg" >
				</div>
				<div class="content">
					<a><span>Raspberry Macarons</span></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugit rerum blanditiis ea dolorem. Corporis fugit impedit minus vitae, doloremque provident saepe ipsum dolore nulla, suscipit quos, exercitationem porro ea.</p>
					<a class="btn">explore</a>
				</div>
			</div>
			<!--new arrival 2-->	
			<div class="card">
				<div class="img">
					<img src="img/NewArrivals-Croissants.jpg" >
				</div>
				<div class="content">
					<a><span>Croissants</span></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugit rerum blanditiis ea dolorem. Corporis fugit impedit minus vitae, doloremque provident saepe ipsum dolore nulla, suscipit quos, exercitationem porro ea.</p>
					<a class="btn">explore</a>
				</div>
			</div>
			<!--new arrival 3-->	
			<div class="card">
				<div class="img">
					<img src="img/NewArrivals-Pancakes.jpg" >
				</div>
				<div class="content">
					<a><span>Pancakes</span></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugit rerum blanditiis ea dolorem. Corporis fugit impedit minus vitae, doloremque provident saepe ipsum dolore nulla, suscipit quos, exercitationem porro ea.</p>
					<a class="btn">explore</a>
				</div>
			</div>
			<!--new arrival 4-->	
			<div class="card">
				<div class="img">
					<img src="img/NewArrivals-FruitTart.jpg" >
				</div>
				<div class="content">
					<a><span>Fruit Tart</span></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugit rerum blanditiis ea dolorem. Corporis fugit impedit minus vitae, doloremque provident saepe ipsum dolore nulla, suscipit quos, exercitationem porro ea.</p>
					<a class="btn">explore</a>
				</div>
			</div>
			<!--new arrival 5-->	
			<div class="card">
				<div class="img">
					<img src="img/NewArrivals-PistachioCupcake.jpg" >
				</div>
				<div class="content">
					<a><span>Pistachio Cupcake</span></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugit rerum blanditiis ea dolorem. Corporis fugit impedit minus vitae, doloremque provident saepe ipsum dolore nulla, suscipit quos, exercitationem porro ea.</p>
					<a class="btn">explore</a>
				</div>
			</div>
			<!--new arrival 6-->	
			<div class="card">
				<div class="img">
					<img src="img/NewArrivals-Donuts.jpg" >
				</div>
				<div class="content">
					<a><span>Donuts</span></a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugit rerum blanditiis ea dolorem. Corporis fugit impedit minus vitae, doloremque provident saepe ipsum dolore nulla, suscipit quos, exercitationem porro ea.</p>
					<a class="btn">explore</a>
				</div>
			</div>
		</div>
	</section>
<!------------------about us section---------------------->
	<section class="about" id="About Us">
		<h1 class="title"><span> About </span> Us </h1>
		<div class="container">
			<div class="img">
				<img src="img/AboutUs.jpg">
			</div>
			<div class="content">
				<h3>What Makes Us Different</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
				Illo dolore dolorem a reiciendis tempore, alias porro magni incidunt culpa voluptatem delectus.
				Corrupti saepe reiciendis esse corporis earum temporibus in sunt.
			</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
				Illo dolore dolorem a reiciendis tempore, alias porro magni incidunt culpa voluptatem delectus.
				Corrupti saepe reiciendis esse corporis earum temporibus in sunt.
			</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
				Illo dolore dolorem a reiciendis tempore, alias porro magni incidunt culpa voluptatem delectus.
				Corrupti saepe reiciendis esse corporis earum temporibus in sunt.
			</p>
			<a href="" class="btn">learn more</a>
			</div>
		</div>
	</section>
<!--------------------contact section----------------------->
	<section class="contact" id="contact">
		<h1 class="title"><span>Contact </span> us</h1>
		<div class="contents">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53542.62017426819!2d-7.619659099999982!3d32.99286535000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda6055da9429e99%3A0x3f8d5e95dedefa12!2sSettat!5e0!3m2!1sfr!2sma!4v1705013415629!5m2!1sfr!2sma"   
				loading="lazy" 
				referrerpolicy="no-referrer-when-downgrade">
			</iframe>
			<form method="post" action="traitement.php" >
				<h3>Get in touch</h3>
				<div class="input-box">
					<span class="fas fa-user"></span>
					<input type="text" name="name" placeholder="name" required>
				</div>
				<div class="input-box">
					<span class="fas fa-envelope"></span>
					<input type="text" name="email" placeholder="email" required>
				</div>
				<div class="input-box">
					<span class="fas fa-phone"></span>
					<input type="text" name="phone" placeholder="phone" required>
				</div>
				<button class="btn" type="submit" name="submit">Contact Now</button>
	
			</form>
		</div>

	</section>

<!----------------------footer------------------------------->	
<footer class="footer">
        <div class="social-media">
        	<a href="" class="fab fa-facebook-f"></a>   
			<a href="" class="fab fa-twitter"></a> 
			<a href="" class="fab fa-instagram"></a> 
			<a href="" class="fab fa-linkedin"></a> 
			<a href="" class="fab fa-pinterest"></a>
		</div>
		<div class="links">
			<a href="#Home">Home</a>
			<a href="#Cakes">Cakes</a>
			<a href="#Cheese-cakes">Cheesecakes</a>
			<a href="#new-arrivals">New arrivals</a>
			<a href="#About Us">About Us</a>
			<a href="#contact">Contact</a>
		</div>
        <div class="credits">
			created by <span>Hajar Hijaoui</span> | all rights reserved. 
		</div>
</footer>
	<script defer src="script.js"></script>
</body>
</html>