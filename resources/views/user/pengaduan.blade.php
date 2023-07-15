@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
@endsection

@section('title', 'Pengaduan - Pengaduan Online Mahasiswa STT-NF')

@section('content')
{{-- Section Header --}}
<section class="header konten">
    <div class="container">
    <div class="text-center ">
        <h5 class="pt-5 semi-bold text-white">Sampaikan pengaduan Anda langsung kepada petugas yang berwenang</h5>
        <p class="italic text-white">Harap buat pengaduan yang relevan dengan prosedur dan disarankan mencantumkan bukti foto yang mendukung.</p> 
    </div>
{{-- Section Card Pengaduan --}}
<div class=" row justify-content-center">
    <div class="col-lg-6 col-10 col">
        <div class="content shadow card">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif

            @if (Session::has('pengaduan'))
                <div class="alert alert-{{ Session::get('type') }}">{{ Session::get('pengaduan') }}</div>
            @endif

            <div class="card">Form Pengisian Pengaduan</div>
            <form action="{{ route('depan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                    <input name="judul" placeholder="Masukan subject" class="form-control"
                        rows="4">{{ old('judul') }}</input>
                </div>
                <div class="form-group mt-3">
                    <textarea name="deskripsi" placeholder="Masukan isi laporan" class="form-control"
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

</section>
@endsection
