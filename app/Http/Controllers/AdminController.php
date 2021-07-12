<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('contacts'));
        // return view('home');
    }
}
