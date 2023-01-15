<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //ini utk join tabel

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show($a, $b)
    {
        //ini utk join tabelnya
        $data = DB::table('details')
        ->join('orders','orders.idorder', '=', 'details.idorder')//join tabel order
        ->join('menus','menus.idmenu', '=', 'details.idmenu')//join tabel menu
        ->join('pelanggans','pelanggans.idpelanggan', '=', 'orders.idpelanggan')//join tabel pelanggan
        ->join('kategoris','kategoris.idkategori', '=', 'menus.idkategori')//join tabel pelanggan
        ->select('orders.*', 'details.*', 'menus.*', 'pelanggans.*', 'kategoris.*')
        ->where('tglorder', '>=', $a)
        ->where('tglorder', '<=', $b)
        ->orderBy('orders.tglorder','asc')
        ->get();

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        //
    }
}
