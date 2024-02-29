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
        
        if(!$nome || !$descrizione) {
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

    public function deleteTask(Request $request) {  // Parametri: id: id del task da eliminare
        $id = $request->has("id") ? $request->input("id") : null;

        if (!$id) {
            return view("errore");
        }

        if (tasks::find($id)) {  // Verifica l'esistenza del task
            tasks::destroy($id);
        } else {
            return view("errore");
        }

        return redirect("/");
    }

    public function setName(Request $request) {  // Parametri: id: id del task da modificare, nome: nuovo nome da assegnare al task
        $id = $request->has('id') ? $request->input('id') : null;
        $name = $request->has('nome') ? $request->input('nome') : null;

        if (!$id || !$name) {
            return view('errore');
        }

        $task = tasks::find($id);  // Trova l'elemento dall'id

        if ($task) {
            $task->nome = $name;    // Imposta il nuovo nome
            $task->save();          // Salva le modifiche
        } else {
            return view("errore");
        }

        return redirect("/");
    }

    public function setDescription(Request $request) {  // Parametri: id: id del task da modificare, descrizione: nuova descrizione da assegnare al task
        $id = $request->has('id') ? $request->input('id') : null;
        $description = $request->has('descrizione') ? $request->input('descrizione') : null;

        if (!$id || !$description) {
            return view('errore');
        }

        $task = tasks::find($id);  // Trova l'elemento dall'id

        if ($task) {
            $task->descrizione = $description;  // Imposta il nuovo nome
            $task->save();                      // Salva le modifiche
        } else {
            return view('errore');
        }

        return redirect("/");
    }
}
 