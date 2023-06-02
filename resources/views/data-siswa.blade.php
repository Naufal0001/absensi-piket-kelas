@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="p-5 sm:ml-64 font-Inter">
            <div class="text-4xl font-bold text-gray-700">
                Data Siswa
            </div>
            <div class="border shadow-md rounded-md bg-slate-50 mt-4">
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
                                class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600hover:border-gray-300 dark:hover:text-gray-300"
                                id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                                aria-controls="dashboard" aria-selected="false">Riwayat</button>
                        </li>
                    </ul>
                </div>
                <div id="myTabContent">
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <div class="flex mb-2">
                            <label for="search-input2"
                                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                    <input type="search" id="search-input2"
                                        class="block w-full p-2.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Search" value="">
                                </div>
                        </div>
                        <div class="relative overflow-x-auto shadow-md rounded-lg">
                            <table id="my-table2" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-white uppercase bg-blue-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">No</th>
                                        <th scope="col" class="px-6 py-3">NIS</th>
                                        <th scope="col" class="px-6 py-3">Nama</th>
                                        <th scope="col" class="px-6 py-3">Jenis Kelamin</th>
                                        <th scope="col" class="px-6 py-3">Jadwal Piket</th>
                                        <th scope="col" colspan="2" class="text-center px-6 py-3">Aksi</th>
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
                                                <a href="/data/edit/{{ $student['id'] }}"
                                                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700">Edit</a>
                                            </td>
                                            <td>
                                                <a href="/data/hapus/{{ $student['id'] }}"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel">
                        <form action="">
                            <div class="flex gap-4 mb-2">
                                <label for="search-input"
                                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                    <input type="search" id="search-input"
                                        class="block w-full p-2.5 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Search" value="">
                                </div>
                                <div class="relative">
                                    <select
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        name="keterangan" id="">
                                        <option
                                            {{ isset($_GET['keterangan']) && $_GET['keterangan'] == 'Piket' ? 'selected' : '' }}
                                            value="Piket">Piket</option>
                                        <option
                                            {{ isset($_GET['keterangan']) && $_GET['keterangan'] == 'Tidak Piket' ? 'selected' : '' }}
                                            value="Tidak Piket">Tidak Piket</option>
                                    </select>
                                </div>
                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-buttons datepicker-format="y-m-d" type="text"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Select date"
                                        value="{{ isset($_GET['tanggal']) ? $_GET['tanggal'] : '' }}" name="tanggal">
                                </div>
                                <div class="relative">
                                    <button class="bg-gray-500 hover:bg-gray-600 p-2.5 text-sm rounded-lg text-white w-full">Terapkan</button>
                                </div>
                            </div>
                        </form>
                        <div class="relative overflow-x-auto shadow-md rounded-lg">

                            <table id="my-table" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-white uppercase bg-blue-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">No</th>
                                        <th scope="col" class="px-6 py-3">NIS</th>
                                        <th scope="col" class="px-6 py-3">Nama</th>
                                        <th scope="col" class="px-6 py-3">Jenis Kelamin</th>
                                        <th scope="col" class="px-6 py-3">Tanggal</th>
                                        <th scope="col" class="px-6 py-3">Keterangan</th>
                                        <th scope="col" class="px-6 py-3">Alasan</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($rekaps as $rekap)
                                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                            <td class="px-6 py-4">{{ $rekap->Siswa->nis }}</td>
                                            <td class="px-6 py-4">{{ $rekap->Siswa->nama }}</td>
                                            <td class="px-6 py-4">{{ $rekap->Siswa->jenis_kelamin }}</td>
                                            <td class="px-6 py-4">{{ $rekap->tanggal }}</td>
                                            <td class="px-6 py-4">{{ $rekap->keterangan }}</td>
                                            <td class="px-6 py-4">{{ $rekap->alasan }}</td>
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
@endsection
