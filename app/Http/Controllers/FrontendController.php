<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        $services = Service::all();
        return view('welcome', compact('services'));
    }
}
