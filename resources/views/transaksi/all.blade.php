@extends('layout.app')

@section('title')
All Data
@endsection

@section('content')
<table>
	<thead>
	<tr>
		<td><a href="{{ url('transaksi/add') }}">Add New</a></td>
	</tr>
	<tr></tr>
	<tr></tr>
	<tr></tr>
		<tr>
			<td>Nama Pembeli</td>
			<td>Nama Barang</td>
			<td>Jumlah</td>
			<td>Total</td>
		</tr>
	</thead>
	<tbody>
		@foreach($transaksi as $key)
		<tr>
			<td>{{ $key->pembeli->nama }}</td>
			<td>{{ $key->barang->nama }}</td>
			<td>{{ $key->jumlah }}</td>
			<td>{{ $key->total }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection