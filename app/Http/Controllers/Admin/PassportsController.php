<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Passport;
use Illuminate\Http\Request;

class PassportsController extends Controller
{
    //
    public function index(){
        $passports = Passport::all() ;
          return view('admin.passports.index', compact('passports'));
        }

        public function create(){
            return view('admin.passports.create') ;
        }

        public function store(Request $request){
          // $requestData = $request->all() ;
          Passport::create($request->all()) ;

            return redirect()->route('admin.passports.index') ;
          }
    
        public function show(Passport $passport){

            return view('admin.passports.show', compact('passport')) ;
          }
    
        public function edit(Passport $passport){
            return view('admin.passports.edit', compact('passport')) ;
          }
          
        public function update(Request $request, Passport $passport){

            $requestData = $request->all();

            $passport->update($requestData) ;

            $passport->update([
                'seriya'  => $request->seriya,
                'number' => $request->number,
                'expire_date'  => $request->expire_date,
                
              ]);

            return redirect()->route('admin.passports.index') ;
        }

        public function destroy(Passport $passport){

            $passport->delete() ;
    
            return redirect()->route('admin.passports.index') ;
            
          }
}
