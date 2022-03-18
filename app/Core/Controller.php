<?php

namespace App\Core;

abstract class Controller {

    public function view(string $view) {
        require 'app/Views/' . $view . '.php';
    }
}