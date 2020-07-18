<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailSendController extends Controller
{
    public function create()
    {
        return view('charming');
    }
    public function mailsend(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $data['content'] = $request->message;
        $data['subject'] = $request->subject;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['aptName'] = $request->aptName;


        Mail::send('emails.contact-message', $data, function ($message) use ($request) {
            $message->from($request->email, $request->name)
                ->subject('Filuro Apt Website');
            $message->sender($request->email, $request->name);

            $message->to('filuro.apt@gmail.com', 'Filuro Apt ');
        });

        return redirect()->back()->with('success', true)->with('conactmsg', 'Inquiery sent! ');
    }
    public function mailsendContact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'

        ]);
        $data['content'] = $request->message;
        $data['subject'] = $request->subject;
        $data['name'] = $request->name;
        $data['email'] = $request->email;


        Mail::send('emails.contact-message.main', $data, function ($message) use ($request) {
            $message->from($request->email, $request->name)
                ->subject('Filuro Apt Website');
            $message->sender($request->email, $request->name);

            $message->to('filuro.apt@gmail.com', 'Filuro Apt ');
        });

        return redirect()->back()->with('success', true)->with('conactmsg', 'Inquiery sent! ');
    }
}
