@extends('layouts.main')

@section('container')
<div id="div1" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 50vh;">
    <h1>Hai, selamat datang!</h1>
<h5>Aplikasi ini digunakan untuk menampilkan informasi profil universitas dan juga profil pembuat.</h5>
<p>Klik tombol dibawah untuk melihat profil pembuat</p>
<button id="button">Profile</button>
    <script>
        var button = document.getElementById("button");
        button.addEventListener("click", function() {
            window.location.href = "/profile";
        });
    </script>
</div>

@endsection
