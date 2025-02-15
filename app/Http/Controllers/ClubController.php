<?php

namespace App\Http\Controllers;

use App\Models\Championships;
use App\Models\Club;
use App\Models\Players;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $data = Club::all();
        if (!$data) {
            return response()->json(['error' => 'something had happen, try again later']);
        }
        return response()->json($data);
    }




    public function players()
    {
        $data = Players::all();
        if (!$data) {
            return response()->json(['error' => 'something had happen, try again later']);
        }
        return response()->json($data);
    }

    public function player(Request $request)
    {
        $player_id = $request->route('id');
        $data = Players::find($player_id);
        if (!$data) {
            return response()->json(['error' => 'player you want is does not exsite']);
        }
        return response()->json($data);
    }




    public function championships()
    {
        $data = Championships::all();
        if (!$data) {
            return response()->json(['error' => 'something had happen, try again later']);
        }
        return response()->json($data);
    }

    public function championship(Request $request)
    {
        $championships_id = $request->route('id');
        $data = Championships::find($championships_id);
        if (!$data) {
            return response()->json(['error' => 'championship you want is does not exsite']);
        }
        return response()->json($data);
    }
}
