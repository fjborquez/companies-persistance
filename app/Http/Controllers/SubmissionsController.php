<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    public function get($cik) 
    {
        return Submission::find($cik);
    }
}
