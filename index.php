<?php 
session_start();

// if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


// 	// session_start();
// 	// if(!empty($_SESSION["userId"])) {
// 	//     require_once './view/dashboard.php';
// 	// } else {
// 	//     require_once './accounts/login-form.php';
// 	// }

 ?>

<html>
<head>
	<meta charset= "utf-8" >
	<link rel="stylesheet" href="assets/css/style.css" >
	<link rel="stylesheet" href="assets/css/cart.css" >
	
	<script>document.getElementsByTagName("html")[0].className += " js";</script>
	<meta name="google-signin-client_id" content="888681290852-hacdqsm1hh17e3jg917rv3iotp63ri9o.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	
	<script>
			  function signOut() {
				var auth2 = gapi.auth2.getAuthInstance();
				auth2.signOut().then(function () {
				  console.log('User signed out.');
				});
			  }
	</script>
	
	<link rel="shortcut icon" href="https://th.bing.com/th/id/R.82e1ab0db6d33eb2c369e41d01aef007?rik=6ajmi%2f5O62MJVA&pid=ImgRaw" type="image/x-icon">
	<title> MrBeast Burger</title>
	
</head>
<body>
	
	<!-- <div class="alert">
	  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
	  <strong>Info!</strong>Nav bar only works after scrolling past video. I'm working on it.
	</div> -->
	<div class="horizontal-navbar" style="z-index: 1">
	
		<ul class="horizontal navbar" >
		  <li><a class="active" href="#">Home</a></li>
		  <li><a href="#menu">Menu</a></li>
		  <li><a href="contact.html">Contact</a></li>
		  
		  	<div class="dropdown" style="float:right">
			  <button class="dropbtn" ><?php echo $_SESSION['name']; ?></button>
			  <div class="dropdown-content">
			  	<?php 
			  		if($_SESSION['role'] == 'admin'){ ?>
			  			<a href="admin/index.php">Admin console</a>
			  			<a href="upload/index.php">Upload</a>
			  			<?php
			  		}
			  	?>
			    <a href="accounts/change-password.php">Change Password</a>
			    <a href="accounts/logout.php" onclick="signOut();">Logout</a>
			    <script>
				  function signOut() {
				    var auth2 = gapi.auth2.getAuthInstance();
				    auth2.signOut().then(function () {
				      console.log('User signed out.');
				    });
				  }
				</script>
			  </div>
			</div>

		</ul>
	
	</div>
	

	<div class="jumbotron jumbotron-fluid">
	  <div style="z-index: -1">
		  <video id="video" preload="" muted="" autoplay="" loop="" style="z-index: -1">
			<source src="assets/img/Hero.mp4" type="video/mp4">
		  </video>
	  </div>
	  
	  <div id="hero-content" class="container">
			<h1 id="hero-header-one">Real <br> Meat</h1><br>
			<h1 id="hero-header-two">Real <br> Cheese</h1><br>
			<p id="header-text"> Amazing buns. </p>
			
		</div>
		<div id="order" class="container">
			<button class="order" target="" onclick="window.location.href='#gallery'">Order Now!</button>
		</div>
		
	  </div>
	
	
	<div class="gallery" id="gallery">
	  <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="500.00">
		<img src="https://media.cylex.us.com/companies/3328/5406/images/961237296-img5_87452_large.jpg" alt="Chandler Burger" width="600" height="400">
	  </a>
	  <div class="desc">Chandler Burger</div>
	</div>

	<div class="gallery">
	  <a href="#1" class="cd-add-to-cart js-cd-add-to-cart" data-price="690.00">
		<img src="https://media.cylex.us.com/companies/3328/5406/images/-714598577-img6_965238_large.jpg" alt="Beast Burger" width="600" height="400">
	  </a>
	  <div class="desc">Beast burger</div>
	</div>

	<div class="gallery">
	  <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="420.00">
		<img src="https://media.cylex.us.com/companies/3328/5406/images/810305058-img8_962479_large.jpg" alt="Karl burger" width="600" height="400">
	  </a>
	  <div class="desc">Karl Burger</div>
	</div>
	
	<div class="gallery">
	  <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="450.00">
		<img src="https://media.cylex.us.com/companies/3328/5406/images/546015766-img4_497238_large.jpg" alt="Chris burger" width="600" height="400">
	  </a>
	  <div class="desc">Chris burger</div>
	</div>

	<div class="gallery">
	  <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="900.00">
		<img src="https://media.cylex.us.com/companies/3328/5406/images/-1572336330-img1_149895_large.jpg" alt="Happy meal " width="600" height="400">
	  </a>
	  <div class="desc"> Happy meal</div>
	</div>
	
	<div class="gallery">
	  <a href="#0" class="cd-add-to-cart js-cd-add-to-cart" data-price="1200.00">
		<img src="https://media.cylex.us.com/companies/3328/5406/images/-770972637-img2_717238_large.jpg" alt=" Combo " width="600" height="400">
	  </a>
	  <div class="desc">Combo</div>
	</div>
	
	<!-- <div class="gallery">
	  <a target="_blank" href="">
		<img src="" alt=" burger" width="600" height="400">
	  </a>
	  <div class="desc"> burger</div>
	</div> -->
