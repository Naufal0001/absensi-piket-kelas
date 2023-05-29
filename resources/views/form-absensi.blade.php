@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="p-5 sm:ml-64 font-Inter">
            <div class="text-4xl font-bold text-gray-700">
                Form Absensi
            </div>
            <div class="border rounded-lg mt-4">
                <div class="bg-gray-200 rounded-t-lg p-4">
                    Absensi Tanggal 28 Mei 2023
                </div>
                <form action="" id="">
                    @csrf
                    <div class="relative overflow-x-auto shadow-md rounded-b-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="border text-white uppercase bg-blue-500 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">No</th>
                                    <th scope="col" class="px-6 py-3">NIS</th>
                                    <th scope="col" class="px-6 py-3">Nama</th>
                                    <th scope="col" class="px-6 py-3">Kelas</th>
                                    <th scope="col" class="px-6 py-3">JK</th>
                                    <th scope="col" class="px-6 py-3">Keterangan</th>
                                    <th scope="col" class="px-6 py-3">Alasan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 4; $i++)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td class="px-6 py-4">1</td>
                                        <td class="px-6 py-4">12986</td>
                                        <td class="px-6 py-4">Lorem</td>
                                        <td class="px-6 py-4">XXX</td>
                                        <td class="px-6 py-4">Pria</td>
                                        <td class="px-6 py-4">
                                            <label for="countries"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                                            <select id="countries"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option hidden selected>Keterangan</option>
                                                <option>Piket</option>
                                                <option>Tidak Piket</option>
                                            </select>
                                        </td>
                                        <td class="px-6 py-4"><input type="text" id="default-input"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                        <tfoot>
                            <div class="flex px-6 py-4 justify-end">
                                <a href="">
                                    <input
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 cursor-pointer"
                                        type="submit" value="Simpan">
                                </a>
                            </div>
                        </tfoot>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
