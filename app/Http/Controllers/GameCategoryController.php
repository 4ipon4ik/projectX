<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class GameCategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    function addCategory(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect('games');
    }
}