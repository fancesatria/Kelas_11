@extends('home')

<div style="padding: 10px; margin: 10px; width: 250px; border-radius: 5px; background-color: rgb(151, 0, 63); font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: white">
    <h1 style="text-align: center">Hitung Segitiga</h1>
    <form action="{{route('segitiga')}}" method="post" style="">
        @csrf
        <label for="">Alas :</label><br>
        <input type="number" name="alas" placeholder="Masukkan alas"><br>

        <label for="">Tinggi :</label><br>
        <input type="number" name="tinggi" placeholder="Masukkan tinggi"><br>

        <input type="submit" value="Hitung" name="hitung"><br>
        <h1 style="background-color: rgb(188, 117, 255); padding:5px">
            @if (Session::has('hasil'))
                {{Session::get('hasil')}}
            @else
                0
            @endif
        </h1><br>

        <button><a href="{{Session::forget('hasil')}}">Reset</a></button>
    </form>
</div>