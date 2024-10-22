<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index() {
        $players = Player::get();

        foreach ($players as $player) {
            echo $player->name.'-'.$player->team. '<br>';
            echo '-------------<br>';
        }
    }
    public function deleted() {
        $players = Player::onlyTrashed()->latest()->get();

        foreach ($players as $player) {
            echo $player->name.'-'.$player->team. '<br>';
            echo '-------------<br>';
        }
    }

    public function create() {
        return view('player-create');
    }
    public function delete($id) {


        Player::where('id', intval($id))->delete();

        return redirect()->route('player.index');

    }
    public function restore($id) {


        Player::where('id', intval($id))->restore();

        return redirect()->route('player.index');

    }

    public function store(Request $request) {

        $player = new Player();

        $player->name = $request->name;
        $player->team = $request->team;

        $player->save();

        // return response()->json([
        //     'success' => true,
        //    'message' => 'Player created successfully'
        // ]);

        return redirect()->route('player.index');
    }
}
