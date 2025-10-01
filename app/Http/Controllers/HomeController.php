<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Add
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class HomeController extends Controller
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
     * index
     */
    public function index()
    {
        return view('home');
    }

    /**
     * account
     */
    public function account()
    {
        $mCurrentUser = Auth::user();
        return view('home.account')->with([
            'user'  =>  $mCurrentUser
        ]);
    }

    /**
    * updateAccount
    */
    public function updateAccount(Request $request, string $id)
    {
        $this->validate($request, [
            'first_name' => 'nullable|string',
            'last_name' => 'nullable|string',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
        ]);

        User::where('id', $id)->update([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
        ]);
        return redirect()->back()->with('success', "Account updated successfully");
    }


    /**
     * updatePassword
    */
    public function updatePassword(Request $request, string $id)
    {
        $fields = $request->validate([
        'current_password' => 'required|string',
        'password' => 'required|string|min:6|confirmed'
        ]);

    $item = User::find($id);
    // Verify_current_password
    if (!Hash::check($request->current_password, $item->password)) {
        throw ValidationException::withMessages([
            'current_password' => ['Your current password is incorrect.'],
        ]);
    }
    $item->password = Hash::make($request['password']);
    $item->save();

    return redirect()->back()->with('success', "Password updated successfully");
    }


    /**
    * deleteAccount
    */
    public function deleteAccount(Request $request, string $id)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        $item = User::find($id);
        // Check_password
        if (!Hash::check($request->password, $item->password)) {
            throw ValidationException::withMessages([
                'password' => ['Your current password is incorrect.'],
            ]);
        }
        $item->delete();
        auth()->logout();

        return redirect('/')->with('danger', "Your account has been deleted successfully.");


        $this->validate($request, [
            'first_name' => 'nullable|string',
            'last_name' => 'nullable|string',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
        ]);

    }


}
