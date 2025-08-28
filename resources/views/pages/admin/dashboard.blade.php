@extends('layouts.app')

@section('content')
<main>
    <section class="w-full min-h-screen bg-gradient-to-b from-neutral-900 via-neutral-950 to-neutral-900 flex items-start justify-center py-10">
        <div class="w-full max-w-3/4 flex flex-col items-center gap-12">
            <div class="w-full flex flex-col lg:flex-row items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold">Dashboard Admin</h1>
                    <p>Welcome, {{ auth()->user()->name }}.</p>
                </div>
                <div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="cursor-pointer hover:underline py-2 hover:text-white/75" type="submit">Logout</button>
                    </form>
                </div>
            </div>
            <div class="w-full flex flex-col items-center gap-4">
                <h2 class="text-xl font-medium w-full">Admin Panel</h2>
                <a href="#" class="w-full border border-white/75 text-white/75 hover:text-white bg-transparent hover:bg-white/20 transition p-4 flex items-center select-none justify-between">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
                        </svg>                          
                        <h3 class="text-lg font-bold tracking-wider">Home Section</h3>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>                      
                </a>
                <a href="#" class="w-full border border-white/75 text-white/75 hover:text-white bg-transparent hover:bg-white/20 transition p-4 flex items-center select-none justify-between">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
                        </svg>                          
                        <h3 class="text-lg font-bold tracking-wider">About Section</h3>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>                      
                </a>
                <a href="#" class="w-full border border-white/75 text-white/75 hover:text-white bg-transparent hover:bg-white/20 transition p-4 flex items-center select-none justify-between">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
                        </svg>                          
                        <h3 class="text-lg font-bold tracking-wider">Project Section</h3>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>                      
                </a>
                <a href="#" class="w-full border border-white/75 text-white/75 hover:text-white bg-transparent hover:bg-white/20 transition p-4 flex items- select-none justify-between">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
                        </svg>                          
                        <h3 class="text-lg font-bold tracking-wider">Contact Section</h3>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
                <a href="#" class="w-full border border-white/75 text-white/75 hover:text-white bg-transparent hover:bg-white/20 transition p-4 flex items-center select-none justify-between">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <h3 class="text-lg font-bold tracking-wider">Website Settings</h3>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
                <a href="{{ route('account-settings') }}" class="w-full border border-white/75 text-white/75 hover:text-white bg-transparent hover:bg-white/20 transition p-4 flex items-center select-none justify-between">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>      
                        <h3 class="text-lg font-bold tracking-wider">Account Settings</h3>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
            <div class="w-full flex flex-col items-center justify-between gap-4">
                <h2 class="text-xl font-medium w-full">Project Tags</h2>
                <div class="flex flex-wrap items-center gap-2 w-full select-none">
                    @forelse ($tags as $t)
                        <div class="tag inline-flex items-center w-fit before:content-['#'] text-white/90 font-light text-sm lg:text-base px-3 py-1 bg-gray-600 rounded-full">
                            {{ $t->name }}
                            <div class="flex items-center before:content-['|'] before:ms-2 gap-2">
                                <form action="{{ route('toggle-tag', $t->id) }}" method="post" class="flex items-center">
                                    @csrf
                                    @if ($t->is_active === true)
                                    <button type="submit" class="cursor-pointer hover:text-white/75 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                        </svg>                                                                 
                                    </button>
                                    @else
                                    <button type="submit" class="cursor-pointer hover:text-white/75 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                        </svg>                                          
                                    </button>
                                    @endif
                                </form>
                                <form action="{{ route('delete-tag', $t->id) }}" method="POST" class="flex items-center">
                                    @csrf
                                    <button type="submit" class="cursor-pointer hover:text-white/75 transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>                                      
                                    </button>
                                </form> 
                            </div>
                        </div>
                    @empty       
                        <div class="tag before:content-['#'] text-white/90 font-light text-sm lg:text-base px-3 py-1 mx-0.5 bg-red-600 rounded-full">Laravel</div>
                        <div class="tag before:content-['#'] text-white/90 font-light text-sm lg:text-base px-3 py-1 mx-0.5 bg-blue-600 rounded-full">Tailwind</div>
                        <div class="tag before:content-['#'] text-white/90 font-light text-sm lg:text-base px-3 py-1 mx-0.5 bg-gray-600 rounded-full">Roblox</div>
                    @endforelse
                </div>
                <div class="w-full mt-2">
                    <form action="{{ route('insert-tag') }}" method="POST" class="w-full inline-flex gap-4">
                        @csrf
                        <div class="relative z-0 w-full group">
                            <input type="text" name="insert_tag" autocomplete="off" id="insert_tag" placeholder=" " required class="block w-full text-lg py-2 ps-8 text-white/75 bg-transparent border-b border-white/75 appearance-none focus:outline-none focus:ring-0 focus:border-white peer transition duration-300"/>
                            <label for="insert_tag" class="absolute text-lg text-white/50 duration-300 -translate-y-6 transform start-8 scale-75 font-normal top-2.5 -z-10 origin-[0] peer-focus:start-8 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Insert New Tag</label>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-3 w-6 h-6 text-white opacity-75 transition-opacity duration-300 peer-placeholder-shown:opacity-75 peer-focus:opacity-100">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5-3.9 19.5m-2.1-19.5-3.9 19.5" />
                            </svg>
                        </div>
                        <button type="submit" class="border border-white/75 text-white/75 hover:text-white bg-transparent hover:bg-white/20 transition w-20 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-center w-full">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                            </svg>                              
                        </button>
                    </form>
                </div>
            </div>
            <div class="w-full flex flex-col items-center justify-between gap-4">
                    <h2 class="text-xl font-medium w-full">Website Preview</h2>
                    <iframe sandbox src="{{ route('main') }}" frameborder="0" height="1000" style="zoom: 0.75" class="select-none w-full border border-white/75"></iframe>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    @include('layouts.footer')
</footer>

@if ($errors->any())
    <div class="fixed bottom-4 right-4 z-50">
        <div class="bg-red-600 text-white p-4 rounded-lg shadow-lg max-w-sm">
            <h3 class="font-bold text-lg mb-2">Terjadi Kesalahan!</h3>
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@endsection