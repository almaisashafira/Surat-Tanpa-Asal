@extends('template')
@section('title', 'Surat Tanpa Asal')

@section('konten')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootsrap.min.css" rel="stylesheet" id="bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootsrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

    <div class="container">
        <div class ="mail">
            <a href="{{URL::to('/datasurat')}}">
            <img class="pic" src="/img/mail.jpeg" alt="mail">
            </a>
            <h2 class="slogan"> Find Mail That Addressed To You! </h2>
        </div>
        <div class="paragraph">
            <p class="text"> write a letter anonymously to the one who you really adore.<br>shower them with support and love!</p>
        </div>
    </div>
@endsection