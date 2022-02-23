<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use function Symfony\Component\Finder\name;

class StudentController extends Controller
{
    protected $name;
    protected $city;
    protected $student;



    public function create(Request $request)
    {
        $this->student = new Student();
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->save();
        return redirect()->back()->with('message', 'Student info save successfully');
    }

    public function index()
    {
        return view('add-student');
















//        $this->name = 'BITM';
//        $this->city = 'Dhaka';
//        $data = 'Dhaka';
//        $dat = 'Dhaka1';
//
//        $this->student = new Student();
//        $this->student->newStudent();
//        return 'success';


//        $this->students = Student::getAllStudent();
//        return view('all', ['students' => $this->students]);

//        return view('all')->with([
//            'data' => $this->name,
//            'rafa' => $this->city
//        ]);

//        return view('all', compact('data', 'dat'));
    }
}
