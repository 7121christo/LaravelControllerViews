@extends('layouts.main')

@section('container')
<div id="div1" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 50vh;">
    <h1>Hai, selamat datang!</h1>
<h5>This application is used to display university profile information as well as the creator's profile.</h5>
<p>Click the button below to view the creator's profile</p>
<button id="button">Profile</button>
    <script>
        var button = document.getElementById("button");
        button.addEventListener("click", function() {
            window.location.href = "/profile";
        });
    </script>
</div>

@endsection
