<?php

namespace App\Http\Controllers;

use App\Category;
use App\Developer;
use App\Game as Game;
use App\Platform;
use ClassesWithParents\G;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PhpParser\Node\Stmt\Foreach_;

class GameController extends Controller
{
    function getGames(){
        return view('games',['games' => Game::with(['Developer','Platform','Category'])->get()]);
    }

    function getGame($id){
        return view('game',['game' => Game::with('developer')->find($id)->get()]);
    }

    public function postGame(Request $request){
        $game = new Game;

        $game->name = $request->name;
        $game->description = $request->description;
        $game->releasedate = $request->releasedate;
        $game->cover = $request->cover;
        $game->steamlink = $request->steamlink;
        $game->developer()->associate(Developer::findOrFail($request->developer));
        $game->save();
        $game->platform()->attach($request->platform);
        $game->category()->attach($request->category);
        $game->save();
        return redirect('games');
    }

    function deleteGame(Request $request){
        DB::table('games')->where('id','=',$request->id)->delete();
        return redirect('games');
    }

    function updateGame(Request $request){

    }
}
