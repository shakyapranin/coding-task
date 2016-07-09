<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PersonnelController extends Controller
{
    //
    public function index()
    {
          // TODO : handle listing of personnel records
    }

    public function store()
    {
        // TODO : handle storing personnel records
    }

    public function create()
    {
        return view('personnels/create');
    }

    public function single()
    {
        // TODO : handle retrieval of individual personnel records
    }

    public function destroy()
    {
        // TODO : handle deletion of personnel record
    }
}
