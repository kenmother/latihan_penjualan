<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Transaksi;
use App\Pembeli;
use App\Barang;
use Illuminate\Support\Facades\Input;

class TransaksiController extends Controller
{
    public function index(){
    	$data['transaksi'] = Transaksi::with(['barang','pembeli'])->paginate(10);
    	// echo "<pre>".print_r($data,1)."</pre>";
    	// die();	
    	return view('transaksi.all')->with($data);
    }

    public function add(){
    	$data['barang'] = Barang::all();
    	$data['pembeli'] = Pembeli::all();
    	return view('transaksi.add')->with($data);

    }
 

    public function save(){
    	$a = new Transaksi;
    	$a->id_barang = Input::get('id_barang');
    	$a->id_pembeli = Input::get('id_pembeli');
    	$a->jumlah = Input::get('jumlah');
    	$a->total = (float)Barang::find(Input::get('id_barang'))['harga']*(int)Input::get('jumlah');
    	$a->save();

    	return redirect(url('transaksi/all'));
    }

  
}
