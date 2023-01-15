@extends('home')

<div style="padding: 10px; border-radius:10px; margin:10px; background-color:yellowgreen; font-family: 'Lucida Console', 'Courier New', monospace; width:180px">
    <h1 style="text-align: center; color: white">Rumus Tabung</h1>
    <form action="{{ route('tabung')}}" method="post">
        @csrf
        <label for="" style="color:black">Jari-jari :</label><br>
        <input type="number" name="jarijari" placeholder="Masukkan jari-jari" style="margin-bottom: 10px"><br>

        <label for="" style="color:black">Tinggi</label><br>
        <input type="number" name="tinggi" placeholder="Masukkan tinggi"><br>

        <input type="submit" name="submit" value="Hitung" style="margin-top: 15px">
        <label for=""> Hasil :</label>
        <h1 style="background-color:darkgreen; color:white; padding:5px" name="hasil">
            @if (Session::has('hasil'))
                {{Session::get('hasil')}}
            @else
                0
            @endif
        </h1>

        <button type="submit"><a href="{{Session::forget('hasil')}}">Reset</a></button>
    </form>
</div>