<?php

namespace App\Http\Controllers;

use App\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    function addPlatform(Request $request){
        (new Platform(['name' => $request->name]))->save();
        return redirect('games');
    }
}
