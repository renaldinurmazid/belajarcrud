<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
    <h1>Menu</h1>
    <a href="{{ url('home') }}">Home</a> -
    <a href="{{ url('about') }}">About</a> -
    <a href="{{ url('contact') }}">Contact</a> -
    <a href="{{ url('guru') }}">Guru</a> -
    <a href="{{ url('siswa') }}">Siswa</a> -
    <a href="{{ url('kelas') }}">Kelas</a>
    <hr>
</body>
</html>