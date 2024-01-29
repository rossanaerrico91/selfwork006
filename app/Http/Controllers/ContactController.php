<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContattiStoreRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contacts.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function store(ContattiStoreRequest $request)
    {
        $validated = $request->validated();

        Mail::to(config('mail.from.address'))->send(new ContactEmail($validated));

        return view('contacts.store');
    }
}
