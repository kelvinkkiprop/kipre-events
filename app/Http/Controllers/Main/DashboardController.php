<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Add
use App\Models\User;
use App\Models\Main\Event;
use App\Models\Main\EventRegistration;
// use App\Models\Manage\Venue;


class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adminonly');
    }

    /**
     * index
     */
    public function index()
    {
        $totalUsers = User::count();
        $totalEvents = Event::count();
        $totalEventRegistrations = EventRegistration::count();
        $totalPayments = EventRegistration::with('package')->where('status_id', 3)->get()->sum(function($registration){
            return $registration->package->cost ?? 0;
        });
        $recentEventRegistrations = EventRegistration::with(['package','event'])->orderBy('id', 'desc')->get()->take(5);

        return view('dashboard.index')->with([
            'totalUsers' => $totalUsers,
            'totalEvents' => $totalEvents,
            'totalPayments' => $totalPayments,
            'totalEventRegistrations' => $totalEventRegistrations,
            'recentEventRegistrations' => $recentEventRegistrations,
        ]);

    }

}
