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

                        <div class="relative overflow-x-auto shadow-md rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
                        <div class="relative overflow-x-auto shadow-md rounded-lg">
                            <form action="">
                                <div class="flex gap-4 mb-2">
                                    <div class="form-control">
                                        <select name="keterangan" id="">
                                            <option {{ isset($_GET['keterangan']) && $_GET['keterangan'] == "Piket" ? "selected" : "" }} value="Piket">Piket</option>
                                            <option {{ isset($_GET['keterangan']) && $_GET['keterangan'] == "Tidak Piket" ? "selected" : "" }} value="Tidak Piket">Tidak Piket</option>
                                        </select>
                                    </div>
                                    <div class="form-control">
                                        <input type="date" value="{{ isset($_GET['tanggal']) ? $_GET['tanggal'] : "" }}" name="tanggal">
                                    </div>
                                    <div class="form-control">
                                        <button class="bg-slate-800 py-2 px-6 rounded-md text-white">Terapkan</button>
                                    </div>
                                </div>
                            </form>

                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
                                                <td class="px-6 py-4">{{ $rekap->SiswaRecapt->nis }}</td>
                                                <td class="px-6 py-4">{{ $rekap->SiswaRecapt->nama }}</td>
                                                <td class="px-6 py-4">{{ $rekap->SiswaRecapt->jenis_kelamin }}</td>
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
    </div>
@endsection
