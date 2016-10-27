@extends('layout.app')

@section('title')
add
@endsection

@section('content')
	<table>
	<thead>
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pembeli as $key)
			<tr>
				<td>{{$key->nama}}</td>
				<td>{{$key->alamat}}</td>
				<td><a href ="{{url('pembeli/edit/'.$key->id)}}">Edit</a></td>
				<td><a onclick ="return confirm('Srius ni!! {{$key->nama}}?')" href ="{{url('pembeli/delete/'.$key->id)}}">Delete</a></td>
			</tr>
		@endforeach
	</tbody>
	</table>
@endsection
