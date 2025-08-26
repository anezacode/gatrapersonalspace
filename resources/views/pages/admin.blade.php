@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold">Dashboard Admin</h1>
    <p>Welcome, {{ auth()->user()->name }}</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="cursor-pointer hover:underline" type="submit">Logout</button>
    </form>
    <section class="w-full flex items-center justify-center">
        <iframe src="{{ route('main') }}" frameborder="0" width="1800" height="900" class="border border-white"></iframe>
    </section>
@endsection