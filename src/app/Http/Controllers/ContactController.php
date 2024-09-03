<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsRequest;
use App\Models\Contacts;


class ContactController extends Controller
{
    public function index()
    {
        return view('index');
        $contacts = Contacts::all();
        return view('index', ['contacts' => $contact]);

    }

    public function confirm(ContactsRequest $request)
    {
        $contact = $request->only(['first-name','last-name','gender','tell','tell','tel3','email','address','building','category','detail']);
        return view('confirm', compact('contact'));
    }

   public function store(ContactsRequest $request)
    {
        $contact = $request->only(['first-name','last-name','gender','tell','tell','tel3','email','address','building','category','detail']);
            Contacts::create($contact);
            return view('thanks');
    }


}

