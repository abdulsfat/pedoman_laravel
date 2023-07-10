@extends('layouts.html')
@section('title')
Lapor
@endsection
@section('content')
<div class="container">
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
