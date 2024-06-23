<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Address;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('address')->get();

        return response()->json($students);
    }
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->save();

        $address = new Address();
        $address->student_id = $student->id;
        $address->street = $request->input('street');
        $address->city = $request->input('city');
        $address->state = $request->input('state');
        $address->zip = $request->input('zip');
        $address->save();

        return response()->json(['message' => 'Student record created successfully']);
    }
}
