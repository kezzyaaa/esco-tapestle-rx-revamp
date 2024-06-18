<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactFormControllerCopy extends Controller
{
    public function store(Request $request)
    {

        $validated = $this->validateRequest($request);
        $validated['camp_code'] = $request->input('camp_code', '202405-000165');

        $response = $this->sendDataToRedDotCRM($validated);

        if ($response->getStatusCode() == 200) {
            return redirect('contact-us-copy?status=sent')->with('message', 'Thank you for your message. We will be in touch.');
        } else {
            return back()->withInput()->withErrors(['error' => 'Failed to send data to external CRM. Please try again later.']);
        }
    }

    private function validateRequest(Request $request)
    {
        return $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'contactFull' => 'required',
            'country' => 'required',
            'countryName' => 'nullable',
            'company' => 'required',
            'address' => 'required',
            'prodInterest' => 'nullable',
            'message' => 'nullable',
            'g-recaptcha-response' => 'required',
        ], [
            'g-recaptcha-response.required' => 'ReCaptcha verification failed',
        ]);
    }

    private function sendDataToRedDotCRM($data)
    {
        $client = new Client();
        $url = 'https://reddotcrm.com/api/rfqform';

        try {
            return $client->request('POST', $url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Origin' => 'https://escopharma.com',
                ],
                'json' => $data,
                'http_errors' => false
            ]);
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            return response()->json(['error' => 'API Request Failed: ' . $e->getMessage()], 500);
        }
    }

}
