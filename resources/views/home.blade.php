@extends('layout.mainlayout')

@section('title', 'home')


        <h1>ini halaman home</h1>
        <h2>selamat datang, {{$name}}. anda adalah {{$role}}</h2>

        @if ($role == 'admin')
            <a href ="">ke halaman admin</a>
        @elseif ($role == 'staff')
            <a href ="">ke halaman gudang</a>
        @else 
            <a href ="">ke halaman kosong</a>
        @endif
  