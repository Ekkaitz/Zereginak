<?php

namespace App\Http\Controllers;
use App\Models\Zeregina;
use Illuminate\Http\Request;

class ZereginakController extends Controller
{
    public function index(){
        $zereginzerrenda= Zeregina::all();
        return view("sortu",["zereginzerrenda"=>$zereginzerrenda]);
    }

    public function gorde(Request $request){
        
        $izena = $request->input('izena');
        $zeregina=new Zeregina();
        $zeregina->izena=$izena;
        $zeregina->save();
        
        return $this->index();;
    }

    public function delete($id){
        Zeregina::destroy($id);
        return $this->index();;
    }

    public function bilatu(Request $request){
        $izena=$request->input("izena");
        $task=Zeregina::select("izena")->where("izena",$izena)->first();


        return view("bilatu",["task"=>$task]);
    }




}