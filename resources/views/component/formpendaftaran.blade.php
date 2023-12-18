@extends('layout.index')

@section('content')
    <div class="mt-4">
        <h1 class="justify-center text-center font-bold text-lg">From Pendaftaran Beasiswa</h1>
        <!-- form pendaftaran beasiswa -->
        <form method="POST" action="{{ route('submitformpendaftaran') }}" enctype="multipart/form-data" class="max-w-sm mx-auto mt-6" > 
            @csrf
            <!-- Inputan nama -->
           <div>
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
           </div>
           <!-- Inputan email -->
            <div class="mt-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Institusi</label>
                <input type="email" id="email" name="email" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                @error('email')
                    <small>{{$message}}</small>
                @enderror
            </div>
            <!-- Inputan nohp -->
            <div class="mt-4">
                <label for="nohp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomer Hp</label>
                <input type="number" id="nohp" name="nohp" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <!-- Pilihan Opsi Semester -->
            <div class="mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester saat ini</label>
                <div class="relative">
                    <select id="selectsemst" name="semester" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500">
                        <option value="" disabled selected>Pilih</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
            </div>
            <!-- Inputan IPK -->
            <div class="mt-4">
                <label for="ipk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IPK</label>
                <input type="text" id="ipk" name="ipk" aria-describedby="helper-text-explanation" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <!-- Pilihan Beasiswa -->
            <div class="mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Beasiswa</label>
                <div class="relative">
                    <select id="selectbeasiswa" name="jenis_beasiswa" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-500">
                        <option value="" disabled selected>Pilih</option>
                        <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                        <option value="Beasiswa Non Akademik">Beasiswa Non Akademik</option>
                    </select>
                </div>
            </div>
            <!-- Upload File -->
            <div class="mt-4">
                <label for="upload_file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="large_size">Upload File</label>
                <input type="file" name="upload_file" class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="upload_file" name="upload_file" type="file">
            </div>
            <!-- Submit-->
            <div class="mt-4">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Daftar</button>
            </div>
        </form>
    </div>


    <script>

        document.addEventListener('DOMContentLoaded', function () {
            // Deklarasi variable
            const form = document.querySelector('form');
            const ipkField = document.getElementById('ipk');
            const selectbeasiswa = document.getElementById('selectbeasiswa');
            const uploadFileInput = document.getElementById('upload_file');
            const submitBtn = document.querySelector('button[type="submit"]');
            const selectSemester = document.getElementById('selectsemst');

            // menginputkan ipk by sistem
            // const ipkValue = 3.4;

            // Menampilkan nilai IPK secara otomatis
            // ipkField.value = ipkValue;

            selectSemester.addEventListener('change', function () {
            const selectedSemester = selectSemester.value;
            let ipkValue = 0;

            if (selectedSemester === '1') {
                ipkValue = 3.5; // Isi dengan nilai IPK untuk semester 1
            } else if (selectedSemester === '2') {
                ipkValue = 2.6; // Isi dengan nilai IPK untuk semester 2
            } else if (selectedSemester === '3') {
                ipkValue = 3.8;
            }else if (selectedSemester === '4') {
                ipkValue = 3.0;
            }else if (selectedSemester === '5') {
                ipkValue = 3.9;
            }else if (selectedSemester === '6') {
                ipkValue = 3.4;
            }else if (selectedSemester === '7') {
                ipkValue = 3.2;
            }else if (selectedSemester === '8') {
                ipkValue = 3.3;
            }

            ipkField.value = ipkValue;

            // Cek kondisi IPK untuk mengaktifkan/menonaktifkan form
            if (parseFloat(ipkField.value) < 3) {
                selectbeasiswa.disabled = true;
                uploadFileInput.disabled = true;
                submitBtn.disabled = true;
            } else {
                selectbeasiswa.disabled = false;
                uploadFileInput.disabled = false;
                submitBtn.disabled = false;
            }
        });

            form.addEventListener('input', function () {
                // mengecek dengan menggunakan kondisi jika ipk < 3
                if (parseFloat(ipkField.value) < 3) {
                    // disable form
                    selectbeasiswa.disabled = true;
                    uploadFileInput.disabled = true;
                    submitBtn.disabled = true;
                } else {
                    // Eneble form jika ipk > 3
                    selectbeasiswa.disabled = false;
                    uploadFileInput.disabled = false;
                    submitBtn.disabled = false;
                }

                // mengecek kondisi form yang ada ditampilkan
                const requiredFields = ['nama', 'email', 'nohp', 'semester', 'ipk', 'upload_file'];
                
                for (const field of requiredFields) {
                    const inputField = document.getElementById(field);
                    //memberikan kondisi from kosong tidak bisa melakukan submit
                    if (inputField.value.trim() === '') {
                        submitBtn.disabled = true;
                        return;
                    }
                }
            });

            // Initial check when the page loads
            form.dispatchEvent(new Event('input'));
        });

    </script>

@endsection