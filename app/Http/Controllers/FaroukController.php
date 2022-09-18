<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Connection;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class FaroukController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        $cats = Category::all();
        $contact = Contact::find(1);
        return view('farouk.index', compact('contact', 'cats', 'setting'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required',
        ]);
        $data = $request->all();
        Connection::create($data);
        return redirect(route('farouk'))->with('success', 'Your data has been sent successfully');
    }
}
