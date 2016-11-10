@extends('layout.app')

@section('title')
Add Data
@endsection

@section('content')
<form method="POST" action="{{url('barang/save')}}">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td><select name="jenis" required>
			<option value="">--Pilih Jenis--</option>
			<option value="baru">Baru</option>
			<option value="bekas">Bekas</option>
			</select></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input type="number" name="jumlah" required></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="number" name="harga" required></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" name="simpan">Save</button></td>
			<td><a href="{{ url('barang/all/') }}">Back</a></td>
		</tr>
	</table>
</form>
@endsection