<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class EntryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function new()
    {
        return view('entries.new');
    }

    public function save(Request $request)
    {
        //validar campos request
        $validatedData = $request->validate([
            'title' => 'required|min:7|max:255|unique:entries',
            'content' => 'required|min:25|max:3000',
        ]);

        // crear nueva entrada
        $entry = new Entry();
        $entry->title = $validatedData['title'];
        $entry->content = $validatedData['content'];
        $entry->user_id = auth()->id();
        $entry->save();
        $status = 'Entrada publicada.';
        return back()->with(compact('status'));
    }

    public function edit(Entry $entry){                
        return view ('entries.edit', compact('entry'));
    }

    public function update(Entry $entry, Request $request){
        //validar campos request
        $validatedData = $request->validate([        
        'title' => 'required|min:7|max:255|unique:entries,id,'.$entry->id,
        'content' => 'required|min:25|max:3000',
        ]);

        if ($entry->user_id === auth()->id()) {
            $entry->title = $validatedData['title'];
            $entry->content = $validatedData['content'];
            $entry->save();
            $status = 'Entrada actualizada.';            
        } else {
            $status ='No se permite modificar la entrada.';
        }        
        return redirect()->route('entries.show',$entry->getFullSlug())->with(compact('status'));
    }
}
