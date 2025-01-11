<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::paginate(10);
        return CompanyResource::collection($companies);
    }

    public function show(Company $company)
    {
        return new CompanyResource($company);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'web' => 'nullable|string',
            'city' => 'required|in:Jakarta,Bandung,Surabaya,Yogyakarta,Semarang,Malang',
            'logo' => 'nullable|string',
            'cover' => 'nullable|string',
            'gallery' => 'nullable|string',
            'about' => 'nullable|string',
            'description' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'twitter' => 'nullable|string',
            'facebook' => 'nullable|string',
        ]);

        $company = Company::create($validated);
        return new CompanyResource($company);
    }
}
