<?php

namespace App\Http\Controllers;

use App\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    function addDeveloper(Request $request){
        (new Developer(['name' => $request->name]))->save();
        return redirect('games');
    }
}
