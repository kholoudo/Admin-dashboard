<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services=Service::all();
        // dd($services[0]->);
        return view('layouts.services', compact('services'));
    }
}
