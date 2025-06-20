<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanController extends Controller
{
    public function index()
    {
        $newkaryawan = DB::table('newkaryawan')->orderBy('NIP', 'asc')->paginate(10);
        return view('newkaryawanindex', compact('newkaryawan'));
    }

    public function tambah()
    {
        return view('newkaryawantambah');
    }

    public function store(Request $request)
    {
        DB::table('newkaryawan')->insert([
            'NIP' => $request->NIP,
            'nama' => $request->nama,
            'pangkat' => $request->pangkat,
            'gaji' => $request->gaji
        ]);

        return redirect('/eas');
    }
    public function update(Request $request)
    {
        DB::table('newkaryawan')->where('kodepegawai', $request->kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        return redirect('/karyawan');
    }

    public function hapus($NIP)
    {
        DB::table('newkaryawan')->where('NIP', $NIP)->delete();
        return redirect('/eas');
    }

    public function rupiah(Request $request){

	$gaji = "Rp " . number_format($angka,2,',','.');
	return $gaji;
}

public function proses(Request $request)
{
    $this->validate($request,[

    ]);

    return view('proses',['data' => $request]);
}

}
