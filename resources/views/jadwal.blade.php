@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="p-5 sm:ml-64 font-Inter">
            <div class="text-4xl font-bold text-gray-700">
                Jadwal Piket
            </div>
            <div>

                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                        data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                                data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">XI - RPL</button>
                        </li>
                    </ul>
                </div>
                <div id="myTabContent">
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="border text-white uppercase bg-blue-500">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Senin</th>
                                        <th scope="col" class="px-6 py-3">Selasa</th>
                                        <th scope="col" class="px-6 py-3">Rabu</th>
                                        <th scope="col" class="px-6 py-3">Kamis</th>
                                        <th scope="col" class="px-6 py-3">Jumat</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @for ($i = 0; $i <= 6; $i++)
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                        <td class="px-6 py-4">Rehan</td>
                                        <td class="px-6 py-4">Rehan</td>
                                        <td class="px-6 py-4">Rehan</td>
                                        <td class="px-6 py-4">Rehan</td>
                                        <td class="px-6 py-4">Rehan</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
