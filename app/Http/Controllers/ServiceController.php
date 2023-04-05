<?php

namespace App\Http\Controllers;

use App\SectionContent;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service = SectionContent::where('title', 'Our Services')->first();

        return view(
            'pages.services',
            compact('service')
        );
    }
}
