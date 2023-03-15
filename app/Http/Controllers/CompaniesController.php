<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function all(Request $request)
    {
        $date_filter = $request->date;

        if (empty($date_filter))
        {
            return Company::scan();
        }

        return Company::all()->whereBetween('created_at', [$date_filter . ' 00:00:00', $date_filter . ' 23:59:59']);
    }

    public function get($cik)
    {
        return Company::find($cik);
    }

    public function post(Request $request)
    {
        return Company::create([
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
