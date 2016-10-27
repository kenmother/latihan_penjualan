@extends('layout.app')

@section('title')
Add Data
@endsection
@section('content')
<center>
<form method="POST" action="{{url('transaksi/save')}}">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>
		<tr>
			<td>Nama Pembeli</td>
			<td><select name="id_pembeli" required>
				<option value="">--Pilih Pembeli--</option>
				@foreach($pembeli as $key)
				<option value="{{$key->id}}">{{$key->nama}}</option>
				@endforeach
			</td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td><select name="id_barang" required>
				<option value="">--Pilih Pembeli--</option>
				@foreach($barang as $key)
				<option value="{{$key->id}}">{{$key->nama}}</option>
				@endforeach
			</td>
		</tr>
		<tr>
			<td>Jumlah Barang</td>
			<td><input type ="number" name="jumlah" required></td>
		</tr>
		<tr>
			<td></td>
			<td><button type ="submit" name="simpan">Simpan</button></td>
		</tr>  
		</table>
		</form>
@endsection