<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepedaMotorController extends Controller
{
    public function index()
    {
        $sepedamotor = DB::table('sepedamotor')->orderBy('ID', 'desc')->paginate(10);
        return view('sepedamotor.index', compact('sepedamotor'));
    }

    public function tambah()
    {
        return view('sepedamotor.tambah');
    }

    public function store(Request $request)
    {
        DB::table('sepedamotor')->insert([
            'merksepedamotor' => $request->merksepedamotor,
            'hargasepedamotor' => $request->hargasepedamotor,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/sepedamotor');
    }

    public function edit($id)
    {
        $motor = DB::table('sepedamotor')->where('ID', $id)->first();
        return view('sepedamotor.edit', ['motor' => $motor]);
    }

    public function update(Request $request)
    {
        DB::table('sepedamotor')->where('ID', $request->id)->update([
            'merksepedamotor' => $request->merksepedamotor,
            'hargasepedamotor' => $request->hargasepedamotor,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/sepedamotor');
    }

    public function hapus($id)
    {
        DB::table('sepedamotor')->where('ID', $id)->delete();
        return redirect('/sepedamotor');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $sepedamotor = DB::table('sepedamotor')
            ->where('merksepedamotor', 'like', "%".$cari."%")
            ->orWhere('hargasepedamotor', 'like', "%".$cari."%")
            ->paginate();
        return view('sepedamotor.index', ['sepedamotor' => $sepedamotor]);
    }
}
