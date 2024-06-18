<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Lead;


class ContactFormController extends Controller
{
    public function store(Request $request)
    {
       
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $capchadata = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $request->get('recaptcha'),
            'remoteip' => $remoteip
        ];

        $options = [
            'http' => [
              'header' => "Content-type: application/x-www-form-urlencoded\r\n",
              'method' => 'POST',
              'content' => http_build_query($capchadata)
            ]
        ];

        $context = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                $resultJson = json_decode($result);
        if ($resultJson->success != true) {
                return back()->withErrors(['captcha' => 'ReCaptcha Error']);
                }
        if ($resultJson->score >= 0.3) {

            $validated = $this->validateRequest();
            $leads = Lead::create([
               'name' => $validated['name'],
               'email' => $validated['email'],
               'contactFull' => $validated['contactFull'],
               'country' => $validated['country'],
               'countryName' => $validated['countryName'],
               'company' => $validated['company'],
               'address' => $validated['address'],
               'prodInterest' => collect($validated['prodInterest'])->implode(', '),
               'message' => $validated['message'],
               ]);
            
            Mail::to('mail@escolifesciences.com')->send(new ContactFormMail($validated));

            return redirect('contact-us?status=sent')->with('message','Thank\'s for the message. We\'ll be in touch.');
        } else {
             return back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }   


    }



    private function validateRequest()
    {
        // dd(request()->prodInterest);
        return request()->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'contactNumber' => 'required',
            'contactFull' => 'required',
            'country' => 'required',
            'countryName' => 'nullable',
            'company' => 'required',
            'address' => 'required',
            'prodInterest' => 'nullable',
            'message' => 'nullable',
        ], [
            'name.required' => 'Name is required',
            'name.min' => 'Please lengthen this text to 2 characters or more',
            'email.required' => 'Email is required',
            'email.email' => 'Must be a valid email',
            'contactNumber.required' => 'Contact number is required',
            'country.required' => 'Select a country',
            'company.required' => 'Company is required',
            'address.required' => 'Address is required',

        ]);
    }


    public function showList()
    {

        $Leads = Lead::orderBy('created_at', 'desc')->get();
        // dd($newslist->first());

        return view('dashboard.show-leads',compact('Leads'));
    }
}
