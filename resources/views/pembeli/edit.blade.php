@extends('layout.app')

@section('title')
Add Data
@endsection

@section('content')
<form method="POST" action="{{ url('/pembeli/update') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="id" value="{{ $pembeli->id }}">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="{{ $pembeli->nama }}" required></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat" required>{{ $pembeli->alamat }}</textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><button type="submit" name="simpan">Update</button></td>
			<td><a href="{{ url('/pembeli/all') }}">Back</a></td>
		</tr>
	</table>
</form>
@endsection