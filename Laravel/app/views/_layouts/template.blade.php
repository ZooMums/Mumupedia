<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset( '/images/atom-md.png' ) }}">

  <title>Mumupédia</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset( '/css/bootstrap.css' ) }}" rel="stylesheet">
  <!-- Bootstrap theme -->
  <link href="{{ asset( '/css/bootstrap-theme.css' ) }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset( '/css/theme.css' ) }}" rel="stylesheet">
  <link href="{{ asset( '/css/styles.css' ) }}" rel="stylesheet">


  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ asset( '/home' ) }}"><img src="{{ asset( 'images/atom-md.png' ) }}" ><font size="4">Mumupédia</font></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ asset( '/home' ) }}">Home</a></li>          
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Articles <span class="badge">{{ News::count() }}</span><span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a class="btn btn-default" href="{{ asset( '/Articles' ) }}">Tous</a></li>
              <li><a href="{{ asset( '/Articles#Hydro ' ) }}">L'hydrogéne</a></li>
              <li class="divider"></li>
              <li><a href="{{ asset( '/Articles#Prod' ) }}">Production</a></li>
              <li><a href="{{ asset( '/Articles#cons' ) }}">Conservation</a></li>
              <li><a href="{{ asset( '/Articles#use' ) }}">Utilisation</a></li>
            </ul>
          </li>
          <li><a href="{{ asset( '/Experiences.php' ) }}">Experiences</a></li>
        </ul>
      </div>
    </div>
  </div>
</head>
<name="Debut">

@yield('content')


<!--=====================Footer=====================-->
<hr class="featurette-divider">

<footer>
  <p class="pull-left">
    <a href="https://www.esstin.univ-lorraine.fr"><img src="{{ asset( '/images/Esstin1.png' ) }}"></a>
    <img src="{{ asset( '/images/facebook-icon.png' ) }}"><img src="{{ asset( '/images/twitter_newbird_blue.png' ) }}">
  </p>
  <p align="center">
    <a href="#Debut" class="gototop">Revenir en haut</a>
  </p>
</footer>
     
 <!-- Placed at the end of the document so the pages load faster --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{ asset( '/js/bootstrap.min.js' ) }}"></script>
<script src="{{ asset( '/js/doc.min.js' ) }}"></script>

</body>
</html>