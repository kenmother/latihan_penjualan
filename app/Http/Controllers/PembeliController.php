<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pembeli;
use Illuminate\Support\Facades\Input;

class PembeliController extends Controller
{
    public function index(){
    	$data['pembeli'] = Pembeli::paginate(10);
    	return view('pembeli.all')->with($data);
    }

    public function add(){
    	return view('pembeli.add');

    }

    public function edit($id){
		//$data['barang'] = Barang::whereId($id)->first();
		//$data['barang'] = Barang::whereId($id,)->first();

    	$data['pembeli'] = Pembeli::find($id);
    	return view ('pembeli.edit')->with($data);
    }

    public function update(){
    	$a = Barang::find(Input::get('id'));
    	$a->nama = Input::get('nama');
    	$a->alamat = Input::get('alamat');
    	$a->save();

    	return redirect(url('pembeli/all')); 
    }

    public function save(){
    	$a = new Pembeli;
    	$a->nama = Input::get('nama');
    	$a->alamat = Input::get('alamat');
    	$a->save();

    	return redirect(url('pembeli/all'));
    }

    public function delete($id){
    	$a = Pembeli::find($id) ;
    	$a->delete();

    	return redirect(url('pembeli/all'));
    }
}
