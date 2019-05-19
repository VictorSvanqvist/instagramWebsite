

<!DOCTYPE html>
<html>
<head>

	<title>Instabot.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css.css?v=2">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

<script>

  function hidebuttons(){
    $('.show-login-btn').css("display", "none");
    $('.show-signup-btn').css("display", "none");
    $('.show-logout-btn').css("display", "-webkit-box");
  }

  function showbuttons(){
    $('.show-login-btn').css("display", "-webkit-box");
    $('.show-signup-btn').css("display", "-webkit-box");
    $('.show-logout-btn').css("display", "none");
  }

</script>

<div id="header">
  <h1>Instabot</h1>
	<div class="show-login-btn"><i class="fas fa-sign-in-alt"></i> Login</div>
  <div class="show-signup-btn"><i class="fas fa-sign-in-alt"></i> Signup</div>
  <div class="show-logout-btn"><i class="fas fa-sign-in-alt"></i> Logout</div>
</div>

<div id="content">

  <?php
      session_start();
      $loginPage;
      if ( isset( $_SESSION['login_user'] ) ) {
        // Grab user data from the database using the user_id
        // Let them access the "logged in only" pages
        $name = $_SESSION['login_user'];
        $loginPage = "Welcome $name";
        echo '<script>',
        'hidebuttons();',
        '</script>';
      } else {
        $loginPage = "Not logged in";
        echo '<script>',
        'showbuttons();',
        '</script>';
      }
      if ( isset( $_SESSION['user_exists'] ) ) {
        echo '<script>',
        'alert("User already exists")',
        '</script>';
        session_destroy();
      }
      if ( isset( $_SESSION['incorrect'] ) ) {
        echo '<script>',
        'alert("incorrect username or password")',
        '</script>';
        session_destroy();
      }
  ?>


    <H1 id="greeting"><?php echo $loginPage; ?></H1>
    <div id="search">
      <input id="usernameInput" type="text"></input>
      <button onclick="loadDoc()">Load info</button>
    </div>
    
    <div id="instagramFrame">
      <div id="pic">
        <img id="profilePic" src="">
      </div>
      <div id="profileInfo">
        <p id="info2"><span id="followers" class="infoBorder">Followers:</span> <span id="following" class="infoBorder">Following:</span> <span id="posts" class="infoBorder">Posts:</span></p>
        <p id="instaInfo">info:</p>
      </div>

    </div>






	<div class="login-box">
    	<div class="hide-login-btn"><i id="cross" class="fas fa-times-circle"></i></div>
    		<form class="login-form" method="post" action="login.php" autocomplete="off">
   		 		<h1>Welcome</h1>
    			<input class="txtb" type="text" name="username" placeholder="Username">
    			<input class="txtb" type="password" name="password" placeholder="Password">
    			<input class="login-btn" type="submit" name="login" value="login">
    		</form>
    	</div>
	</div>

	<div class="signup-box">
    	<div class="hide-signup-btn"><i id="cross" class="fas fa-times-circle"></i></div>
    		<form class="signup-form" method="post" action="signup.php" autocomplete="off">
   		 		<h1>Welcome</h1>
    			<input class="txtb" type="text" name="username" placeholder="Username">
    			<input class="txtb" type="password" name="password" placeholder="Password">
    			<input class="sign-up-btn" type="submit" name="signup" value="signup">
    			<script>
    			</script>
    		</form>
    	</div>
	</div>




<div id="footer">
  <h1>This is a footer</h1>
</div>



<script type="text/javascript">


function loadDoc() {
  var username = document.getElementById("usernameInput").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var igProfile = JSON.parse(this.responseText);
      var profilePicture = igProfile.pic;
      var igProfileArray = igProfile.tags.split(', ');

      var parseNumber2 = igProfileArray[2].split(' - ')

      document.getElementById("profilePic").src = profilePicture;
      document.getElementById("followers").innerHTML = igProfileArray[0];
      document.getElementById("following").innerHTML = igProfileArray[1];
      document.getElementById("posts").innerHTML = parseNumber2[0];
      document.getElementById("instaInfo").innerHTML = parseNumber2[1];





    }
  };
  xhttp.open("POST", "https://www.igexclusive.com/instagram-private-profile-viewer/profile.php?", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=UTF-8");
  xhttp.setRequestHeader("Accept-Language", "sv-SE,sv;q=0.8,en-US;q=0.5,en;q=0.3");
  xhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest");
  xhttp.setRequestHeader("Accept", "*/*");
  var usernameString = "username="+username;
  xhttp.send(usernameString);
}


  $(".show-login-btn").on("click",function(){
    $(".login-box").toggleClass("showed");
  });
  $(".hide-login-btn").on("click",function(){
    $(".login-box").toggleClass("showed");
  });
  $(".show-signup-btn").on("click",function(){
    $(".signup-box").toggleClass("showed");
  });
  $(".show-logout-btn").on("click",function(){
    window.location.replace("logout.php");
  });
  $(".hide-signup-btn").on("click",function(){
    $(".signup-box").toggleClass("showed");
  });
</script>

</body>
</html>
