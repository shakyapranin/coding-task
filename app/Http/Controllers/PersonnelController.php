<?php

namespace App\Http\Controllers;

use App\Personnel;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class PersonnelController extends Controller
{
    //
    public function index()
    {
          // TODO : handle listing of personnel records
    }

    public function store(Request $request)
    {
        $personnel = $request->request; // Parameter Bag Object
        $personnel_data = array();
        foreach ($personnel->keys() as $key) {
            array_push($personnel_data, $personnel->get($key));
        }
        var_dump($personnel_data);
        var_dump(Personnel::$csvfilename);
        echo "<pre>";

        try {
            $personnel_file = fopen(Personnel::$csvfilename,"w");
            var_dump($personnel_file);
        }catch (FileException $e) {
            Log::error("Unable to read file");
        }

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
