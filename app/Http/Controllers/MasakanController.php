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
        

        // $orders = DB::table('orders')->get();
        return view('index',['masakans' => $masakans],$data);

        // $orders = DB::table('orders')->get();
        // return view('index',['orders' => $orders]);

        // $orders = DB::table('orders')->get();
        // return view('index',['orders' => $orders]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request)
    {

    // $validatedData = $request->validate([
    //     'id_masakan' => 'unique:orders',
    // ]);

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
     * @param  \App\masakan  $masakan
     * @return \Illuminate\Http\Response
     */
    public function show(masakan $masakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\masakan  $masakan
     * @return \Illuminate\Http\Response
     */
    public function edit(masakan $masakan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\masakan  $masakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('orders')->where('id_masakan',$request->id_masakan)->update([
		    'id_masakan' => $request->id_masakan,
            'jumlah' => $request->jumlah,
    ]);
    
	return redirect('/');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\masakan  $masakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(masakan $masakan)
    {
        //
    }
}
