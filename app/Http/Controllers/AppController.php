<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Project;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $projects = Project::where('user_id', Auth::user()->id)->get();
        
        return view('app.index')->with('projects', $projects);
    }

    public function configurationIndex()
    {
        $companies = Auth::user()->companies;
        
        return view('app.configuration.index')->with('companies', $companies);
    }

    public function companyInfo()
    {
        $company = Auth::user()->companies->first();

        return view('app.configuration.company')->with('company', $company);
    }

}
