@extends('home')

<div style="padding: 10px; margin: 10px ; background-color:navy; width: 180px; font-family: 'Lucida Console', 'Courier New', monospace; border-radius:10px" >
    <h2 style="text-align: center; color:white; ">Kalkulator</h2>
    <form action="{{ route('hitung') }}" method="post">
        @csrf
        <label for="" style="color:white">Bilangan 1 :</label>
        <br>
        <input type="number" name="bil1" placeholder="Bilangan pertama" style="margin-bottom: 10px"><br>
        <label for="" style="color:white; ">Bilangan 2 :</label>
        <br>
        <input type="number" name="bil2" placeholder="Bilangan kedua" ><br>

        <button type="submit" name="tambah" value="tambah">+</button>
        <button type="submit" name="kurang" value="kurang">-</button>
        <button type="submit" name="kali" value="kali">x</button>
        <button type="submit" name="bagi" value="bagi">:</button><br>

        <label for="" style="color:white; ">Hasil :</label>
        <br>
        <h1 style="background-color: dodgerblue; padding: 5px" name="hasil">
            @if (Session::has('hasil'))
                {{Session::get('hasil')}}
            @else
                0
            @endif
        </h1>
        <button type="submit" name="del" style="margin-top: 15px"><a href="{{Session::forget('hasil')}}">Reset</a></button>
    </form>
</div>