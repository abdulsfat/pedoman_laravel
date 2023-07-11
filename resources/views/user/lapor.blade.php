@extends('layouts.html')
@section('title')
Lapor
@endsection
@section('content')
<div class="container">
  <h3 class="text-center">Sampaikan pengaduan Anda langsung kepada petugas secara online</h3>
  <p class="text-center">Harap buat pengaduan yang relevan dengan prosedur dan disarankan mencantumkan bukti foto yang mendukung.</p>
<form>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Masukan Laporan Anda</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Masukan Bukti</label>
  <input class="form-control" type="file" id="formFile">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
