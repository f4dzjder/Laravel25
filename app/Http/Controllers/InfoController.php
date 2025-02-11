<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\info;
class InfoController extends Controller
{
    public function index(Request $request){
        $keyword=$request->keyword;
        $info=info::where('idinfo','LIKE','%'.$keyword.'%')
                        //cari sesuai keyword
                        ->orWhere('idinfo','LIKE','%'.$keyword.'%')
                        ->paginate(5);
        return view ('info.index',compact(['info']));
    }
  
    public function tambah(){
        return view('info.tambah');
    }
    
    public function masukan(Request $request){
        info::create($request->except(['_token','submit']));
        return redirect('/info');
    }

    public function delete ($idinfo){
        $info=info::where ('idinfo',$idinfo);
        $info->delete();
        return redirect('/info');
    }
    
    public function edit($idinfo){
        $info=info::where('idinfo',$idinfo)->first();
        return view ('info.edit',compact(['info']));
    }
    
    public function update (Request $request,$idinfo){
        $info=info::where('idinfo',$idinfo);
        $info->update($request->except('_token','submit','_method'));
        return redirect('/info');
    }
}
