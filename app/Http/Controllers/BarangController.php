<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Barang;
use Illuminate\Support\Facades\Input;

class BarangController extends Controller
{
    public function index(){
    	$data['barang'] = Barang::paginate(10);
    	return view('barang.all')->with($data);
    }

    public function add(){
    	return view('barang.add');

    }

    public function edit($id){
		//$data['barang'] = Barang::whereId($id)->first();
		//$data['barang'] = Barang::whereId($id,)->first();

    	$data['barang'] = Barang::find($id);
    	return view ('barang.edit')->with($data);
    }

    public function update(){
    	$a = Barang::find(Input::get('id'));
    	$a->nama = Input::get('nama');
    	$a->jenis = Input::get('jenis');
    	$a->jumlah = Input::get('jumlah');
    	$a->harga = Input::get('harga');
    	$a->save();

    	return redirect(url('barang/all')); 
    }

    public function save(){
    	$a = new Barang;
    	$a->nama = Input::get('nama');
    	$a->jenis = Input::get('jenis');
    	$a->jumlah = Input::get('jumlah');
    	$a->harga = Input::get('harga');
    	$a->save();

    	return redirect(url('barang/all'));
    }

    public function delete($id){
    	$a = Barang::find($id) ;
    	$a->delete();

    	return redirect(url('barang/all'));
    }
}
