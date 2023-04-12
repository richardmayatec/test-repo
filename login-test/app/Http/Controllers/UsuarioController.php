<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function index(){
        $phrase = User::test_function();
        return view('test', compact('phrase'));
    }
}
