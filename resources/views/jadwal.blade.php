@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="p-5 sm:ml-64 font-Inter">
            <div class="text-4xl font-bold text-gray-700">
                Jadwal Piket
            </div>
            <div class="border shadow-md rounded-md bg-slate-50 mt-4">
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
                    <div class="hidden p-10 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <div class="grid grid-cols-2 gap-8">
                            @foreach ($shedulles as $shedulle)
                            <div class="flex border flex-col w-full rounded-lg shadow-md">
                                <div class="bg-gray-200 border py-2 px-4 text-center rounded-t-lg">
                                    <span class="font-semibold text-xl">
                                        {{ $shedulle->hari }}
                                    </span>
                                </div>
                                <div class="grid sm:grid-cols-3 grid-rows-1 w-full p-4 gap-4 mx-auto">
                                    @foreach ($shedulle->Siswa as $students)
                                    <div class="bg-gray-200 px-4 py-2 mx-auto rounded-lg">
                                        <span class="">{{ $students->nama }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