<!-- 	<span class="zzz">
                        <div class="alpha">
                            <img data-crop-mode="fill" src="https://www.bing.com/th?id=ALSTUF4DBD5C1B72DA87EEB0A6ADB4322EB48FB797D25D0669BA3EC4745CFFA06A672&w=472&h=280&rs=2&o=6&oif=webp&pid=SANGAM" width="196">
                        </div>
                     
                        <div class="bravo">
                            <h6>Burgers</h6>
                        </div>
    </span>            
	<span class="yyy">
                        <div class="alpha">
                            <img data-crop-mode="fill" src="https://www.bing.com/th?u=https%3a%2f%2ftse2.mm.bing.net%2fth%3fid%3dOIP.sHMJFaKLbDCQ5PgqvtnaHAHaHa&ehk=Z8W7zOvevq8UEJLyxpYzVBxCbTBmlbPBGIJzv0T6si4%3d&w=169&h=169&pcl=fbf4ed&o=6&pid=AppEx" width="196">
                        </div>
                     
                        <div class="bravo">
                            <h6>Sausage Roll</h6>
                        </div>
    </span>    
	<span class="xyz">
                        <div class="alpha">
                            <img data-crop-mode="fill" src="https://th.bing.com/th/id/R.2fa4818a7129fc4f2e4bc4fc3c2a26df?rik=uZIiHAzJIvu6BA&riu=http%3a%2f%2f3ox07h3l1e7bf7g6k1dyp4un2c.wpengine.netdna-cdn.com%2fwp-content%2fuploads%2f2014%2f04%2frick-roll_o_724794.jpg&ehk=vWv4OSaSY7EjZNk8lGfHpZn2Jpf496gsvDux0Cpy3Nc%3d&risl=&pid=ImgRaw" width="196">
                        </div>
                     
                        <div class="bravo">
                            <h6>Rick roll</h6>
                        </div>
    </span> -->    
	
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	<br><br><br><br>
	
					
					
	
	<div>
		<div class="charlie">
				<h1 class="delta" id="menu">Special Menu</h1>
				<hr>
		</div>
	
	<div class="menu" >
	  <a target="_blank" href="https://www.ginx.tv/uploads/mrbeast_burgers_menu_1.jpg">
		<img src="https://www.ginx.tv/uploads/mrbeast_burgers_menu_1.jpg" alt="Menu" width="750" height="1100">
	  </a>
	  
	</div>
		
	
	</div>
	
	<!-- <div >
		<div >
			<div class="charlie">
				<h1 class="delta">Special Menu</h1>
				<hr>
			</div>
			<div class="echo">
				<h4>Burgers ................ <span>1,000/=</span></h4>
				<h5>Chicken / Beef</h5>
			</div>
			<div class="echo">
				<h4>Pizza ................ <span>2,500/=</span></h4>
				<h5>Chicken / Beef / Pineapple</h5>
			</div>
			<div class="echo">
				<h4>Sausage rolls ................ <span>600/=</span></h4>
				<h5>Chicken / Beef / Pork</h5>
			</div>
			<div class="echo">
				<h4>Salad ................ <span>200/=</span></h4>
				<h5>Pickels / Letuce </h5>
			</div>
			<div class="echo">
				<h4>Fries ................ <span>350/=</span></h4>
				<h5>Standard / Crinkle </h5>
			</div>
			
		</div> 
	</div> -->


	<br>
	<br><br>

