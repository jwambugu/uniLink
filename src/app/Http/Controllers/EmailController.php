<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Snowfire\Beautymail\Beautymail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Here we send test emails
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
    public function testSend(Request $request){
//		$title = $request->title;
		$name = $request->body;
//
//		Mail::send('emails.testSend', ['title' => $title, 'body' => $body ], function ($message){
//			$message->from('artisan254@gmail.com', 'Artisan');
//
//			$message->to('im.webartisan@gmail.com');
//
//		});
//
//		return response()->json(['msg' => 'Email Sent']);
	    $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
	    $beautymail->send('emails.testSend', ['name' => $name], function($message)
	    {
		    $message
			    ->from('bar@example.com')
			    ->to('foo@example.com', 'John Smith')
			    ->subject('Welcome!');
	    });

	    return response()->json(['msg' => 'Email Sent']);
    }
}
