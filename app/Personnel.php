<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    //
    public static $csvfilename = 'personnel.csv';

    public static $rules = array(

        'name' => 'required',
        'gender' => 'required',
        'phone' => 'required|numeric|min:7',
        'email' => 'required|email',
        'address' => 'max:254',
        'date_of_birth' => 'date',

    );

    public static $messages = array(

        'required' => 'This :attribute is required',
        'max' => 'The :attribute must not exceed :max characters',
        'min' => 'The :attribute must be at least :min characters'

    );

}
