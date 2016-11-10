<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

class TransaksiController extends Controller
{
    public function index() {
		$data['transaksi'] = \App\Transaksi::with(['barang', 'pembeli']) -> paginate(10);
		// echo "<pre>".print_r($data,1)."</pre>";
		return view('transaksi.all') -> with($data);
	}

    public function add() {
    	$data['barang'] = \App\Barang::all();
    	$data['pembeli'] = \App\Pembeli::all();
    	return view('transaksi.add') -> with($data);
    }

    public function save() {
    	$a = new \App\Transaksi;
    	$a->id_barang = Input::get('id_barang');
    	$a->id_pembeli = Input::get('id_pembeli');
    	$a->jumlah = Input::get('jumlah');
    	$a->total = (float)\App\Barang::find(Input::get('id_barang'))['harga']*(int)Input::get('jumlah');
    	$a->save();

    	return redirect(url('transaksi/all'));
    }
}
