<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function create()
    {
        return view('create');
    }
    public function successPage()
{
    return view('success');
}


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'gender' => 'required|string',
            'age' => 'required|string',
            'contact_number' => 'required|numeric',
            'email' => 'required|email',
            'complaint_detail' => 'required|string',
            'name_of_criminal' => 'required|string',
          
        ]);

        Report::create($validatedData);

        return redirect()->route('success');
    }
}
