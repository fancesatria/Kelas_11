<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //ini utk join tabel

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ini utk join tabelnya
        $data = DB::table('orders')
        ->join('pelanggans','pelanggans.idpelanggan', '=', 'orders.idpelanggan')
        ->select('orders.*', 'pelanggans.*')
        ->orderBy('orders.status','asc')
        ->get();

        return response()->json($data);
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($a, $b)
    {
        // $order = Order::where('tglorder', '>=', $a)
        // ->where('tglorder', '<=', $b)
        // ->join('pelanggans','pelanggans.idpelanggan', '=', 'orders.idpelanggan')
        // ->orderBy('orders.status','asc')
        // ->get();

        //ini utk join tabelnya
        $data = DB::table('orders')
        ->join('pelanggans','pelanggans.idpelanggan', '=', 'orders.idpelanggan')
        ->select('orders.*', 'pelanggans.*')
        ->where('tglorder', '>=', $a)
        ->where('tglorder', '<=', $b)
        ->orderBy('orders.status','asc')
        ->get();

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'bayar' => 'required | numeric',
            'kembali' => 'required | numeric',
            'status' => 'required | numeric'
        ]);

        $data = [
            'bayar' => $request->input('bayar'),
            'kembali' => $request->input('kembali'),
            'status' => $request->input('status')
            ];
        
        $order = Order::where('idorder',$id)->update($data);

        if ($order) {
            return response()->json([
                'pesan' => 'Pesanan sudah dibayar'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
