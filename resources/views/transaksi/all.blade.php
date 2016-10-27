@extends('layout.app')

@section('title')
add
@endsection

@section('content')
	<table>
	<thead>
		<tr>
			<th width="150 ">Nama Pembeli</th>
			<th width="150 ">Nama Barang</th>
			<th width="150 ">Jumlah</th>
			<th width="150 ">Total</th>
		</tr>
	</thead>
	<tbody>
		@foreach($transaksi	 as $key)
			<tr>
				<td style="text-align : center ">{{$key->pembeli->nama}}</td>
				<td style="text-align : center ">{{$key->barang->nama}}</td>
				<td style="text-align : center ">{{$key->jumlah}}</td>
				<td style="text-align : center ">{{$key->total}}</td>
				
			</tr>
		@endforeach
	</tbody>
	</table>
@endsection