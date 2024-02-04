<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupsController extends Controller
{
    //
    public function index(){
        $groups = Group::all() ;
          return view('admin.groups.index', compact('groups'));
        }

        public function create(){
            return view('admin.groups.create') ;
        }

        public function store(Request $request, Group $group){

            Group::create($request->all());

            return redirect()->route('admin.groups.index') ;
          }
    
        public function show(Group $group){

            return view('admin.groups.show', compact('group')) ;
          }
    
        public function edit(Group $group){
            return view('admin.groups.edit', compact('group')) ;
          }
          
        public function update(Request $request, Group $group){

            $requestData = $request->all();

            $group->update($requestData) ;

            $group->update([

                'name' => $request->name,
                'level' => $request->level,
                
              ]);

            return redirect()->route('admin.groups.index') ;
        }

        public function destroy(Group $group){

            $group->delete() ;
    
            return redirect()->route('admin.groups.index') ;
            
          }
  
}
