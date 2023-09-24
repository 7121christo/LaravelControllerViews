@extends('layouts.main')

@section('container')
<div style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 60vh;">
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200"  >
    <h1> Hey there!</h1>
    <h4> I am {{ $name }}, your code wizard.</h4>
    <p>Dreaming in lines of code, bringing digital tales to life.</p>
        <p>Interested in collaborating or have a project in mind?</p>
    <p >DM me through my instagram <a href="https://www.instagram.com/chr.adyatma/">{{ $insta }}</a></p>
</div>

    @endsection
