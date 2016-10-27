@extends('layout.app')

@section('title')
Edit Data
@endsection

@section('content')
<form method="POST" action="{{url('pembeli/update')}}">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="hidden" name="id" value="{{$pembeli->id}}">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type ="text" name="nama"  value="{{$pembeli->nama}}" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type ="text" name="alamat" value="{{$pembeli->harga}}" required></td>
		</tr>
		<tr>
			<td></td>
			<td><button type ="submit" name="update">Update</button></td>
		</tr>  
		</table>
		</form>
@endsection