<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PageCounterController extends Controller
{
    public function index()
    {

        DB::table('pagecounter')->where('ID', 1)->increment('Jumlah');

        $counter = DB::table('pagecounter')->where('ID', 1)->first();

        return view('indexpagecounter', ['jumlah' => $counter->Jumlah]);
    }
}
