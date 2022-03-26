<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
class ContactUsFormController extends Controller {
    // Create Contact Form
    public function createForm(Request $request) {
        return view('contact-us');
    }
    // Store Contact Form data
    public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'companyname'=>'nullable',
            'message' => 'required'
        ]);
        //  Store data in database
        Contact::create($request->all());
        //  Send mail to admin
        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'companyname' => $request->get('companyname'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('am.arsen.mkrtchyan@gmail.com', 'Admin')->subject('Vanarmcomp');
        });
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