<!-- 	<form id=registerfrm">
	  <div class="container">
		<h1>Register</h1>
		<p>Please fill in this form to create an account.</p>
		<hr>

		<label for="email"><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email" id="email" required> <br><br>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" id="psw" required> <br><br>

		<label for="psw-repeat"><b>Repeat Password</b></label>
		<input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
		<hr><br>

		<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p><br>
		<button type="submit" class="registerbtn">Register</button>
	  </div>

	  <div class="container signin">
		<p>Already have an account? <a href="#">Sign in</a>.</p>
	  </div>
	</form>
	<br><br>
		
	<form>
	
		<div class="container">
		  <label for="uname"><b>Username</b></label>
		  <input type="text" placeholder="Enter Username" name="uname" required>

		  <label for="psw"><b>Password</b></label>
		  <input type="password" placeholder="Enter Password" name="psw" required>

		  <button type="submit">Login</button>
		  <label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
		  </label>
		</div>
	
	</form> -->

	<div class="hours" style="margin-bottom:100px" >
		<h2 class="heading">Open Hours</h2>
			<p>Sunday <span>10:30 AM - 10:00 PM</span></p>
			<p>Mon-Fri <span>9:00 AM - 8:00 PM</span></p>
			<p>Saturday <span>11:30 AM - 10:00 PM</span></p>
	</div>
	
	
	<!-- <div class="socials">
		<p><h1>Our socials: </h1></p>
		
		<a href="https://www.facebook.com/mrbeastburger" class="fa fa-facebook"></a>

		<a href="https://twitter.com/MrBeastBurger" class="fa fa-twitter"></a>

		<a href="https://www.youtube.com/user/MrBeast6000" class="fa fa-youtube"></a>

		<a href="https://www.instagram.com/mrbeastburger/" class="fa fa-instagram"></a>

		<a href="https://www.snapchat.com/add/mrbeast" class="fa fa-snapchat-ghost"></a>

		<a href="https://www.reddit.com/r/MrBeastBurger/" class="fa fa-reddit"></a>
	
	
	</div> -->
	
	<footer class="footer" >
	<span>All Rights Reserved</span>
	<span style="float:right">© 2021 Edwin Kuria</span>
	
	</footer>
	

	<div class="cd-cart cd-cart--empty js-cd-cart">
		<a href="#0" class="cd-cart__trigger text-replace">
			Cart
			<ul class="cd-cart__count"> <!-- cart items count -->
				<li>0</li>
				<li>0</li>
			</ul> <!-- .cd-cart__count -->
		</a>

		<div class="cd-cart__content">
			<div class="cd-cart__layout">
				<header class="cd-cart__header">
					<h2>Cart</h2>
					<span class="cd-cart__undo">Item removed. <a href="#0">Undo</a></span>
				</header>
				
				<div class="cd-cart__body">
					<ul>
						<!-- products added to the cart will be inserted here using JavaScript -->
					</ul>
				</div>

				<footer class="cd-cart__footer">

					<a href="#" onClick="MyWindow=window.open('https://www.paypal.com/us/signin','MyWindow','width=600,height=300'); return false;" class="cd-cart__checkout">
			  <em>Checkout - Kes<span>0</span>
				<svg class="icon icon--sm" viewBox="0 0 24 24"><g fill="none" stroke="currentColor"><line stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x1="3" y1="12" x2="21" y2="12"/><polyline stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="15,6 21,12 15,18 "/></g>
				</svg>
			  </em>
			</a>
				</footer>
			</div>
		</div> <!-- .cd-cart__content -->
	</div> <!-- cd-cart -->
	
	<script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
	<script src="assets/js/main.js"></script> 
		
</body>
</html>

<?php 
// }else{
//      header("Location: accounts/login.php");
//      exit();
// }
 ?>
