<?php

namespace App\Http\Controllers;

use App\masakan;
use App\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masakans = DB::table('masakans')->get();
        $data['orders'] = order::with(['masakan'])->get();
        

        return view('index',['masakans' => $masakans],$data);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request)
    {


    $validasi = order::where('id_masakan', $request->id_masakan)->first();
    
    if ($validasi == null){
        $simpan = order::create([

            'id_masakan' => $request->id_masakan,
            'jumlah' => $request->jumlah,

        ]);

        if ($simpan) {
            
        }

    } else {
        $validasi->jumlah = $validasi->jumlah + 1;
        $validasi->update();
    }
        
    return redirect('/');
	 
    }

}