<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZereginakController extends Controller
{
    public function index(){
        
        return view("sortu");
    }

    public function gorde(Request $req){
        
        $izena = $req->input('izena');
        
        return view("sortu");
    }
}