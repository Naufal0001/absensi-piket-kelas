@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="p-5 sm:ml-64 font-Inter">
            <div class="text-4xl font-bold text-gray-700">
                Form Siswa
            </div>
            <div class="border shadow-md rounded-md bg-slate-50 mt-4">
                <section class="">
                    <form action="">
                        @csrf
                        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                            <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">Tambah Siswa</h2>
                            <div class="mb-6">
                                <label for="nis"
                                    class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">NIS</label>
                                <input type="text" id="nis"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="mb-6">
                                <label for="nama"
                                    class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Nama</label>
                                <input type="text" id="nama"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="mb-6">
                                <div class="grid grid-cols-2">
                                    <div class="flex-col">
                                        <h2 class="font-semibold mb-4">Jenis Kelamin</h2>
                                        <div class="flex sm:flex-row flex-col">
                                            <div class="flex items-center mr-4">
                                                <input id="laki" type="radio" value="" name="jk"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="laki"
                                                    class="ml-2 mb-2 sm:mb-0 text-sm font-medium text-gray-900 dark:text-gray-300">Laki
                                                    -
                                                    laki</label>
                                            </div>
                                            <div class="flex items-center mr-4">
                                                <input id="perempuan" type="radio" value="" name="jk"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="perempuan"
                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="kelas"
                                            class="block mb-2 font-semibold text-gray-900 dark:text-white">Kelas</label>
                                        <select id="kelas"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected hidden>Kelas</option>
                                            <option>XI - RPL</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white"
                                    for="file_input">Unggah Foto</label>
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="file_input" type="file">
                            </div>
                            <div class="mt-10">
                                <input
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none cursor-pointer dark:focus:ring-blue-800"
                                    type="submit" value="Simpan">
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection
