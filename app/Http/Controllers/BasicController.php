<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\studentdatabase;
class BasicController extends Controller
{
    public function index()
    {
        $student=studentdatabase::all();
        return view('student.index',compact('student'));
    }
    public function create()
    {
        return view ('student.create');
    }
    public function store(studentdatabase $student)
    {
        request()->validate(['firstname'=>['required','min:3','max:10'],'lastname'=>['required','min:3','max:10'],'mobilenumber'=>['required','min:3','max:10']]);
        $student->create(request(['firstname','lastname','mobilenumber']));        
        return redirect('/student');
    }
    public function show(studentdatabase $student)
    {
        return view('student.Show',compact('student'));
    }
    public function edit(studentdatabase $student)
    {
        return view('student.edit',compact('student'));
    }
    public  function update( studentdatabase $student)    
    {        
        $student->update(request(['firstname','lastname','mobilenumber']));        
        return redirect('/student');
        
    }
    public function destroy(studentdatabase $student)
    {
        // studentdatabase::find($id)->delete();
        $student->delete();
        return redirect('/student');
    }
}
