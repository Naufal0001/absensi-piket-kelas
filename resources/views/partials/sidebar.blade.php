<div class="z-0">
    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-blue-600"
        aria-label="Sidebar">
        <div>
            <div class="flex items-center">
                <span
                    class="text-2xl border-b border-gray-400 font-semibold text-white whitespace-nowrap uppercase h-full px-12 py-6 overflow-hidden bg-blue-700">Absensi
                    Piket</span>
                </a>
            </div>
            <div class="h-full px-3 py-4 overflow-y-auto bg-blue-600">
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="/dashboard"
                            class="flex items-center p-2 rounded-lg hover:bg-white group">
                            <svg aria-hidden="true"
                                class="w-6 h-6 text-white group-hover:text-black"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3 text-white group-hover:text-black">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/data"
                            class="flex items-center p-2 rounded-lg hover:bg-white group">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-white group-hover:text-black"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 text-white whitespace-nowrap group-hover:text-black">Data Siswa</span>
                        </a>
                    </li>
                    <li>
                        <button type="button" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example"
                        class="flex items-center w-full p-2 text-gray-900 rounded-lg hover:bg-white group">
                        
                        <div class="flex-shrink-0 w-6 h-6 text-white group-hover:text-black">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                        
                            <span class="flex-1 ml-3 text-left text-white group-hover:text-black whitespace-nowrap" sidebar-toggle-item>Form</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>

                        </button>
                        <ul id="dropdown-example" class="hidden mt-2 bg-white rounded-lg">
                            <li>
                               <a href="/form-siswa" class="flex items-center w-full p-2 hover:bg-black rounded-t-lg pl-11 text-black hover:text-white">Form Siswa</a>
                            </li>
                            <li>
                               <a href="/form-absensi" class="flex items-center w-full p-2 hover:bg-black rounded-b-lg pl-11 text-black hover:text-white">Form Absensi</a>
                      </ul>
                    </li>
                    
                    <li>
                        <a href="/jadwal-piket"
                            class="flex items-center p-2 text-white rounded-lg hover:bg-white group">
                            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-white group-hover:text-black" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
                            <span class="flex-1 ml-4 whitespace-nowrap text-white group-hover:text-black">Jadwal</span>
                        </a>
                    </li>
                </ul>
            </div>
    </aside>
</div>
</div>
