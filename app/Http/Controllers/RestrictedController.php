<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestrictedController extends Controller
{
    public function restricted() { return response()->json("Restricted Area: Logged in users only..."); }

}