<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Passport;
use App\Models\Region;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index(){
        $students = Student::all() ;
          return view('admin.students.index', compact('students'));
        }

        public function create(){
          $regions = Region::all() ;
          $passports = Passport::all() ;
          $groups = Group::all() ;
          return view('admin.students.create', compact('regions')) ;

        }

        public function store(Request $request){

          $requestData = $request->all();
          if($request->hasFile('photo'))
          {
              $file = request()->file('photo');
              $fileName = time() . '-' . $file->getClientOriginalName() ;
              $file->move('files/photos', $fileName) ;
              $file->move('files/photos', $fileName) ;
              $requestData['photo'] = $fileName ;
          }
          
  
         

            Student::create($request->all());

            return redirect()->route('admin.students.index') ;
          }
    
        public function show(Student $student){

            return view('admin.students.show', compact('student')) ;
          }
    
        public function edit(Student $student){
            return view('admin.students.edit', compact('student')) ;
          }
          
        public function update(Request $request, Student $student){

            $requestData = $request->all();

            $student->update($requestData) ;

            $student->update([

                'regions_id' => $request->regions_id,
                'passports_id'  => $request->passports_id,
                'groups_id'  => $request->groups_id,
                'fullName' => $request->fullName,
                'year' => $request->year,
                'photo'  => $request->photo,
                
              ]);

            return redirect()->route('admin.students.index') ;
        }

        public function destroy(Student $student){

            $student->delete() ;
    
            return redirect()->route('admin.students.index') ;
            
          }
  
}
