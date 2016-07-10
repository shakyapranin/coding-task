<?php

namespace App\Http\Controllers;

use App\Personnel;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Log;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class PersonnelController extends Controller
{
    //
    public function index()
    {
        try {
            if(Storage::disk('csv')->exists(Personnel::$csvfilename)){
                $personnel_file = Storage::disk('csv')->get(Personnel::$csvfilename);
                var_dump($personnel_file);
            }
        }catch (FileException $e){
            Log::error("File Exception occurred", $e);
        }

        return view('personnels.index');
    }

    public function store(Request $request)
    {

        $personnel = $request->request; // Parameter Bag Object
        $personnel_data = array();
        $associative_personnel_data = array();
        $key_array = array();

        // $personnel->keys() returns keys of http request parameters
        foreach ($personnel->keys() as $key) {
            array_push($key_array, $key); // Store keys to use as header in csv files
            array_push($personnel_data, '"'. $personnel->get($key). '"');
            $associative_personnel_data[$key] = $personnel->get($key);
        }

        // Perform validation before converting into a csv array
        $validator = Validator::make($associative_personnel_data, Personnel::$rules, Personnel::$messages);

        if ($validator->fails()) {
            $error_message= '';
            foreach ($validator->messages()->getMessages() as $attribute => $errors) {
               foreach ($errors as $error) {
                   $error_message .= chr(10). $error;
               }
            }

            Flash::error('Validation failed due to : '. $error_message);
            return redirect()->route('storePersonnel');
        } else {
            $personnel_data = implode(',', $personnel_data);// CSV row of new data
            try {

                if (!Storage::disk('csv')->exists(Personnel::$csvfilename)) {
                    $content = implode(',', $key_array);// Key headers
                    Storage::disk('csv')->put(Personnel::$csvfilename, $content);
                }

                $personnel_file = Storage::disk('csv')->get(Personnel::$csvfilename);
                $modified_file_content = $personnel_file.chr(10).$personnel_data;// Add new record to end.
                Storage::disk('csv')->put(Personnel::$csvfilename, $modified_file_content);
                Log::info('Personnel data saved with token : '. $personnel->get('_token'));

            } catch (FileException $e) {
                Log::error("File Exception Occurred", $e);
            }

            Flash::message('Personnel data saved!');
            return redirect()->route('storePersonnel');
        }

        // TODO : handle storing personnel records to database if needed
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
