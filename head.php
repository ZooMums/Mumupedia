<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="images/atom-md.png">

  <title>Mumupédia</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/theme.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">


  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="Carousel.php"><img src="images/atom-md.png"><font size="4">Mumupédia</font></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Carousel.php">Home</a></li>          
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Articles<span class="badge"><?php include("Pastille.php");?></span><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a class="btn btn-default" href="Articles.php">Tous</a></li>
              <li><a href="Articles.php#Hydro">L'hydrogéne</a></li>
              <li class="divider"></li>
              <li><a href="Articles.php#Prod">Production</a></li>
              <li><a href="Articles.php#cons">Conservation</a></li>
              <li><a href="Articles.php#use">Utilisation</a></li>
            </ul>
          </li>
          <li><a href="Experiences.php">Experiences</a></li>
        </ul>
      </div>
    </div>
  </div>
</head>
