@extends('layout.layout')
@section('content')
<div class="row">
	<div class="jumbotron col-md-12">
		<div class="container" id="jumbotron-konten">
		  <h1 class="display-4">Selamat Datang di Website <b>KatalogBuku</b></h1>
		  <p class="lead">Ini adalah website yang menampilkan buku.</p>
		  <hr class="my-4">
		  <p>Jika ingin mengelola data buku, silakan klik Login</p>
		  <p class="lead">
		    <a class="btn btn-dark btn-lg" href="{{ url('login') }}" role="button">Login</a>
		  </p>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
        <div class="card"> <img src="https://i.imgur.com/RlT8Zlf.jpg" class="card-img-top">
            <div class="card-body">
                <div class="d-flex justify-content-between"> <span class="font-weight-bold">Buku</span> <span class="font-weight-bold">$550</span> </div>
                <p class="card-text mb-1 mt-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex align-items-center flex-row"> <img src="https://i.imgur.com/e9VnSng.png" width="20"> <span class="guarantee">2 Years Guarantee</span> </div>
            </div>
            <hr>
            <div class="card-body">
                <div class="text-right buttons"> <button class="btn btn-outline-dark">Detail</button> </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card"> <img src="https://i.imgur.com/RlT8Zlf.jpg" class="card-img-top">
            <div class="card-body">
                <div class="d-flex justify-content-between"> <span class="font-weight-bold">Buku</span> <span class="font-weight-bold">$550</span> </div>
                <p class="card-text mb-1 mt-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex align-items-center flex-row"> <img src="https://i.imgur.com/e9VnSng.png" width="20"> <span class="guarantee">2 Years Guarantee</span> </div>
            </div>
            <hr>
            <div class="card-body">
                <div class="text-right buttons"> <button class="btn btn-outline-dark">Detail</button> </div>
            </div>
        </div>
    </div><div class="col-md-3">
        <div class="card"> <img src="https://i.imgur.com/RlT8Zlf.jpg" class="card-img-top">
            <div class="card-body">
                <div class="d-flex justify-content-between"> <span class="font-weight-bold">Buku</span> <span class="font-weight-bold">$550</span> </div>
                <p class="card-text mb-1 mt-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex align-items-center flex-row"> <img src="https://i.imgur.com/e9VnSng.png" width="20"> <span class="guarantee">2 Years Guarantee</span> </div>
            </div>
            <hr>
            <div class="card-body">
                <div class="text-right buttons"> <button class="btn btn-outline-dark">Detail</button> </div>
            </div>
        </div>
    </div><div class="col-md-3">
        <div class="card"> <img src="https://i.imgur.com/RlT8Zlf.jpg" class="card-img-top">
            <div class="card-body">
                <div class="d-flex justify-content-between"> <span class="font-weight-bold">Buku</span> <span class="font-weight-bold">$550</span> </div>
                <p class="card-text mb-1 mt-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex align-items-center flex-row"> <img src="https://i.imgur.com/e9VnSng.png" width="20"> <span class="guarantee">2 Years Guarantee</span> </div>
            </div>
            <hr>
            <div class="card-body">
                <div class="text-right buttons"> <button class="btn btn-outline-dark">Detail</button> </div>
            </div>
        </div>
    </div>

</div>

@endsection