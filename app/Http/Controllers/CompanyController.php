<?php

namespace App\Http\Controllers;

// Ayudantes
use Session;
use Auth;
use Str;

use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::where('owner_id', Auth::user()->id)->first();

        return view('back.companies.index')->with('companies', $companies);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        //Validar
        $this -> validate($request, array(
            'name' => 'required|max:255',
        ));

        // Guardar datos en la base de datos
        $company = Company::create([
            'owner_id' => Auth::user()->id,
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        Auth::user()->companies()->attach($company->id);

        // Mensaje de session
        Session::flash('success', 'Your company was saved correctly in the database.');

        // Enviar a vista
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        Session::flash('success', 'Deleted Successfully.');
        return redirect()->back();
    }
}
