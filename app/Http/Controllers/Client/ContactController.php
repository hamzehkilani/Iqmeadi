<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\Contact;
use App\Models\User;
use App\Notifications\SendMail as NotificationsSendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('Admin.Contact.ShowContacts', compact('contacts'));
    }

    public function ReplayMessage(Request $request)
    {
        $userEmail = $request->email;



        $data = [
            'title' => "تواصل",
            'body' => $request->message,

        ];

        Mail::to($userEmail)->send(new SendMail($data));

        Contact::where('id', $request->id)->update([
            'replay' => 1
        ]);

        toastr()->success('تم الرد :)');

        return redirect()->back();
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => 'email|required|string',
            'message' => 'string'
        ]);
        $userEmail = $request->email;
        $users = User::where('role_id', 1)->get();
        Contact::create([
            'message' => $request->message,
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email
        ]);


        $data = [
            'title' => "تواصل",
            'body' => "سيقوم الموظف بالتواصل معك خلال فترة قصيرة",

        ];


        Mail::to($userEmail)->send(new SendMail($data));

        $body = "التواصل $request->fname $request->lname يريد السيد ";

        Notification::send($users, new NotificationsSendMail($body, Contact::latest()->first()->id));

        toastr()->success('تم الارسال شكرا لك :)');

        return redirect()->back();
    }


    public function show($id)
    {
        $contact = Contact::where('id', $id)->first();
        return view('Admin.Contact.ShowContacts', compact('contact'));
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }



    public function destroy($id)
    {
        //
    }
}
