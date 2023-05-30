@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="p-5 sm:ml-64 font-Inter">
            <div class="text-4xl font-bold text-gray-700">
                Dashboard
            </div>
            <div class="grid sm:grid-cols-3 grid-cols-1 gap-6 sm:gap-8 mt-4">
                <div class="flex flex-col bg-sky-400 border rounded-lg shadow-lg p-6">
                    <div class="flex">
                        <div class="flex flex-col gap-4 w-[100%]">
                            <span class="text-6xl text-white font-bold">
                                {{ $students }}
                            </span>
                            <span class="text-2xl font-semibold text-white uppercase">
                                Jumlah Siswa
                            </span>
                        </div>
                        <div class="w-[70%] grid justify-items-end">
                            <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>information-circle-solid</title> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="icons_Q2" data-name="icons Q2"> <path d="M24,2A22,22,0,1,0,46,24,21.9,21.9,0,0,0,24,2Zm2,32a2,2,0,0,1-4,0V22a2,2,0,0,1,4,0ZM24,16a2,2,0,1,1,2-2A2,2,0,0,1,24,16Z"></path> </g> </g> </g></svg>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-sky-500 rounded-lg hover:bg-sky-600 focus:ring-4 focus:outline-none focus:ring-sky-300 dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                            Lihat detail
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col bg-yellow-200 border rounded-lg shadow-lg p-6">
                    <div class="flex">
                        <div class="flex flex-col gap-4 w-[100%]">
                            <span class="text-5xl text-white font-bold uppercase">
                                Rabu
                            </span>
                            <span class="text-2xl font-semibold text-white uppercase">
                                Jadwal piket hari ini
                            </span>
                        </div>
                        <div class="w-[70%] grid justify-items-end">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 9V13L14 15M18 3L21 6M3 6L6 3M20 13C20 17.4183 16.4183 21 12 21C7.58172 21 4 17.4183 4 13C4 8.58172 7.58172 5 12 5C16.4183 5 20 8.58172 20 13Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                    </div>
                    
                    <div class="sm:mt-9 mt-6">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-300 rounded-lg hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                            Lihat detail
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col bg-red-400 border rounded-lg shadow-lg p-6">
                    <div class="flex">
                        <div class="flex flex-col gap-4 w-[100%]">
                            <span class="text-6xl text-white font-bold">
                                20 
                            </span>
                            <span class="text-2xl font-semibold text-white uppercase">
                                Siswa tidak piket hari ini
                            </span>
                        </div>
                        <div class="w-[70%] grid justify-items-end">
                            <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000" transform="rotate(180)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>information-circle-solid</title> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="icons_Q2" data-name="icons Q2"> <path d="M24,2A22,22,0,1,0,46,24,21.9,21.9,0,0,0,24,2Zm2,32a2,2,0,0,1-4,0V22a2,2,0,0,1,4,0ZM24,16a2,2,0,1,1,2-2A2,2,0,0,1,24,16Z"></path> </g> </g> </g></svg>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Lihat detail
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
