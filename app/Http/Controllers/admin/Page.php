<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Page extends Controller
{
    function listing(){
        $data['result'] = DB::table('pages')->orderBy('id','desc')->get();//$data['result'] is an array
        return view('admin/page/list',$data);
    }
    function submit(Request $request){
        $request->validate([
            'name'=>'required',
            'slug'=>'required|unique:pages',//This validates if slug are unique in the table named pages
            'description'=>'required',
            ]);
            //making associative array
            $data=array(
                'name'=>$request->input('name'),
                'slug'=>$request->input('slug'),
                'description'=>$request->input('description'),
                'status'=>1,
                'added_on'=>$request->input('added_on') 
                );
                DB::table('pages')->insert($data);
                $request->session()->flash('page','Page Saved Successfully!!!');
                return redirect('/admin/page/list');
    }

    function delete(Request $request,$id){
        DB::table('pages')->where('id',$id)->delete();
        $request->session()->flash('page','Page Deleted Successfully!!!');
        return redirect('/admin/page/list');
    }
    function edit(Request $request,$id){
        $data['result'] = DB::table('pages')->where('id',$id)->get();
        return view('admin.page.edit',$data);
    }
    function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'slug'=>'required',
            'description'=>'required',
            ]);           
           
            //making associative array
            $data=array(
                'name'=>$request->input('name'),
                'slug'=>$request->input('slug'),
                'description'=>$request->input('description'),
                'added_on'=>$request->input('added_on')                  
              );            
            DB::table('pages')->where('id',$id)->update($data);
            $request->session()->flash('page','Page Updated Successfully!!!');
            return redirect('/admin/page/list');
    }
}
