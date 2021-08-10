<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StatusRequest;

class StatusController extends Controller
{
    public function store(StatusRequest $request)
    {
    	$request->make();

    	return back();
    }
}
