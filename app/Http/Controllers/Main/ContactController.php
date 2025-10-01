<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Add
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class ContactController extends Controller
{
    /**
     * index
     */
    public function index()
    {
        return view('home.contact');
    }


    /**
     * contactUs
     */
    public function contactUs(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'phone' => 'nullable',
        ]);

        $data = array(
            'name' => $request->first_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message.' Phone: '.$request->phone,
        );

        Mail::to($request->email)->send(new SendEmail($data));
        return redirect()->back()->with('success', "Message sent successfully");
    }

}
