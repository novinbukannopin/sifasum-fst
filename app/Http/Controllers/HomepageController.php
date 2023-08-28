<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('homepage', compact('rooms'));
    }
}
