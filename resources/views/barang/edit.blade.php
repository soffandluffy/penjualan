@extends('layout.app')

@section('title')
Edit Data
@endsection

@section('content')
<form method="POST" action="{{url('barang/update')}}">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="hidden" name="id" value="{{$barang->id}}">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="{{$barang->nama}}" required></td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td><select name="jenis" required>
			<option value="">--Pilih Jenis--</option>
			<option {{($barang->jenis=="baru"?"selected":"")}} value="baru">Baru</option>
			<option {{($barang->jenis=="bekas"?"selected":"")}} value="bekas">Bekas</option>
			</select></td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><input type="number" name="jumlah" value="{{$barang->jumlah}}" required></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="number" name="harga" value="{{$barang->harga}}" required></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" name="update">Update</button></td>
			<td><a href="{{ url('/barang/all/') }}">Back</a></td>
		</tr>
	</table>
</form>
@endsection