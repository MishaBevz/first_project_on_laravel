<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;
use Session;

class FeedbackController extends Controller
{

    public function index(){
        return view('pages.feedback');
    }

    public function sendEmailReminder(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email',
            'message'=>'min:10',
            ]);

        $data = array(
            'email' => $request->email,
            'message' => $request->message,
        );

        Mail::send('pages.feedback', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('mbevz.send.email@gmail.com');
            $message->subject($data['message']);
        });

        Session::flash('success', 'Your Email was Sent!');

        return redirect('/');

    }
}
