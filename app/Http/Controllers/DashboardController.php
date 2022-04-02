<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Travel_packages;
use App\Models\Transactions;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard',[
            'travel_package' => Travel_packages::count(),
            'transaction' => Transactions::count(),
            'transaction_pending' => Transactions::where('transaction_status', 'PENDING')->count(),
            'transaction_success' => Transactions::where('transaction_status', 'SUCCESS')->count()
        ]);
    }
}
