<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Add
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Main\Event;
use App\Models\Main\EventPackage;
use App\Models\Main\EventRegistration;
use App\Models\Others\Country;
use App\Models\Others\Title;
use App\Models\Others\Position;


class EventBookingController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('event-booking.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Auth::user();
        $package = EventPackage::find($id);
        $countries = Country::orderBy('name', 'asc')->get();
        $titles = Title::orderBy('name', 'asc')->get();
        $positions = Position::orderBy('id', 'asc')->get();

        return view('event-booking.show')->with([
            'user'      =>  $user,
            'package'   =>  $package,
            'countries'   =>  $countries,
            'titles'   =>  $titles,
            'positions'   =>  $positions,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = User::find($id);
        return view('event-booking.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        $this -> validate($request, [
            'title_id' => 'required|integer',
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,'.$id,
            'phone' => 'required|string',
            'institution' => 'required|string',
            'physical_address' => 'nullable|string',
            'country_id' => 'required|integer',
            'position_id' => 'required|integer',
        ]);

        $uid = Auth::user()->id;
        $item = User::where('id', $uid)->update([
            'title_id' => $request['title_id'],
            'first_name' => $request['first_name'],
            'middle_name' => $request['middle_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'institution' => $request['institution'],
            'physical_address' => $request['physical_address'],
            'country_id' => $request['country_id'],
            'position_id' => $request['position_id'],
        ]);

        $item2=EventRegistration::create([
            'user_id' => $uid,
            'event_id' => Event::first()->id,
            'package_id' => $id,
        ]);


        return redirect('/')->with('success', 'Details saved successfully');
        // return redirect()->route('events.edit', $item2->id)->with('success', 'Details saved successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
