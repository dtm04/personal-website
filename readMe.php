<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Development Final</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/FinalProject/styles/main.css">
  <link rel="stylesheet" type="text/css" href="/FinalProject/styles/readMe.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">BEER & CODE</a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="registerPage.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="index.php">Return Home</a></p>
      <p><a href="aboutMe.php">About the Author</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>TODO/Future Goals for this Site</h1>
      <ul>
        <li>Expand Usage of PunkAPI -- allow users to filter by any of the JSON results, and add favorites</li>
        <li>Improve session management -- make use of cookies, allow users to have a unique list of favorites</li>
        <li>Implement search functionality -- allow users to search the site and search the API</li>
        <li>Validatoin & Security -- Improve server-side PHP to add better validation</li>
        <li>MySQL -- create more tables, user tables to give logged in users more features</li>
        <li>Visual Tweaks -- improve CSS for pages that need it, standardized template</li>
        <li>Javascript -- Would love to do more Javascript coding in the future, much of my time was spent with PHP</li>
      </ul>
      <h1>Lessons Learned</h1>
      <ul>
        <li>PHP!...so much PHP.  Knew absolutely nothing about it until this project.  It's a surprisingly versatile language</li>
        <li>Managing a web server.  Using XAMPP and localhost with phpMyAdmin, I was able to get a better understanding of web site management</li>
        <li>Use a CSS framework.  All of my labs were basically hand designed and tweaked by me.  Using a CSS framework saves so much time.</li>
        <li>Working with a web API.  I used a wrapper for PunkAPI, but I learned a lot about using cURL to connect to APIs while working on this.</li>
        <li>PHP dependency management.  In setting up the API I learned how useful Composer is.</li>
        <li>Everything written in the future goals section can also apply to lessons learned.</li>
      </ul>
      <hr>
      <h3>Works Cited</h3>
      <p>Here are some links I found useful or made use of while working on this project.</p>
      <ul>
        <li><a href="https://punkapi.com/documentation/v2">Punk API</a></li>
        <li><a href="https://getbootstrap.com/docs/4.1/getting-started/introduction/">Bootstrap Docs</a></li>
        <li><a href="https://code.tutsplus.com/tutorials/creating-an-api-centric-web-application--net-23417">PHP API Tutorial</a></li>
        <li><a href="https://github.com/billythekid/PunkApi">API Wrapper</a></li>
        <li><a href="https://color.adobe.com/Beer-color-theme-6606211/">Color Theme</a></li>
        <li><a href="https://getcomposer.org/doc/">Composer Docs</a></li>
        <li><a href="https://www.w3schools.com/bootstrap/default.asp">w3schools</a></li>
        <li><a href="http://php.net/docs.php">PHP Docs</a></li>
        <li><a href="http://mrbool.com/how-to-create-a-login-page-with-php-and-mysql/28656">Registration Tutorial</a></li>
        <li><a href="https://www.sitepoint.com/users-php-sessions-mysql/">Session Managament</a></li>
        <li><a href="https://stackoverflow.com/">Stack Overflow</a></li>
        <li><a href="https://www.tutorialspoint.com/php/php_sessions.htm">More on Sessions</a></li>
      </ul>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>2018 - Don MacPhail - Web Development</p>
</footer>

</body>
</html>
