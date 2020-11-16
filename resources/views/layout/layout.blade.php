<!DOCTYPE html>
<html>
<head>
    <title>Katalog buku</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="/">KatalogBuku</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active" id="nav-home"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item" id="nav-tentang"><a class="nav-link" href="{{ url('/tentang') }}">Tentang Kami</a></li>
          </ul>  
        </div>
        
    </nav>
    <div class="container">

        {{-- isi konten --}}
    
            @yield('content')
        
    </div>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
@yield('js');
</body>
</html>