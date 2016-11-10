@extends('layout.app')

@section('title')
Add Data
@endsection

@section('content')
<form method="POST" action="{{ url('/pembeli/save') }}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" required=""></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat" required></textarea></td>
		</tr>

		<tr>
			<td></td>
			<td><button type="submit" name="simpan">Save</button></td>
			<td><a href="{{ url('pembeli/all/') }}">Back</a></td>
		</tr>
	</table>
</form>
@endsection