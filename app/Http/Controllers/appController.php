<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
    public function appLanding() {
        return view('interface.appLanding');
    }

    public function category() {
        return view('katagori.catagory');
    }
    public function hotitems() {
        return view('katagori.hotItems');
    }
}
