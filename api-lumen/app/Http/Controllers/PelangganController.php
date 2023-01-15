<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pelanggan::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //membuat validation
        $this->validate($request, [
            'pelanggan' => 'required',
            'alamat' => 'required',
            'telp' => 'required | numeric'
        ]);

        $pelanggan = Pelanggan::create($request->all());

        if ($pelanggan) {
            return response()->json([
                'pesan'=>'Data sudah disimpan',
                'data'=>$pelanggan
            ]);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan satu data saja
        $data = Pelanggan::where('idpelanggan', $id)->get();

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggan $pelanggan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::where('idpelanggan',$id)->update($request->all());

        if ($pelanggan) {
            return response()->json([
                'pesan'=>'data berhasil di update',
                'data'=>$pelanggan
            ]);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::where('idpelanggan',$id)->delete(); //setelah idnya ketemu maka lgsg mjlnkn funtion delete

        if ($pelanggan) {
            return response()->json([
                'pesan'=>'Data sudah dihapus',
                'data'=>$pelanggan
            ]);
        }
        
    }
}
