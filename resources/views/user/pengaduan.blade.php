@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('title', 'Pedoman - Pengaduan Online Mahasiswa STT-NF')

@section('content')
{{-- Section Header --}}
<section class="header ">


    <div class="text-center">
        <h2 class="medium text-primary mt-3">Layanan Pengaduan mahasiswa</h2>
        <!-- <p class="italic text-white mb-5">Sampaikan laporan Anda langsung kepada yangg</p> -->
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

            <div class="card mb-3">Tulis Laporan Disini</div>
            <form action="{{ route('depan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input name="judul" placeholder="Masukkan Subject" class="form-control"
                        rows="4">{{ old('judul') }}</input>
                </div>
                <div class="form-group mt-3">
                    <textarea name="deskripsi" placeholder="Masukkan Isi Laporan" class="form-control"
                        rows="4">{{ old('deskripsi') }}</textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="foto" class="form-control">
                </div>
                <button type="submit" class="btn btn-custom mt-2">Kirim</button>
            </form>

        </div>
    </div>
</div>
{{-- Section Hitung Pengaduan --}}
<div class="pengaduan mt-5">
    <div class="bg-purple">
        <div class="text-center">
            <h5 class="medium text-white mt-3">JUMLAH LAPORAN SEKARANG</h5>
            <h2 class="medium text-white">10</h2>
        </div>
    </div>
</div>
{{-- Footer --}}
<div class="mt-5">
    <hr>
    <div class="text-center">
        <p class="italic text-secondary"></p>
    </div>
</div>
</section>
@endsection
