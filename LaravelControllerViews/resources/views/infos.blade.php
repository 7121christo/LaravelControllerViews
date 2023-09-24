
@extends('layouts.main')

@section('container')
<h1>Where do I studying?</h1>
<br>
@foreach ($infos as  $info)
    <article class="mb-5">
        <h2><a href="/infos/{{ $info["slug"] }}">{{ $info["title"] }}</a></h2>

        <p>{{ $info["body"] }}</p>
    </article>

    @endforeach

@endsection


