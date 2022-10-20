<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">

     <script src="https://apis.google.com/js/platform.js" async defer></script>
     <meta name="google-signin-client_id" content="888681290852-hacdqsm1hh17e3jg917rv3iotp63ri9o.apps.googleusercontent.com">
     <link rel="shortcut icon" href="https://th.bing.com/th/id/R.82e1ab0db6d33eb2c369e41d01aef007?rik=6ajmi%2f5O62MJVA&pid=ImgRaw" type="image/x-icon">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
     <form action="process_login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>

          <a> Or </a>

          <div class="g-signin2" data-onsuccess="onSignIn" href="../index.php"></div>


          <a href="signup.php" class="ca">Create an account</a>
     </form>

     <script>
          function onSignIn(googleUser) {
            // get user profile information
            console.log(googleUser.getBasicProfile())
          }
     </script>
     <script>
     
          function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
          }
     
     </script>
     
     <script>
       window.fbAsyncInit = function() {
          FB.init({
            appId      : 429191191821656,
            cookie     : true,
            xfbml      : true,
            version    : '{api-version}'
          });
            
          FB.AppEvents.logPageView();   
            
       };

       (function(d, s, id){
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement(s); js.id = id;
           js.src = "https://connect.facebook.net/en_US/sdk.js";
           fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
     </script>

</body>
</html>