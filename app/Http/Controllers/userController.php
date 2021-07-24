<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function services(){
        $services = Service::all();
        return view('home',compact('services'));

    }
}
