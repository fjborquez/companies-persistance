<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    public function get($cik)
    {
        return Submission::find($cik);
    }

    public function post(Request $request)
    {
        return Submission::create([
            'cik' => (int)$request->input('cik'),
            'addresses' => $request->input('addresses'),
            'category' => $request->input('category'),
            'description' => $request->input('description'),
            'ein' => $request->input('ein'),
            'entityType' => $request->input('entityType'),
            'exchanges' => $request->input('exchanges'),
            'filings' => $request->input('filings'),
        ]);
    }
}
