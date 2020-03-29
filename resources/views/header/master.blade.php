<!DOCTYPE html>
<html lang="en">
<style>

     
  }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/css/bootstrap.min.css') }}">
   
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">  
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">  
    <title>Bank Sampah</title>

</head>

<body>
<header class="main-header">
<nav class="navbar navbar-expand-lg navbar-white bg-white ">
  <a class="navbar-brand" href="{{route('dashboard')}}"> <img src="{{asset ('assets/image/logo.jpeg') }}" width="70px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
    
      <a class="nav-item nav-link text-dark"  href="{{url('/tentang')}}">Tentang</a>
      <a class="nav-item nav-link" href="{{route('profil')}}"> <img src="{{asset ('assets/image/user.png') }}" width="30px"></a>
      <a class="nav-item nav-link" href="{{url('/Keranjang')}}"><img src="{{asset ('assets/image/keranjang.png') }}" width="30px"></a>
    
    </div>
  </div>
</nav>
</header>
@yield('content')
<footer class="page-footer font-small blue">
  <div class="footer-copyright text-center py-3"><center>© 2020 Copyright:</center>
   </div>
</footer>

</div>
</body>
</html>