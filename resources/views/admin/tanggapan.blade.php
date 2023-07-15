@extends('layouts.admin')

@section('title')
Tanggapan
@endsection

@section('konten')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl text-center font-semibold text-gray-700 dark:text-gray-200">
      Berikan Tanggapan
    </h2>
    <form id="form-tanggapan" action="{{ route('tanggapan.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="pengaduan_id" value="{{ $item->id }}">
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">Tanggapan</span>
          <textarea id="tanggapan"
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="text" 
            @if (empty($item->tanggapan->tanggapan))
            placeholder="Berikan tanggapan"
            @else
            placeholder="{{ $item->tanggapan->tanggapan}}"
            @endif
             value=""
            name="tanggapan"></textarea>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Status</span>

          <select class="block w-full text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="status">
            @if ($item->status == 'tertunda')
              <option value="pending" selected>Pending</option>
              <option value="diproses">Proses</option>
              <option value="selesai">Selesai</option>
            @elseif ($item->status == 'diproses')
              <option value="pending">Pending</option>
              <option value="diproses" selected>Proses</option>
              <option value="selesai">Selesai</option>
            @elseif ($item->status == 'selesai')
              <option value="pending">Pending</option>
              <option value="diproses">Proses</option>
              <option value="selesai" selected>Selesai</option>
            @else
              <option value="pending">Pending</option>
              <option value="diproses">Proses</option>
              <option value="selesai">Selesai</option>
            @endif
          </select>
          
        </label>


        <button type="submit"
          class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          Tanggapi
        </button>
      </div>
    </form>
  </div>
</main>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#form-tanggapan').submit(function(e) {
      var tanggapanInput = $('#tanggapan').val();
      if (!tanggapanInput) {
        e.preventDefault();
        alert('Mohon isi tanggapan terlebih dahulu');
      }
    });
  });
</script>