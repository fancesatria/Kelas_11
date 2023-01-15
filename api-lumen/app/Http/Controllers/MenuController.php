<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //ini utk join tabel

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = Menu::all();

        //ini utk join tabelnya
        $data = DB::table('menus')
        ->join('kategoris','kategoris.idkategori', '=', 'menus.idkategori')
        ->select('menus.*', 'kategoris.kategori')
        ->orderBy('menus.menu','asc')
        ->get();

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //var gambar diisi dg request yang berisi tipe data file yg mengirim data tsb ke kolom gambar, lalu diambil nama dr file tsb dg getclientori...
        //membuat validation=utk mengetahui kolom manasaja yg bisa diedit
        $this->validate($request, [
            'idkategori' => 'required | numeric',
            'menu' => 'required | unique:menus',
            // 'gambar' => 'required ',
            'harga' => 'required | numeric'
        ]);

        $gambar = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->move('C:\xampp\htdocs\api-lumen\images', $gambar);
        $data = [
            'idkategori' => $request->input('idkategori'),
            'menu' => $request->input('menu'),
            'gambar' => url('C:\xampp\htdocs\api-lumen\images' . $gambar),
            'harga' => $request->input('harga')
        ];
        
        $menu = Menu::create($data);

        if ($menu) {
            $result = [
                'status' => 200,
                'pesan' => 'data sudah ditambahkan',
                'data' => $data
            ];
        } else {
            $result = [
                'status' => 400,
                'pesan' => 'data gagal ditambahkan',
                'data' => ''
            ];
        }
    
        return response()->json($result);


        // yg foroeach brhasil dr pd yg lain
        // $gambar = $request->file('gambar');
        // foreach ((array)$gambar as $file) {
        //     $name = $file->getClientoriginalName();
        //     $file->move('upload',$name);

        //     return response()->json($name);
        // }
        
        // $gambar = $request->file('gambar');
        // if (empty($gambar)) {
        //     // $pelanggan = Menu::create($request->all());
        //     // $name = $file->getClientoriginalName();

        //     // return response()->json($nama);

        //     return response()->json('Gambar kosong');
        // } else {
        //     $tampil = $gambar->getClientOriginalName();
        //     return response()->json($tampil);
        // }

        // $gambar = $request->file('gambar')->getClientOriginalName();
        // return response()->json($gambar);

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
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
