@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/laporan.css') }}">
@endsection

@section('title', 'Laporan - Pengaduan mahasiswa')

@section('content')
{{-- Section Card --}}
<section class="konten-laporan  container ">
<div class="container mt-5 overflow-hidden">
    <div class="row justify-content-center">
        </div>
        <div class="card text-end card-laporan">
            <div class="content content-bottom shadow">
                <div>
                    {{-- <img src="{{ asset('images/user_default.svg') }}" alt="user profile" class="photo"> --}}
                    <div class="p-3 mt-2 mb-4 self-alig semi-bold ">
                        <h5>{{ Auth::user()->name }}</h5>
                        <p class=" italic">{{ Auth::user()->email }}</p>
                    </div>
                    <div class="row text-center mb-4 ">
                        <div class="col ">
                            <p class="italic mb-0 ">Terverifikasi</p>
                            <div class="text-center">
                                {{ $hitung[0] }}
                            </div>
                        </div>
                        <div class="col">
                            <p class="italic mb-0">Proses</p>
                            <div class="text-center">
                                {{ $hitung[1] }}
                            </div>
                        </div>
                        <div class="col">
                            <p class="italic mb-0">Selesai</p>
                            <div class="text-center">
                                {{ $hitung[2] }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card text-center mt-3 mb-5">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link {{ $siapa != 'me' ? 'active' : ''}} mr-4" href="{{ route('depan.laporan') }}">Semua Laporan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ $siapa == 'me' ? 'active' : ''}}" href="{{ route('depan.laporan', 'me') }}">Laporan Saya</a>
                  </li>
                  
              </ul>
            </div>
            <div class="card-body">
              <div class="col-lg-12">
                <div class="laporan-top">
                  {{-- <img src="{{ asset('images/user_default.svg') }}" alt="profile" class="profile"> --}}
                  <div class="">
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Bukti</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Tanggapan</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($pengaduan as $key => $item)
                            <tr>
                              <td scope="row">{{ $key + 1 }}</td>
                              @if ($item->foto)
                                <td class="laporan-bottom">
                                  <img src="{{ Storage::url($item->foto) }}" alt="{{ 'Gambar '.$item->judul_laporan }}">
                                </td>
                              @else
                                <td></td>
                              @endif
                              <td>
                                @if ($item->user)
                                  <p>{{ $item->user->name }}</p>
                                @endif
                              </td>
                              <td>
                                <p>{{ $item->judul }}</p>
                              </td>
                              <td>
                                <p>{{ $item->deskripsi }}</p>
                              </td>
                              <td>
                                @if ($item->status == 'pending')
                                  <p class="text-danger">Pending</p>
                                @elseif ($item->status == 'diproses')
                                  <p class="text-warning">{{ ucwords($item->status) }}</p>
                                @else
                                  <p class="text-success">{{ ucwords($item->status) }}</p>
                                @endif
                              </td>
                              <td>
                                <p>{{ \Carbon\Carbon::parse($item->tgl_pengaduan)->format('d M, h:i') }}</p>
                              </td>
                              <td>
                                @if ($item->tanggapan)
                                <p style="font-size: 12px" class=" mb-1">{{ '*Tanggapan dari '. $item->tanggapan->petugas->name}}</p>
                                <p class="light">{{ $item->tanggapan->tanggapan }}</p>
                            @else
                                <p class="light">Belum ada tanggapan untuk pengaduan ini.</p>
                            @endif                            
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
</div>
</section>

{{-- Footer --}}
@include('user.footer')
@endsection


@section('js')
@if (Session::has('pesan'))
<script>
    $('#loginModal').modal('show');

</script>
@endif
@endsection


