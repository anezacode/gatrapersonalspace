@extends('layouts.app')

@section('content')
<header class="fixed z-50 w-full">
    @include('layouts.header')
</header>

<section class="fixed -z-20 w-full h-screen bg-open">
    <div class="fixed -z-20 w-full h-screen bg-cover bg-center bg-fixed grayscale contrast-125 select-none bgs" style="background-image: url('{{ $bg ?? asset('images/background.png') }}');"></div>
</section>

<main>
    <div class="absolute top-0 -z-10 w-full h-screen bg-gradient-to-b from-neutral-950/50 to-neutral-950"></div>
    <section class="w-full min-h-screen top-0 z-0 flex justify-center py-10">
        <div class="mains w-full max-w-3/4 flex items-center">
            <div class="flex flex-col gap-30 lg:gap-40 w-full">
                <h1 class="anim-open1 text-8xl lg:text-9xl text-center lg:text-start text-white">{{ $main->name ?? 'gatra' }}</h1>
                <ul class="space-y-4 w-full text-center lg:text-start">
                    <li><a href="#about" class="anim-open2 text-3xl text-white/75 hover:text-white transition">about</a></li>
                    <li><a href="#project" class="anim-open3 text-3xl text-white/75 hover:text-white transition">project</a></li>
                    <li><a href="#contact" class="anim-open4 text-3xl text-white/75 hover:text-white transition">contact</a></li>
                </ul>
                <ul class="anim-open inline-flex gap-4 w-full justify-center lg:justify-start">
                    <li class="anim-open5">
                        <a href="{{ $main->url_github ?? '#' }}" target="_blank">
                            <img class="w-12 h-12 hover:scale-125 transition" draggable="false" src="{{ asset('icons/icons8-github.svg')}}">
                        </a>
                    </li>
                    <li class="anim-open6">
                        <a href="{{ $main->url_linkedin ?? '#' }}" target="_blank">
                            <img class="w-12 h-12 hover:scale-125 transition" draggable="false" src="{{ asset('icons/icons8-linkedin.svg')}}">
                        </a>
                    </li>
                    <li class="anim-open7">
                        <a href="{{ $main->url_whatsapp ?? '#' }}" target="_blank">
                            <img class="w-12 h-12 hover:scale-125 transition" draggable="false" src="{{ asset('icons/icons8-whatsapp.svg')}}">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="about" class="w-full min-h-screen bg-gradient-to-b from-neutral-950 to-neutral-900 flex items-center justify-center py-10">
        <div class="abouts w-full max-w-3/4 flex items-center gap-20">
            <div class="flex flex-col gap-20 w-full anim-open2">
                @forelse ($about as $abt)
                    <div class="flex items-center justify-between gap-4 flex-col-reverse {{ $abt->id % 2 === 0 ? 'lg:flex-row-reverse' : 'lg:flex-row' }}">
                        <div class="flex flex-col gap-4">
                            <h2 class="text-white text-3xl lg:text-4xl text-center {{ $abt->id % 2 === 0 ? 'lg:text-end' : 'lg:text-start' }}">{{ $abt->title }}</h2>
                            <p class="text-white/75 text-base lg:text-lg w-full lg:w-2xl text-justify {{ $abt->id % 2 === 0 ? 'lg:text-end' : 'lg:text-start' }}">{{ $abt->description }}</p>
                        </div>
                        <img src="{{ $abt->icon }}" draggable="false">
                    </div>
                @empty    
                    <div class="flex items-center justify-between gap-4 flex-col-reverse lg:flex-row">
                        <div class="flex flex-col gap-4">
                            <h2 class="text-white text-3xl lg:text-4xl text-center lg:text-start">I'm A Web Developer</h2>
                            <p class="text-white/75 text-base lg:text-lg w-full lg:w-2xl text-justify lg:text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec gravida sem. Sed et ultricies nisl. In id ex laoreet, pharetra orci et, consequat mauris. Integer dictum libero id lobortis mollis. Morbi volutpat magna rutrum efficitur elementum. Nam nec felis elit. Maecenas vel tristique urna.</p>
                        </div>
                        <img src="{{ asset('images/icons8-inspect-code.png') }}" draggable="false">
                    </div>
                    <div class="flex items-center justify-between gap-4 flex-col-reverse lg:flex-row-reverse">
                        <div class="flex flex-col gap-4">
                            <h2 class="text-white text-3xl lg:text-4xl text-center lg:text-start">I'm A Music Producer</h2>
                            <p class="text-white/75 text-base lg:text-lg w-full lg:w-2xl text-justify lg:text-end">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec gravida sem. Sed et ultricies nisl. In id ex laoreet, pharetra orci et, consequat mauris. Integer dictum libero id lobortis mollis. Morbi volutpat magna rutrum efficitur elementum. Nam nec felis elit. Maecenas vel tristique urna.</p>
                        </div>
                        <img src="{{ asset('images/icons8-electronic-music.png') }}" draggable="false">
                    </div>
                    <div class="flex items-center justify-between gap-4 flex-col-reverse lg:flex-row">
                        <div class="flex flex-col gap-4">
                            <h2 class="text-white text-3xl lg:text-4xl text-center lg:text-start">I'm A Gamer</h2>
                            <p class="text-white/75 text-base lg:text-lg w-full lg:w-2xl text-justify lg:text-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec gravida sem. Sed et ultricies nisl. In id ex laoreet, pharetra orci et, consequat mauris. Integer dictum libero id lobortis mollis. Morbi volutpat magna rutrum efficitur elementum. Nam nec felis elit. Maecenas vel tristique urna.</p>
                        </div>
                        <img src="{{ asset('images/icons8-game-console.png') }}" loading="eager" draggable="false">
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="project" class="w-full min-h-screen bg-gradient-to-b from-neutral-900 to-neutral-950 flex items-center justify-center py-10">
        <div class="projects w-full max-w-3/4 flex flex-col items-center">
            <div class="flex flex-col lg:flex-row gap-12 justify-between w-full anim-open3">
                <div class="w-full flex flex-col items-center gap-10 lg:gap-6">
                    @forelse ($projects as $pj)
                        <div class="flex flex-col lg:flex-row items-center gap-4" data-project-title="{{ $pj->title }}"">
                            <img class="w-50 h-50 rounded-md hidden lg:inline" draggable="false" loading="lazy" src="{{ $pj->cover }}">
                            <div class="flex flex-col gap-2">
                                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between w-full gap-2">
                                    <div class="flex items-center gap-2">
                                        <h3 class="text-white text-2xl lg:text-3xl font-medium">{{ $pj->title }}</h3>
                                        @foreach ($pj->protags as $protags)
                                            @php $pt = $tags->firstWhere('id', $protags->tag_id) @endphp
                                            <span class="tag before:content-['#'] text-white/90 font-light text-sm lg:text-base bg-gray-600 px-3 py-1 rounded-full">{{ $pt->name }}</span>
                                        @endforeach
                                    </div>
                                    <span class="text-white/50 w-full lg:w-fit">{{ $pj->updated_at ? $pj->updated_at->format('F jS Y') : $pj->created_at->format('F jS Y') }}</span>
                                </div>
                                <p class="text-white/75 text-justify lg:text-start text-sm lg:text-lg">{{ $pj->content }}</p>
                            </div>
                        </div>
                    @empty                    
                        <div class="flex flex-col lg:flex-row items-center gap-4">
                            <img class="w-50 h-50 rounded-md hidden lg:inline" draggable="false" loading="lazy" src="{{ asset('images/project-profile.png')}}">
                            <div class="flex flex-col gap-2">
                                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between w-full gap-2">
                                    <div class="flex items-center gap-2">
                                        <h3 class="text-white text-2xl lg:text-3xl font-medium">Hello World</h3>
                                        <span class="tag before:content-['#'] text-white/90 font-light text-sm lg:text-base bg-red-600 px-3 py-1 rounded-full">Laravel</span>
                                    </div>
                                    <span class="text-white/50 w-full lg:w-fit">July 28th 2025</span>
                                </div>
                                <p class="text-white/75 text-justify lg:text-start text-sm lg:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec gravida sem. Sed et ultricies nisl. In id ex laoreet, pharetra orci et, consequat mauris.</p>
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row items-center gap-4">
                            <img class="w-50 h-50 rounded-md hidden lg:inline" draggable="false" loading="lazy" src="{{ asset('images/project-profile.png')}}">
                            <div class="flex flex-col gap-2">
                                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between w-full gap-2">
                                    <div class="flex items-center gap-2">
                                        <h3 class="text-white text-2xl lg:text-3xl font-medium">Hello World</h3>
                                        <span class="tag before:content-['#'] text-white/90 font-light text-sm lg:text-base bg-blue-600 px-3 py-1 rounded-full">Laravel</span>
                                    </div>
                                    <span class="text-white/50 w-full lg:w-fit">July 13rd 2025</span>
                                </div>
                                <p class="text-white/75 text-justify lg:text-start text-sm lg:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec gravida sem. Sed et ultricies nisl. In id ex laoreet, pharetra orci et, consequat mauris.</p>
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row items-center gap-4">
                            <img class="w-50 h-50 rounded-md hidden lg:inline" draggable="false" loading="lazy" src="{{ asset('images/project-profile.png')}}">
                            <div class="flex flex-col gap-2">
                                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between w-full gap-2">
                                    <div class="flex items-center gap-2">
                                        <h3 class="text-white text-2xl lg:text-3xl font-medium">Hello World</h3>
                                        <span class="tag before:content-['#'] text-white/90 font-light text-sm lg:text-base bg-gray-600 px-3 py-1 rounded-full">Laravel</span>
                                    </div>
                                    <span class="text-white/50 w-full lg:w-fit">July 1st 2025</span>
                                </div>
                                <p class="text-white/75 text-justify lg:text-start text-sm lg:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec gravida sem. Sed et ultricies nisl. In id ex laoreet, pharetra orci et, consequat mauris.</p>
                            </div>
                        </div>
                    @endforelse
                </div>
                <div class="w-full lg:w-2xl">
                    <div class="flex flex-col items-center gap-8 lg:gap-10">
                        <div class="relative z-0 w-full group">
                            <input type="text" name="project_search" autocomplete="off" id="project_search" placeholder=" " onkeyup="searchProject()" required class="block w-full text-lg py-2 ps-8 text-white/75 bg-transparent border-b border-white/75 appearance-none focus:outline-none focus:ring-0 focus:border-white peer transition duration-300"/>
                            <label for="project_search" class="absolute text-lg text-white/50 duration-300 -translate-y-6 transform start-8 scale-75 font-normal top-2.5 -z-10 origin-[0] peer-focus:start-8 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Search My Project</label>
                            <img src="{{ asset('icons/icons8-search.svg') }}" class="absolute top-3 w-6 h-6 text-white opacity-75 transition-opacity duration-300 peer-placeholder-shown:opacity-75 peer-focus:opacity-100" />
                        </div>
                        <p class="text-white text-end w-full text-sm lg:text-base">Showing 3 of {{ $projects->count() }} Projects</p>
                        <div class="flex flex-wrap items-center gap-2 w-full select-none">
                            @forelse ($tags as $t)
                                <span class="tag before:content-['#'] text-white/90 font-light text-sm lg:text-base px-3 py-1 bg-gray-600 rounded-full">{{ $t->name }}</span>
                            @empty                     
                                <span class="tag before:content-['#'] text-white/90 font-light text-sm lg:text-base px-3 py-1 bg-red-600 rounded-full">Laravel</span>
                                <span class="tag before:content-['#'] text-white/90 font-light text-sm lg:text-base px-3 py-1 bg-blue-600 rounded-full">Tailwind</span>
                                <span class="tag before:content-['#'] text-white/90 font-light text-sm lg:text-base px-3 py-1 bg-gray-600 rounded-full">Roblox</span>
                            @endforelse
                        </div>
                        <table class="w-full h-full flex flex-nowrap gap-4 mt-10">
                            @forelse ($projects->slice(0, 3)->sortByDesc('views') as $pj)
                                <tr>
                                    <td>
                                        <h3 class="before:content-['#'] text-white text-6xl me-4 mb-4 tag">{{ $loop->iteration }}</h3>
                                    </td>
                                    <td>
                                        <p class="text-white/90 mb-4">{{ $pj->title }}</p>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>
                                        <h3 class="before:content-['#'] text-white text-6xl me-4 mb-4 tag">1</h3>
                                    </td>
                                    <td>
                                        <p class="text-white/90 mb-4">The Biggest Project I've Ever Created</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3 class="before:content-['#'] text-white text-6xl me-4 mb-4 tag">2</h3>
                                    </td>
                                    <td>
                                        <p class="text-white/90 mb-4">Lorem Ipsum Project</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3 class="before:content-['#'] text-white text-6xl me-2 mb-4 tag">3</h3>
                                    </td>
                                    <td>
                                        <p class="text-white/90 mb-4">How to Make A Website App</p>
                                    </td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="w-full min-h-screen bg-gradient-to-b from-neutral-950 to-neutral-900 flex items-center justify-center py-10">
        <div class="contacts w-full max-w-3/4 flex items-center">
            <form class="w-lg mx-auto anim-open2" id="form">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="name" id="name" class="block w-full text-lg py-2 text-white/75 bg-transparent border-b border-white/75 appearance-none focus:outline-none focus:ring-0 focus:border-white peer transition duration-300" placeholder=" " required />
                    <label for="name" class="absolute text-lg text-white/75 duration-300 -translate-y-6 transform scale-75 font-normal top-2.5 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" name="email" id="email" class="block w-full text-lg py-2 text-white/75 bg-transparent border-b border-white/75 appearance-none focus:outline-none focus:ring-0 focus:border-white peer transition duration-300" placeholder=" " required />
                    <label for="email" class="absolute text-lg text-white/75 duration-300 -translate-y-6 transform scale-75 font-normal top-2.5 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="subject" id="subject" class="block w-full text-lg py-2 text-white/75 bg-transparent border-b border-white/75 appearance-none focus:outline-none focus:ring-0 focus:border-white peer transition duration-300" placeholder=" " required />
                    <label for="subject" class="absolute text-lg text-white/75 duration-300 -translate-y-6 transform scale-75 font-normal top-2.5 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Subject</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <textarea name="message" id="message" class="mb-1 block w-full text-lg py-2 text-white/75 bg-transparent border-b border-white/75 appearance-none focus:outline-none focus:ring-0 focus:border-white peer transition duration-300 min-h-12 h-36 max-h-64" placeholder=" " maxlength="1024" required></textarea>
                    <label for="message" class="absolute text-lg text-white/75 duration-300 -translate-y-6 transform scale-75 font-normal top-2.5 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message</label>
                    <span class="text-white/50 text-sm">Max 1024 words.</span>
                </div>
                <button id="send" type="submit" onclick="sendEmail()" class="transition text-white/75 cursor-pointer hover:text-white bg-transparent text-lg border-1 border-white/75 hover:bg-white/20 focus:outline-none font-medium tracking-wide w-full py-2 text-center disabled:cursor-not-allowed" disabled>Send Letter</button>
            </form>  
        </div>
    </section>
</main>

<footer>
    @include('layouts.footer')
</footer>

@if (!Auth::check())
    <form method="POST" action="{{ route('auth') }}">
        @csrf
        <section id="user_form" class="fixed bottom-10 flex justify-center text-center w-full"></section>
    </form>
@else
    <section class="fixed bottom-10 flex justify-center text-center w-full">
        <a href="{{ route('admin') }}" class="">
            <button id="panel" class="anim-open1 px-4 py-2 bg-white/90 hover:bg-white/75 text-black rounded-md font-bold cursor-pointer flex disabled:hidden" disabled>Dashboard Admin</button>
        </a>
    </section>
@endif

@endsection