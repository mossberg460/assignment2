<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    private $fileURL;
    private $games;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->fileURL = "../resources/products.json";

        if (!file_exists($this->fileURL)) {
          file_put_contents($this->fileURL, json_encode([]));
          $this->games = []
        }
        else {
          $this->games = json_decode(file_get_contents($this->fileURL));
        }
    }

    public function index() {
      return response()->json($this->games);
    }

    public function create(Request $request) {
      $game = [];
      $game["title"] = $request->input("title");
      $game["price"] = $request->input("price");
      $game["id"] = $request->input("id");

      $this->games[] = $game;

      file_put_contents("../resources/products.json", json_encode($this->games));

      return response()->json($this->games);
    }

    public function show($id) {
      foreach ($this->games as $game) {
        if ($game->id == $id) {
          return response()->json($game);
        }
      }
    }
}
