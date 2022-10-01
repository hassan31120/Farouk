<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Connection;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class FaroukController extends Controller
{
    public function index()
    {
        $ad         = Product::where('cat_id', 2)->latest()->limit(1)->first();
        $motion     = Product::where('cat_id', 3)->latest()->limit(1)->first();
        $graphics   = Product::where('cat_id', 4)->latest()->limit(1)->first();
        $ceo        = Product::where('cat_id', 5)->latest()->limit(1)->first();
        $cem        = Product::where('cat_id', 6)->latest()->limit(1)->first();
        $cm         = Product::where('cat_id', 7)->latest()->limit(1)->first();
        $cc         = Product::where('cat_id', 8)->latest()->limit(1)->first();
        $mont       = Product::where('cat_id', 9)->latest()->limit(1)->first();
        $setting = Setting::find(1);
        $cats = Category::all();
        $contact = Contact::find(1);
        return view('farouk.index', compact('contact', 'cats', 'setting', 'ad', 'motion', 'graphics', 'ceo', 'cem', 'cm', 'cc', 'mont'));
    }

    public function show($id){
        $cat = Category::find($id);
        $products = Product::where('cat_id', $id)->paginate(6);
        $contact = Contact::find(1);
        return view('farouk.show', compact('products', 'contact', 'cat'));
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
