<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //pages
    public function index(){
        $socialData = json_decode(file_get_contents(storage_path('data/social.json')));
        $contactData = json_decode(file_get_contents(storage_path('data/contact.json')));

        return view('pages.contact')->with([
            'socialData' => $socialData,
            'contactData' => $contactData
        ]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'company' => 'nullable|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'text' => 'required|string',
        ]);
        // dd($request->all());
        $userData = $validated;

        // Read existing data, if any
        $existingData = [];
        $dataFilePath = storage_path('data/message.json');
        if (file_exists($dataFilePath)) {
            $existingData = json_decode(file_get_contents($dataFilePath), true);
        }

        // Append the new user data
        $existingData[] = $userData;

        // Save the data to the JSON file
        file_put_contents($dataFilePath, json_encode($existingData, JSON_PRETTY_PRINT));

        // Redirect back to the contact page with a success message
        return redirect('/contact')->with('success', 'Message sent successfully!');
    }

}
