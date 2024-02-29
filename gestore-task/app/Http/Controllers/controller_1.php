<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;

class controller_1 extends Controller
{
    public function index(Request $request) {
        $t = tasks::all();
        return view("home", compact("t"));
    }

    public function addTask(Request $request) {
        $nome = $request->has('nome') ? $request->input('nome') : null;
        $descrizione = $request->has('descrizione') ? $request->input('descrizione') : null;
        $completato = $request->has('completato');
        
        if($nome == null || $descrizione == null) {
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
        $id = $request->has(id) ? $request->input("id") : null;
        


    }
}
 