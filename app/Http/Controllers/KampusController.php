<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kampus;
class KampusController extends Controller
{
    public function index(Request $request){
        $keyword=$request->keyword;
        $kampus=kampus::where('idkampus','LIKE','%'.$keyword.'%')
                        //cari sesuai keyword
                        ->orWhere('idkampus','LIKE','%'.$keyword.'%')
                        ->paginate(5);
        return view ('kampus.index',compact(['kampus']));
    }
  
    public function tambah(){
        return view('kampus.tambah');
    }
    
    public function masukan(Request $request){
        kampus::create($request->except(['_token','submit']));
        return redirect('/kampus');
    }

    public function delete ($idkampus){
        $kampus=kampus::where ('idkampus',$idkampus);
        $kampus->delete();
        return redirect('/kampus');
    }
    
    public function edit($idkampus){
        $kampus=kampus::where('idkampus',$idkampus)->first();
        return view ('kampus.edit',compact(['kampus']));
    }
    
    public function update (Request $request,$idkampus){
        $kampus=kampus::where('idkampus',$idkampus);
        $kampus->update($request->except('_token','submit','_method'));
        return redirect('/kampus');
    }
}
