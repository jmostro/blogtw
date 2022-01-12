<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        $entries = Entry::all();
        return view('welcome', compact('entries'));
    }
}
