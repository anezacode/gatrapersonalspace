@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold">Dashboard Admin</h1>
    <p>Welcome, {{ auth()->user()->name }}</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="cursor-pointer hover:underline" type="submit">Logout</button>
    </form>
@endsection