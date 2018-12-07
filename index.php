<?php
/* Home Page index.php
Don MacPhail
Web Development -- Final Project
*/
//helper functions for working with PunkAPI
include 'getBeer.php';
include 'include/config.php';
include 'include/login.php';
session_start();
if(isset($_SESSION['username'])) {
  $uname = $_SESSION['username'];
} else {
    $uname = 'guest';
}
if($uname == 'guest') {
  $src = "\"/FinalProject/img/unreg.png\"";
} else {
  $src = "\"/FinalProject/img/beerThumb.png\"";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Development Final</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/FinalProject/styles/main.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">BEER & CODE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><?php
          if (isset($_SESSION['username'])) {
            ?> <a href="welcome.php">PROFILE</a><?php
          } ?></li>
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#intro">INTRO</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="aboutMe.php">About</a></li>
            <li><a href="readMe.php">ReadMe</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="/FinalProject/img/beer1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3><span>Providence</span></h3>
          <p><span>Beer Flight at The Malted Barley</span></p>
        </div>      
      </div>

      <div class="item">
        <img src='/FinalProject/img/beer2.jpg' alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3><span>Boston</span></h3>
          <p><span>Asian beer at my favorite Thai food restaurant.</span></p>
        </div>      
      </div>
    
      <div class="item">
        <img src="/FinalProject/img/beer.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3><span>Ireland</span></h3>
          <p><span>Visiting a brewery, where the magic happens!</span></p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (introduction) -->
<div id="intro" class="container text-center">
  <h3>Introduction</h3>
  <p><em>Programming and beer!</em></p>
  <p>
    This website was created for the final project in a semester long web-development class.  I am a computer science
    student at Wentworth Institute of Technology, but have very little experience with developing web sites.  To make this
    site I used bootstrap css framework, php with XAMPP, linux virtual machine, PunkAPI for a beer API, and an open 
    source wrapper for the API foud on github, also called PunkApi, and Composer Dependency Manager for PHP.  Here on the 
    home page I have pulled 3 random beers from the API and presented their information in a visually appealing (hopefully!) way.  
    If you refresh the page you'll get 3 new random beers from the API.  Click on a beer for more info!
  </p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <?php 
        #getting 3 random beers from API
        $rb1 = getRandomBeer();
        saveImg($rb1, 'b1.png');
        $rb2 = getRandomBeer();
        saveImg($rb2, 'b2.png');
        $rb3 = getRandomBeer();
        saveImg($rb3, 'b3.png');
      ?>
      <p class="text-center"><strong><?=getName($rb1);?></strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="/FinalProject/img/b1.png" class="img-rounded beer" alt="Random Beer 1" width="25%" height="auto">
      </a>
      <div id="demo" class="collapse">
        <p>ABV: <?=getABV($rb1);?>%</p>
        <p><?=getTagLine($rb1);?></p>
        <p>First brewed on: <?=getBrewDate($rb1);?></p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong><?=getName($rb2);?></strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="/FinalProject/img/b2.png" class="img-rounded beer" alt="Random Beer 2" width="25%" height="auto">
      </a>
      <div id="demo2" class="collapse">
        <p>ABV: <?=getABV($rb2);?>%</p>
        <p><?=getTagLine($rb2);?></p>
        <p>First brewed on: <?=getBrewDate($rb2);?></p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong><?=getName($rb2);?></strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="/FinalProject/img/b3.png" class="img-rounded beer" alt="Random Beer 3" width="25%" height="auto">
      </a>
      <div id="demo3" class="collapse">
        <p>ABV: <?=getABV($rb3);?>%</p>
        <p><?=getTagLine($rb3);?></p>
        <p>First brewed on: <?=getBrewDate($rb3);?></p>
      </div>
    </div>
  </div>
</div>

<!-- Container (PHP Login) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Log In</h3>
    <p class="text-center">User authentication with PHP and MySQL because why not?</p>
    
    <!-- login modal -->
    <div class="row text-center">
      <div class="thumbnail">
        <img src=<?=$src;?> alt="thumbnail" width="400" height="300">
        <p><strong>Logged in as: <?=$uname?></strong></p>
        <p><?=date('l jS \of F Y h:i:s A')?></p>
        <?
        if($uname == "guest") {
          echo '<button class="btn" data-toggle="modal" data-target="#myModal">Login</button>';
        } else {
          echo '<a href="logout.php" class="btn btn-danger">Sign Out</a>';
        }
        echo '<br />';
        if(isset($password_err)) {
          echo '<p>'.$password_err.'</p>';
        }
        if(isset($username_err)) {
          echo '<p>'.$username_err.'</p>';
        }
        ?>
      </div>
    </div>
  </div>
</div>

<!-- Modal Login Form -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-check"></span>Log In</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
              <label for="username"><span class="glyphicon glyphicon-user"></span> User Name: </label>
              <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>" placeholder="User Name">
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
              <label for="password"><span class="glyphicon glyphicon-lock"></span> Password: </label>
              <input type="password" class="form-control" name="password" id="password" value="<?php echo $password; ?>" placeholder="Password">
            </div>
              <button type="submit" class="btn btn-block">Enter 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p><a href="registerPage.php">Register</a></p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>Questions, Comments, Job Opportunities?</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Taunton, MA</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 555-555-5555</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: macphaild@wit.edu</p>
    </div>
    <form name="Contac" method="post" action="email.php">
      <div class="col-md-8">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
        <br>
        <div class="row">
          <div class="col-md-12 form-group">
            <button class="btn pull-right" type="submit">Send</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  <br>
  <h3 class="text-center">From The Creator</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Beer</a></li>
    <li><a data-toggle="tab" href="#menu1">Programming</a></li>
    <li><a data-toggle="tab" href="#menu2">School</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Beer Recommendations</h2>
      <p>I'm a big fan of IPAs, anything hoppy is good with me.  Arrogant Bastard (Stone Brewing),
        Two Roads IPA, DogFish 30 or 60 minute IPA, Fiddlehead IPA, Otter Creek IPA </p>
      <p>Stouts!  Recently started enjoying some coffee stouts, chocolate stouts.  Otter Creek Couch
        Surfer is a good place to start, more recommendations to come soon</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Programming Experience</h2>
      <p>(In order of most familiar to least)</p>
      <p>Java, SQL, C#, C++, HTML, CSS, C, PHP, Javascript, Python, R</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Favorite Courses</h2>
      <p>Web development (obviously), Operating Systems, Software Engineering, Algorithms</p>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Bootstrap theme originally from w3schools, heavily modified by me.</p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
