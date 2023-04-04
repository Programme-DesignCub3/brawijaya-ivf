<?php

namespace App\Http\Controllers;

use App\Faq;
use App\message;
use App\SectionContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $why = SectionContent::where('title', 'Why Brawijaya IVF Center')->first();
        $service = SectionContent::where('title', 'Our Services')->first();
        $faq_section = SectionContent::where('title', 'FAQ')->first();

        $faqs = faq::all();

        return view(
            'index',
            compact('why', 'service', 'faq_section', 'faqs')
        );
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
            'submitted'
        );
    }
}
