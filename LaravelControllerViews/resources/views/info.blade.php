
@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2>{{ $info['title'] }}</h2>
        <p>{{ $info['body'] }}</p>
    </article>
    <a href="/information">Back</a>
@endsection
