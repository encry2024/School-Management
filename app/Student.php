<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
class Student extends Eloquent
{
    use SoftDeletes;
    //
    protected $table = 'students';
    protected $dates = ['deleted_at'];
    protected $fillable = ['firstname', 'middlename', 'lastname',
        'contact', 'address', 'dob', 'gender', 'mother_name', 'mother_work_add', 'mother_num', 'mother_work_occ',
        'father_name', 'father_work_add', 'father_work_occ'];
    public $timestamps = true;


    public static function storeStudent($request)
    {
        $examiners = DB::connection('mysql2')->table('examiners')
            ->insert([
                'fname'           =>    $request->get('fname'),
                'mname'           =>    $request->get('mname'),
                'lname'           =>    $request->get('lname'),
                'contact'         =>    $request->get('contact'),
                'p_address'       =>    $request->get('p_address'),
                'dob'             =>    $request->get('dob'),
                'gender'          =>    $request->get('gender'),
                'mother_name'     =>    $request->get('mother_name'),
                'mother_num'      =>    $request->get('mother_num'),
                'mother_work_add' =>    $request->get('mother_work_add'),
                'mother_occ'      =>    $request->get('mother_occ'),
                'father_name'     =>    $request->get('father_name'),
                'father_num'      =>    $request->get('father_num'),
                'father_occ'      =>    $request->get('father_occ'),
                'father_work_add' =>    $request->get('father_work_add'),
                'created_at'      =>    (new \DateTime())->format('Y-m-d H:i:s'),
                'updated_at'      =>    (new \DateTime())->format('Y-m-d H:i:s')
            ]);

        return redirect('student/exam');
        
        /*$student = new Student();
        $student->firstname = $request->get('fname');
        $student->middlename = $request->get('mname');
        $student->lastname = $request->get('lname');
        $student->contact = $request->get('contact');
        $student->address = $request->get('address');
        $student->dob = $request->get('dob');
        $student->gender = $request->get('gender');

        if($student->save()) {
            return redirect('student/exam', compact('student'));
        }*/
    }
}
