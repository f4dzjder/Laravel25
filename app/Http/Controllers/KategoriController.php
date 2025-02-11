<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
class KategoriController extends Controller
{
    public function index(Request $request){
        $keyword=$request->keyword;
        $kategori=kategori::where('idkategori','LIKE','%'.$keyword.'%')
                        //cari sesuai keyword
                        ->orWhere('idkategori','LIKE','%'.$keyword.'%')
                        ->paginate(5);
        return view ('kategori.index',compact(['kategori']));
    }
  
    public function tambah(){
        return view('kategori.tambah');
    }
    
    public function masukan(Request $request){
        kategori::create($request->except(['_token','submit']));
        return redirect('/kategori');
    }

    public function delete ($idkategori){
        $kategori=kategori::where ('idkategori',$idkategori);
        $kategori->delete();
        return redirect('/kategori');
    }
    
    public function edit($idkategori){
        $kategori=kategori::where('idkategori',$idkategori)->first();
        return view ('kategori.edit',compact(['kategori']));
    }
    
    public function update (Request $request,$idkategori){
        $kategori=kategori::where('idkategori',$idkategori);
        $kategori->update($request->except('_token','submit','_method'));
        return redirect('/kategori');
    }
}
