<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $senarai_ahli = DB::table('ahlis')->paginate(5);
        $jumlah_ahli = DB::table('ahlis')->count();
        //paparkan template index.blade.php dari folder UsersController
        //dan passkan maklumat ke browser.
        return view('ahli\index', compact('senarai_ahli','jumlah_ahli'));
    }

    public function borangdaftar()
    {
      //Untuk memaparkan borang daftar ahli
      return view('ahli\borang_daftar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //paparkan borang tambah user
      return view('ahli\borang_daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//         //Untuk masukkan data dari borang kedalam database.
//         $request -> validate([
//           'nama' => 'required|min:3|string',
//           'no_kp' => 'required|string',
//           'no_ahli' => 'required|min:4|string',
//           'no_telefon' => 'required|string',
//           'alamat' => 'required|string',
//           'email' => 'required|email',
// ]);
// // $data = $request->only('nama');
// // $data = $request->except('telefon','email');
// $data = $request -> all();
//
// return $data;
//Validate data
          $request->validate([
            'nama' => 'required|min:3|string',
            'no_kp' => 'required',
            'no_ahli' => 'required',
            'no_telefon' => 'required|string',
            'email' =>  'required|email',
            'alamat' => 'required|string',

          ]);

          //dapatkan rekod dari borang
          $data = $request->only([
            'nama',
            'no_kp',
            'no_ahli',
            'no_telefon',
            'email',
            'alamat'

          ]);


          //Simpan rekod kedalam database pada table pengguna
          DB::table('ahlis')->insert($data);

          //Kembali ke halaman senarai users
          return redirect('daftarAhli');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
