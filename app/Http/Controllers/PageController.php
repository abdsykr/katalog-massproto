<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()      { return view('pages.home'); }
    public function profil()    { return view('pages.profil'); }
    public function kurikulum() { return view('pages.kurikulum'); }
    public function ekskul()    { return view('pages.ekskul'); }
    public function ppdb()      { return view('pages.ppdb'); }
}
