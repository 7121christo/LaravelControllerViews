@extends('layouts.main')

@section('container')
    <h1> Halaman Profile</h1>
    <h3>{{ $name }}</h3>
    <p>71210771</p>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="400" class="img-thumbnail" >
    @endsection
