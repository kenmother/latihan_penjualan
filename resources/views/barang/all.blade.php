@extends('layout.app')

@section('title')
add
@endsection

@section('content')
	<table>
	<thead>
		<tr>
			<th>Nama</th>
			<th>Jenis</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($barang as $key)
			<tr>
				<td>{{$key->nama}}</td>
				<td>{{$key->jenis}}</td>
				<td>{{$key->jumlah}}</td>
				<td>{{$key->harga}}</td>
				<td><a href ="{{url('barang/edit/'.$key->id)}}">Edit</a></td>
				<td><a onclick ="return confirm('Srius ni!! {{$key->nama}}?')" href ="{{url('barang/delete/'.$key->id)}}">Delete</a></td>
			</tr>
		@endforeach
	</tbody>
	</table>
@endsection
