<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionsController extends Controller
{
    //
    public function index(){

          $regions = Region::all() ;
          return view('admin.regions.index', compact('regions'));
        }

        public function create(){
            return view('admin.regions.create') ;
        }
        public function store(Request $request, Region $region){
          $requestData = $request->all() ;
          Region::create($request->all());

            return redirect()->route('admin.regions.index') ;
          }
    
        public function show(Region $region){

            return view('admin.regions.show', compact('region')) ;
          }

        public function destroy(Region $region){

            $region->delete() ;
    
            return redirect()->route('admin.regions.index') ;
        }
        
        
}
