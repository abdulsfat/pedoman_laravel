@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
@endsection

@section('title', 'Pedoman - Pengaduan Online Mahasiswa STT-NF')

@section('content')
{{-- Section Header --}}
<section class="header konten">
    <div class="container">
    <div class="text-center mt-5">
        <h1 class=" mt-5">Layanan Pengaduan mahasiswa</h1>
        <p class="italic text-white">Sampaikan laporan Anda langsung kepada yangg</p> 
    </div>
{{-- Section Card Pengaduan --}}
<div class="row justify-content-center">
    <div class="col-lg-6 col-10 col">
        <div class="content shadow">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif

            @if (Session::has('pengaduan'))
                <div class="alert alert-{{ Session::get('type') }}">{{ Session::get('pengaduan') }}</div>
            @endif

            <div class="card mt-3">Form Pengisian Pengaduan</div>
            <form action="{{ route('depan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                    <input name="judul" placeholder="Masukkan Subject" class="form-control"
                        rows="4">{{ old('judul') }}</input>
                </div>
                <div class="form-group mt-3">
                    <textarea name="deskripsi" placeholder="Masukkan Isi Laporan" class="form-control"
                        rows="4">{{ old('deskripsi') }}</textarea>
                </div>
                <div class="form-group mt-3">
                    <input type="file" name="foto" class="form-control">
                </div>
                <button type="submit" class="btn btn-custom mt-2">Kirim</button>
            </form>

        </div>
    </div>
</div>

{{-- Footer --}}
<div class="mt-5">
    <hr>
</div>
    <div class="text-center">
        <p class="italic text-secondary"></p>
    </div>
</div>
</section>
@endsection
