<?php

namespace App\Http\Controllers;

use App\Models\Player;
use DB;
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

    public function showAllWithRawQuery() {
        $players = DB::select(('select * from players'));


        foreach ($players as $player) {
            echo $player->name.'-'.$player->team. '<br>';
        }

    }

    public function showByIdWithRawQuery($id) {
        $player = DB::select('select * from players where id=?', [intval($id)]);
        echo $player[0]->name;
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

    public function forceDelete($id) {
        Player::where('id', intval($id))->forceDelete();

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

    public function storeWithRawQuery() {
        DB::insert('insert into players (name, team) values (?, ?)', ['Arif', 'A']);

        return redirect()->route('player.index');
    }

    public function updateWithRawQuery($id) {
        DB::update('update players set name = ? where id = ?', ['Nazrul', $id]);

    }
}
