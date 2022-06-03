<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard',[
            'reservation' => Reservation::count(),
            'travel_price' => Reservation::sum('travel_price'),
            'travel_pending' => Reservation::where('status', '0')->count(),
            'travel_success' => Reservation::where('status', '2')->count()
        ]);
    }
}
