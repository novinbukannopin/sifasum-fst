<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use App\Models\Event;
use App\Services\EventService;

class HomepageController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('homepage', compact('rooms'));
    }

    public function searchRoomAvail(Request $request)
    {
        // $rooms = Room::where('name', '=', $request->input('name'));
        dd($request->all());
        return view('homepage', compact('rooms'));
    }
}
