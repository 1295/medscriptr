<!DOCTYPE html>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Medscriptr</title>

  
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/bootstrap/css/style.css">
  <link rel="stylesheet" href="/bootstrap/css/table.css">
  <link rel="stylesheet" href="/bootstrap/css/profile.css">
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
  
</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">MedScriptr</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
		<li><a class="active" href="{{ url('/dashboard') }}">All Staffs</a></li>
            <li><a href="{{ url('/administrators') }}">Administrators</a></li>
            <li><a href="{{ url('/doctors') }}">Doctors</a></li>
            <li><a href="{{ url('/nurses') }}">Nurses</a></li>

            <li><form class="navbar-form navbar-left" action="/search" method="POST" role="search">
            				{{ csrf_field() }}
                <div class="form-group">
                <input type="text" class="form-control" name="q" placeholder="Search users">
                </div>
            <button type="submit" class="btn btn-success">Submit</button>
            </form></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>





<div> @yield('content')</div>
<script src='bootstrap/js/jquery.min.js'></script>

<script src="bootstrap/js/index.js"></script>
<script src="bootstrap/js/profile.js"></script>

</body>
</html>