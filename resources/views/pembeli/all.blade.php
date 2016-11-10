@extends('layout.app')

@section('title')
All Data
@endsection

@section('content')
	<table>
	<tr>
		<a href="{{ url('barang/all') }}">Barang</a>
	</tr>
	<br>
	<br>
	<tr>
		<a href="{{ url('pembeli/add/') }}">Add New</a>
	</tr>
	<br>
	<br>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Alamat</th>
				<th colspan=2>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pembeli as $key)
				<tr>
					<td>{{ $key->nama }}</td>
					<td>{{ $key->alamat }}</td>
					<td><a href="{{ url('pembeli/edit/'.$key->id) }}">Edit</a></td>
					<td><a onclick="return confirm('Are you sure want to delete {{ $key->nama }} ?')" href="{{ url('pembeli/delete/'.$key->id) }}">Delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection