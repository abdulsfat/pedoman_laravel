@extends('layouts.admin')
@section('konten')
@section('title', 'Mahasiswa')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Data Mahasiswa
    </h2>


    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
          </ul>
        </div>
        @endif
        <table class="w-full whitespace-no-wrap">
<thead>
    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
        <th class="px-4 py-3">No</th>
        <th class="px-4 py-3">Nama</th>
        <th class="px-4 py-3">NIM</th>
        <th class="px-4 py-3">Email</th>
        @if(Auth::user()->role === 'admin')
        <th class="px-4 py-3">Aksi</th>
        @endif
    </tr>
</thead>
<tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
    @forelse ($data as $index => $mahasiswa)
    <tr class="text-gray-700 dark:text-gray-400">
        <td class="px-4 py-3 text-sm">
            {{ $index + 1 }}
        </td>
        <td class="px-4 py-3 text-sm">
            {{ $mahasiswa->name }}
        </td>
        <td class="px-4 py-3 text-sm">
            {{ $mahasiswa->nim }}
        </td>
        <td class="px-4 py-3 text-sm">
            {{ $mahasiswa->email }}
        </td>
        <td class="px-4 py-3">
          <div class="flex items-center space-x-4 text-sm">

            @if(Auth::user()->role === 'admin')
              @csrf
              @method('delete')
              <button
                class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                aria-label="Delete">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                    clip-rule="evenodd"></path>
                </svg>
              </button>
        @endif


              </form>
          </div>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="4" class="text-center text-gray-400">
            Data Kosong
        </td>
    </tr>
    @endforelse
</tbody>
        </table>
      </div>

    </div>

  </div>
</main>
@endsection
   