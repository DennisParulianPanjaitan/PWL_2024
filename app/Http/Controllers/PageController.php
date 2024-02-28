<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about($nama, $nim) {
        return 'Nama Saya : '.$nama." NIM: ".$nim;
    }
    public function article($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}

