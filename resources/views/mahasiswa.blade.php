@extends('template')
@section('title', 'Surat Tanpa Asal')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootsrap.min.css" rel="stylesheet" id="bootstrap.css">
<link rel="stylesheet" href="css/surat.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootsrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <h2 class ="title"> KOTAK SURAT </h2>
    <div class="row">
        <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th> Penerima </th>
                    <th> ID Surat </th>
                    <th> Isi </th>
                </thead>
            <tbody>

                @foreach($kotak_surat as $srt)
                <tr>
                    <td> {{$srt->penerima}} </td>
                    <td> {{$srt->id}} </td>
                    <td> {{$srt->isi}} </td>
                    <td> 
                        <a href="/kotak_surat/edit/{{ $srt->id }}">Edit</a>
                        <a style="color:red;" href="/kotak_surat/hapus/{{ $srt->id }}">Hapus</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection