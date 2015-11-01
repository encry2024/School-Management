<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Eloquent
{
    use SoftDeletes;
    //
    protected $table = 'students';
    protected $dates = ['deleted_at'];
    protected $fillable = ['firstname', 'middlename', 'lastname',
        'contact', 'address', 'dob', 'gender'];


    public static function storeStudent($request)
    {
        $student = new Student();
        $student->firstname = $request->get('fname');
        $student->middlename = $request->get('mname');
        $student->lastname = $request->get('lname');
        $student->contact = $request->get('contact');
        $student->address = $request->get('address');
        $student->dob = $request->get('dob');
        $student->gender = $request->get('gender');

        if($student->save()) {
            return redirect('student/exam', compact('student'));
        }
    }
}
