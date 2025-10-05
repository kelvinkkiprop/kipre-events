<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Add
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Main\EventRegistration;
use App\Models\Main\EventRegistrationStatus;

class EventRegistrationController extends Controller
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
        $items = EventRegistration::with(['user', 'user.position', 'user.title', 'user.country',
         'event', 'package','attendanceMode','sessionToPresent','status'])->orderBy('created_at', 'desc')->paginate(10);
        // return $items;
        return view('registrations.index')->with([
            'items' =>  $items,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::orderBy('name', 'asc')->get();
        // return $roles;
        return view('registrations.create')->with([
            'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this -> validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|email|unique:registrations,email',
            'status_id' => 'required|integer',
            'phone' => 'required|string',
            'password' => 'required|string',
        ]);

        // $random_password = Str::random(6);
        $random_password = $request['password'];
        $item = EventRegistration::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'status_id' => $request['status_id'],
            'phone' => $request['phone'],
            'password' => Hash::make($random_password),
            'status_id' => 2,
            'created_at'=>date('Y-m-d H:i:s'),
        ]);

        $message = "<div>
            <p>Your username/email is: {$item->email}, and the default password is: {$random_password}</p>
            <p>Click the button below to Login.</p>
        </div>";
        $data = array(
            'name' => $item->first_name,
            'subject' => 'Created Account',
            'url' => config('app.url').'/login',
            'btn-text' => 'Login',
            'message' => $message,
        );
        Mail::to($item->email)->send(new SendEmail($data));

        return redirect()->back()->with('success', 'EventRegistration created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = EventRegistration::with(['user','status'])->find($id);
        return view('registrations.show')->with([
            'item' =>  $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = EventRegistration::find($id);
        $statuses = EventRegistrationStatus::orderBy('name','asc')->get();
        // return $statuses;
        return view('registrations.edit')->with([
            'item' =>  $item,
            'statuses' => $statuses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this -> validate($request, [
            'status_id' => 'required|integer',
        ]);

        $item = EventRegistration::where('id', $id)->update([
            'status_id' => $request['status_id'],
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        return redirect()->route('event-registrations.index')->with('info', 'Payment status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = EventRegistration::find($id);
        $item->delete();
        return redirect()->back()->with('danger', 'Event registration removed successfully');
    }

    /**
    * searchItems
    */
   public function searchItems(Request $request)
   {
       $request->validate([
           'search_term' => 'required|string'
       ]);

       $term = $request['search_term'];
       $items = EventRegistration::with(['role','status'])->where(function($query) use($term){
           $query->where('first_name','LIKE','%'.$term.'%');
           $query->orWhere('last_name', 'LIKE', '%' . $term . '%');
           $query->orWhere('email','LIKE','%'.$term.'%');
           $query->orWhereHas('role', function($q) use ($term) {
               $q->where(function($q) use ($term) {
                   $q->where('name', 'LIKE', '%' . $term . '%');
                   $q->orWhere('alias', 'LIKE', '%' . $term . '%');
               });
           });
           $query->orWhereHas('status', function($q) use ($term) {
               $q->where(function($q) use ($term) {
                   $q->where('name', 'LIKE', '%' . $term . '%');
                   $q->orWhere('alias', 'LIKE', '%' . $term . '%');
               });
           });
       })->orderBy('first_name', 'asc')->paginate(50);

        return view('registrations.index')->with([
            'items' =>  $items,
        ]);
   }

}
