<?php

namespace App\Http\Controllers;
use App\Models\PetalsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class FetchUser extends Controller
{
    //
    public function aboutus(){
        return view('User.about');
    }
    public function services(){
        return view('User.services');
    }
    public function home(){
        return view('User.home');

    }
    public function getAllUser(){
        $users=PetalsModel::all();
        // return $users;
        return view('User.newUser',compact('users'));
    }
    public function addUser(){
        return view('User.adduser');
    }
    public function added(Request $request){
         $request->validate([ 
            'name'=>'required',
            'address'=>'required',
            'age'=>'required'
        ]);

        $query= DB::table('new_user')->insert([
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'age'=>$request->input('age'),
        ]);

        if($query){
            return back()->with('success',"Users Successfully Added");
        }else{
            return back()->with('error', 'Something is wrong');
        }
    }
    public function delete(Request $request){
        $request->validate([
            'id'=>'required'
        ]);
        $delQuery=PetalsModel::where('id',$request->id)->delete();
        
        if($delQuery){
            return back()->with('success',"Users Deleted Successfully Added");
        }else{
            return back()->with('error', 'Something is wrong');
        }
    }
    public function edit(Request $request){
        // return view('edit')->with('edit',$request)
        $id= $request->id;
        $getInfo = PetalsModel::find($id);
        // if($getInfo){

        // }
        return view('User.edit')->with('data',$getInfo);
    }

    public function post_edit(Request $request){
       $editQuery = PetalsModel::find($request->id)->update(['name'=> $request->name,'address'=>$request->address,'age'=>$request->age]);
       
       if($editQuery){
        return redirect('/alluser')->with('success',"Users Updated Successfully Added");
        }
        else{
        return redirect('/alluser')->with('error', 'Something is wrong');
    }
    }

}
