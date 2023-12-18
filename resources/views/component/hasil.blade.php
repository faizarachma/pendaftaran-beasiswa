@extends('layout.index')

@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
    <h1 class="justify-center text-center font-bold text-lg mb-5">Daftar Beasiswa</h1>
    <table class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <!-- nama isian kolom table hasil -->
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                   Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    NoHp
                </th>
                <th scope="col" class="px-6 py-3">
                    Semester
                </th>
                <th scope="col" class="px-6 py-3">
                    IPK
                </th>
                <th scope="col" class="px-6 py-3">
                    Jenis Basiswa
                </th>
                <th scope="col" class="px-6 py-3">
                    Berkas
                </th>
                <th scope="col" class="px-6 py-3">
                    status
                </th>
            </tr>
        </thead>

        @foreach($student as $s)
            <!-- Mengambildata dari database untuk ditampilkan di setiap kolom table -->
                <tr>
                    <td scope="col" class="px-6 py-3">{{$s->id}}</td>
                    <td scope="col" class="px-6 py-3">{{$s->nama}}</td>
                    <td scope="col" class="px-6 py-3">{{$s->email}}</td>
                    <td scope="col" class="px-6 py-3">{{$s->nohp}}</td>
                    <td scope="col" class="px-6 py-3">{{$s->semester}}</td>
                    <td scope="col" class="px-6 py-3">{{$s->ipk}}</td>
                    <td scope="col" class="px-6 py-3">{{$s->jenis_beasiswa}}</td>
                    <td scope="col" class="px-6 py-3">
                        {{$s->upload_file}}
                    </td>
                    <td scope="col" class="px-6 py-3">{{ $s->status}}</td>
                </tr>
            @endforeach
    </table>
</div>

@endsection