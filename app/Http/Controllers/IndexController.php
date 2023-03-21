<?php

namespace App\Http\Controllers;

use App\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        message::create($validatedData);

        return redirect()->back()->with(
            'status',
            'Form Submitted'
        );
    }
}
