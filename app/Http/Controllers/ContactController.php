<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function showMotivation()
    {
        return view('contact.motivation');
    }

    public function showDeveloper()
    {
        return view('contact.developer');
    }

    public function showQuestion()
    {
        return view('contact.question');
    }

    public function showContact()
    {
        return view('contact.contact');
    }
}
