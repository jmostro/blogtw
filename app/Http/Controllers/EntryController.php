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
        $status = 'Entry.Published_Succesfuly';
        return back()->with(compact('status'));
    }

    public function edit($id){
        $entry = Entry::where('id',$id)->first();        
        return view ('entries.edit', compact('entry'));

    }

    public function update(Request $request, $id){
        //validar campos request
        $validatedData = $request->validate([        
        'title' => 'required|min:7|max:255|unique:entries,id,'.$id,
        'content' => 'required|min:25|max:3000',
        ]);
                
        $entry = Entry::find($id);
        if ($entry->id == $id) {
            if ($entry->user_id === auth()->id()) {
                $entry->title = $validatedData['title'];
                $entry->content = $validatedData['content'];
                $entry->save();
                $status = 'Entry.Updated_Succesfuly';
                
            } else {
                $status ='Entry.Edit_Forbidden';
            }
        }else {
            $status = 'Entry.NotFound';
        }
        return redirect()->route('entries.show',$id)->with(compact('status'));
    }
}
