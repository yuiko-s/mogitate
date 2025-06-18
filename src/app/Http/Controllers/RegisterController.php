<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function showRegistrationForm() { return view('register'); }

    public function store(Request $request){
    $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
    if ($request->hasFile('image')){
    $imagePath = $request->file('image')->store('fruits-img','storage');
    return redirect()->route('products.index')->with('success', '画像をアップロードしました。');
    }
}
}