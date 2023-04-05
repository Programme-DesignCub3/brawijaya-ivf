<?php

namespace App\Http\Controllers;

use App\SectionContent;
use Illuminate\Http\Request;

class WhyController extends Controller
{
    public function index()
    {
        $why = SectionContent::where('title', 'Why Brawijaya IVF Center')->first();

        return view(
            'pages.why',
            compact('why')
        );
    }
}
