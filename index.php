<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  

  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <!--stylesheet-->
  <link rel="stylesheet" href="./style.css">
  <title>Basic Banking System</title>
  <style>
    * {
      font-family: Poppins;
    }

    a:link {
      color: white;
    }

    a:hover {
      color: white;
      text-decoration: none;
    }

    h5 {
      color: teal
    }
  </style>
</head>

<body class="top" style="background: #f4f5eb">
  <nav>
    <div class="container-fluid nav-wrapper #f8dcdc">
      <a href="index.php" class="brand-logo"><img src="https://www.thesparksfoundationsingapore.org/images/logo_small.png" style="height:50px;width:60px" />THE SPARKS FOUNDATION BANK</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="./transfermoney.php">View Customers</a></li>
        <li><a href="./transactionhistory.php">Transactions</a></li>
      </ul>
    </div>
  </nav>


  <!---3 col start-->
  <div class="row center sect">


    <!--end of card 1-->

    <!--second col-->
    <div class="col s4">
      <!-- Promo Content 2 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img class="cust" src="./i1.png">
            </div>
            <button onclick="location.href='./transfermoney.php'" style="color:black" class="waves-effect waves-light #ff1744 red accent-3 btn-large"><b>Perform Transactions</b><i class="material-icons right">add_circle</i></button>
          </div>
        </div>
      </div>
    </div>
    <!--end of card 2-->

    <div class="col s4">
      <!-- Promo Content 1 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img src="./i3.png">
            </div>
            <br />

            <h5 class="mt-5"><b>Welcome to TSF Bank !</b></h5>
            <br />
            <p class="#f8dddd"><br /></p>
          </div>
        </div>
      </div>
    </div>
    <!--middle-->

    <div class="col s4">
      <!-- Promo Content 3 goes here -->
      <div class="row">
        <div class="col s12 m6">
          <div class="card small">
            <div class="card-image">
              <img class="cust" src="./i2.png">
            </div>
            <button type="button" onclick="location.href='./transactionhistory.php'" style="color:black" class="waves-effect waves-light #ff1744 red accent-3 btn-large"><b> Transaction History</b><i class="material-icons right">send</i></button>
          </div>
        </div>
      </div>
    </div>
    <!--end of card 1-->

  </div>
  <!--sectio-->
<br>
<br>
<br>

  <footer class="center footer mt-5" style="background :#D3D3D3">
    <h6 class="info"><b>2021 © Made By Manasi Sherkhane</b></h6>
    The Sparks Foundation
  </footer>
  

  <script src="./js/main.js"></script>
  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>