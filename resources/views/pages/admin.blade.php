@extends('layouts.app')

@section('content')
<main>
    <section class="w-full bg-gradient-to-b from-neutral-900 to-neutral-950 flex items-center justify-center py-10">
        <div class="w-full max-w-3/4 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold">Dashboard Admin</h1>
                <p>Welcome, {{ auth()->user()->name }}</p>
            </div>
            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="cursor-pointer hover:underline" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </section>
    <section class="w-full min-h-screen bg-gradient-to-b from-neutral-950 to-neutral-900 flex items-start justify-center py-10">
        <div class="w-full max-w-3/4 flex items-center justify-between">
            <div class="w-full flex flex-col gap-4">
                <h2 class="text-xl font-medium">Website Preview</h2>
                <iframe sandbox src="{{ route('main') }}" frameborder="0" height="800" style="zoom: 0.75" class="w-full border border-white"></iframe>
            </div>
        </div>
    </section>
</main>

<footer>
    @include('layouts.footer')
</footer>
@endsection