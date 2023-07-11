@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('title', 'Beranda - PEDOMAN')

@section('content')
<section class="header" style="background-color: blue;">
    <h1>Beranda</h1>
</section>
@endsection

@section('js')
    @if (Session::has('pesan'))
    <script>
        $('#loginModal').modal('show');

    </script>
    @endif
@endsection
