<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('welcome');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'fname'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'fname'      =>  $request->fname,
            'message'   =>   $request->message
        );

     Mail::to('irfanripat@gmail.com')->send(new SendMail($data));
     return redirect()->back()->with('success', 'Thanks for contacting us!');

    }
}
