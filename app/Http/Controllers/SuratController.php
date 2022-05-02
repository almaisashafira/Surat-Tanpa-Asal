<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuratController extends Controller
{
    public function readData(){
        $kotak_surat= DB::table('kotak_surat')->get();
        return view ('surat', ['kotak_surat'=>$kotak_surat]);
    }

    public function input(){
        return view('inputdata');
    }

    public function store(Request $request){
        DB::table('kotak_surat')->insert([
            'penerima' =>$request->penerima,
            'id' =>$request->id,
            'isi' =>$request->isi
        ]);

        return redirect('/datasurat');
    }

    public function edit($id){
        //ambil data surat berdasarkan id
        $kotak_surat = DB::table('kotak_surat')->where('id', $id)->get();

        //untuk passing data
        return view('edit', ['kotak_surat' => $kotak_surat]);
    }

    public function update(Request $request){
        DB::table('kotak_surat')->where('id', $request->id)->update([
            'penerima' => $request->input('penerima'),
            'id' => $request->input('id'),
            'isi' => $request->input('isi')
        ]);

        return redirect('/datasurat');
    }

    public function hapus($id){
        //ambil data surat berdasarkan id
        DB::table('kotak_surat')->where('id', $id)->delete();

        return redirect('/datasurat');
    }
}
