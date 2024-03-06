<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- bootstrap link-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- site icon -->
  <link rel="icon" href="imgs/site-logo.png" type="image/icon type" />

  <title>JetWay</title>

  <link rel="stylesheet" href="css/style.css" />



</head>

<body>
  <div id="loadingOverlay" class="loading-overlay">
    <div class="loading-message">
      Loading...
    </div>
  </div>

  <!-- Rest of your page content -->

  <script>
    // Hide the loading overlay when the page is fully loaded
    window.addEventListener('load', function() {
      var loadingOverlay = document.getElementById('loadingOverlay');
      loadingOverlay.style.display = 'none';
    });
  </script>
  <header>
    <div class="ani">
      <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>

    <nav class="navbar navbar-inverse">
      <div>
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">
            <img src="imgs/site-logo.png" alt="" />
          </a>
        </div>
        <ul class="nav navbar-nav navigation">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="add-feedback.php">Add FeedBack</a></li>
          <li><a href="old-feedback.php">Old FeedBacks</a></li>
          <li><a href="about.php">About Us</a></li>
        </ul>
        <ol class="nav navbar-nav navbar-right navigation2">
          <li class="formP">
            <a href="signup.php"> SignUp </a>
          </li>
          <li class="formP">
            <a href="login.php"> Login</a>
          </li>
        </ol>
      </div>
    </nav>