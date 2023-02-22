<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    public function all(Request $request)
    {
        $date_filter = $request->date;

        if (empty($date_filter))
        {
            return Submission::scan();
        }

        return Submission::all()->whereBetween('created_at', [$date_filter . ' 00:00:00', $date_filter . ' 23:59:59']);
    }

    public function get($cik)
    {
        return Submission::find($cik);
    }

    public function post(Request $request)
    {
        return Submission::create([
            'cik' => (int)$request->input('cik'),
            'name' => $request->input('name'),
            'shortname' => $request->input('shortname'),
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
