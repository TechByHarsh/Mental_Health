<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\UserContactConfirmationMail;
use App\Mail\AdminContactMail;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function submit(Request $request)
    {

    // TO validate the the input fields
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000', 


        ]);


        // to create a row in the contactmessage databse

        $contact=ContactMessage::create([
            
            'user_id'=>auth()->id(),
            'full_name'=>$request->full_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);



        // to send mail to Admin

        Mail::to('kharsh5234@gmail.com')
        ->send(new AdminContactMail($contact));




        // confirmation mail to user 

         Mail::to($contact->email)
            ->send(new UserContactConfirmationMail($contact));

        
        return back()->with('success', 'Your message has been sent successfully.');


    }
    
}
