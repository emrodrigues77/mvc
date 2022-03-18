<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Player;

class PlayerController extends Controller {

    public function all() {
        $players = Player::all();
        $_POST['data'] = $players;
        $this->view('players');
    }
}