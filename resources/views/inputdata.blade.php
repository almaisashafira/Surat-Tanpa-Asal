@extends('template')
@section('title', 'Surat Tanpa Asal')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootsrap.min.css" rel="stylesheet" id="bootstrap.css">
<link rel="stylesheet" href="css/tambah.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootsrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <form action="/kotak_surat/store" method = "post">
        {{csrf_field()}}  
        <br> <input type=text, placeholder="Nama Penerima", name="penerima", required="required"><br>Penerima
        <br> <input type=text, placeholder="InisialPenerima + NomorSurat", name="id", required="required"><br>ID Surat
        <br> <input type=text, placeholder="Pesan...", name="isi", required="required"><br>Isi Surat
        <br> <input class="sbutton" type="submit" value="Simpan">
    </form>
</div>
@endsection