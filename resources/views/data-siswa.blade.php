@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="p-5 sm:ml-64 font-Inter">
            <div class="text-4xl font-bold text-gray-700">
                Data Siswa
            </div>

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Data siswa</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Riwayat</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">

                    <div class="relative overflow-x-auto shadow-md rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-white uppercase bg-blue-500">
                                <tr>
                                    <th scope="col" class="px-6 py-3">No</th>
                                    <th scope="col" class="px-6 py-3">NIS</th>
                                    <th scope="col" class="px-6 py-3">Nama</th>
                                    <th scope="col" class="px-6 py-3">JK</th>
                                    <th scope="col" class="px-6 py-3">Jadwal Piket</th>
                                    <th scope="col" class="px-6 py-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @foreach ($students as $student)
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4">{{ $student->nis }}</td>
                                    <td class="px-6 py-4">{{ $student->nama }}</td>
                                    <td class="px-6 py-4">{{ $student->jenis_kelamin }}</td>
                                    <td class="px-6 py-4">{{ $student->Jadwal->hari }}</td>
                                    <td class="px-6 py-4">
                                        <a href="/data/nama-siswa" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-white uppercase bg-blue-500">
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
                            <tbody class="">
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <td class="px-6 py-4">1</td>
                                    <td class="px-6 py-4">12986</td>
                                    <td class="px-6 py-4">Lorem</td>
                                    <td class="px-6 py-4">XXX</td>
                                    <td class="px-6 py-4">Pria</td>
                                    <td class="px-6 py-4">Tidak Piket</td>
                                    <td class="px-6 py-4">izin mabal</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
