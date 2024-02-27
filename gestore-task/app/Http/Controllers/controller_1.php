<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;

class controller_1 extends Controller
{
    public function index(Request $request) {
        // dd("ciao");
        // if (isset($request->_GET["prova"])) {
        //     dd($request->_GET["prova"]);
        // }
        $t = tasks::all();
        return view("home", compact("t"));
    }

    public function addTask(Request $request) {
        $nome = isset($request->nome) ? $request->nome : null;
        $descrizione = isset($request->descrizione) ? $request->descrizione : null;
        $completato = isset($request->completato) ? $request->completato : null;
        
        if($nome != null && $descrizione != null && $completato != null) {
            return view('errore');
        }

        $task = new tasks();

        $task::create([
            "nome" => $nome,
            "descrizione" => $descrizione,
            "completato" => $completato
        ]);
        return redirect("/");
    }

    public function deleteTask(Request $request) {
        $id = isset($request->id) ? $request->id : null;
        


    }
}
