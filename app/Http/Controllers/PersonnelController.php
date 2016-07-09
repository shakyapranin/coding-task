<?php

namespace App\Http\Controllers;

use App\Personnel;
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
        $personnel = new Personnel();
        return view('personnels/create')->with(['personnel'=>$personnel]);
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
