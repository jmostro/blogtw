<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        $entries = Entry::with('user')->orderByDesc('created_at')->paginate(10);
        return view('welcome', compact('entries'));
    }

    public function show(Entry $entrySlug){          
        return view('entries.show',[
            'entry' => $entrySlug
        ]);
    }
}
