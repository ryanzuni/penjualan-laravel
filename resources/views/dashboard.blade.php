@extends('layouts.app')

@section('content')
    <h1>Selamat datang, {{ session('user')->username }}</h1>
    <a href="{{ route('logout') }}">Logout</a>
@endsection
