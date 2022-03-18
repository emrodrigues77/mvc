<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {

    public static function index() {
        echo "<ul>";
        echo "<li><a href='player/all'>List All Players</li>";
        echo "</ul>";
    }

    public static function pageNotFound() {
        echo "<h1>Page Not Found</h1>";
        echo "<a href='/mvc'>Home</a>";
    }
}