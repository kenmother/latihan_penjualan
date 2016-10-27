@extends('layout.app')

@section('title')
Add Data
@endsection
@section('content')
<center>
<form method="POST" action="{{url('pembeli/save')}}">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type ="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type ="text" name="alamat" required></td>
		</tr>
		<tr>
			<td></td>
			<td><button type ="submit" name="simpan">Simpan</button></td>
		</tr>  
		</table>
		</form>
@endsection