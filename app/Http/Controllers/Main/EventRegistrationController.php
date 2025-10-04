<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Add
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Main\EventRegistration;
use App\Models\Settings\Role;
use App\Models\Others\UserStatus;

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
        $items = EventRegistration::with(['user','event', 'package','attandanceMode'])->orderBy('created_at', 'desc')->paginate(10);
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
            'role_id' => 'required|integer',
            'phone' => 'required|string',
            'password' => 'required|string',
        ]);

        // $random_password = Str::random(6);
        $random_password = $request['password'];
        $item = EventRegistration::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'role_id' => $request['role_id'],
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
        $item = EventRegistration::with(['role','status'])->find($id);
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
        $roles = Role::orderBy('name', 'asc')->get();
        $statuses = UserStatus::orderBy('name', 'asc')->get();
        return view('registrations.edit')->with([
            'item' =>  $item,
            'roles' => $roles,
            'statuses' => $statuses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this -> validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|email|unique:registrations,email,'.$id,
            'role_id' => 'required|integer',
            'phone' => 'required|string',
            'password' => 'required|string',
            'reset_password' => 'nullable|string',
        ]);

        // $random_password = Str::random(6);
        $random_password = $request['password'];
        $item = EventRegistration::where('id', $id)->update([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            // 'password' => Hash::make($random_password),
            'role_id' => $request['role_id'],
            'phone' => $request['phone'],
            'status_id' => $request['status_id'],
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        // return $item;
        // ResetPassword
        if($request['reset_password']=='on'){
            EventRegistration::where('id', $id)->update([
                'password' => Hash::make($random_password),
            ]);

            // Message
            $message = "<div>
                <p>Your username/email is: {$request['email']}, and the default password is: {$random_password}</p>
                <p>Click the button below to Login.</p>
            </div>";
            $data = array(
                'name' => $request['first_name'],
                'subject' => 'Updated Account',
                'url' => config('app.url').'/login',
                'btn-text' => 'Login',
                'message' => $message,
            );
            Mail::to($request['email'])->send(new SendEmail($data));
        }

        return redirect()->route('registrations.index')->with('info', 'EventRegistration updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = EventRegistration::find($id);
        $item->delete();
        return redirect()->back()->with('danger', 'EventRegistration removed successfully');
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
