@extends('layout.layout')
@section('content')
<h2>Selamat datang di About</h2>
@endsection
@section('js')
<script type="text/javascript">
	$(".navbar-nav").find(".active").removeClass("active");
	$('#nav-tentang').addClass("active")
</script>
@endsection