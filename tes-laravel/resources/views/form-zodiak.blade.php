@extends('home')

<div style="padding: 10px; margin: 10px; font-family: Arial, Helvetica, sans-serif; width: 200px; background-color: maroon; border-radius: 10px">
    <h1 style="text-align: center; color: white">Cari Zodiak</h1>
    <form action="{{route('find')}}" method="post" style="color: white">
        @csrf
        <label for="">Bulan :</label><br>
        <input type="number" name="mon" placeholder="Masukkan bulan"><br>
        <label for="">Tanggal :</label><br>
        <input type="number" name="date" placeholder="Masukkan tanggal"><br>

        <input type="submit" value="Find" name="find" style="margin-bottom: 10px"><br>
        <label for="" >Zodiak anda :</label><br>
        <h1 style="padding: 5px; background-color: rgb(236, 194, 4)">
            @if (Session::has('hasil'))
                {{Session::get('hasil')}}
            @else
                -
            @endif
        </h1>
        <button style="margin-top: 15px"><a href="{{Session::forget('hasil')}}">Reset</a></button>
    </form>
</div>