<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class formController extends Controller
{
    public function fileView(){
        $user = User::all();

        return view("form",[
            "user"=> $user,
        ]);
    }

    public function registrationView(Request $request){
        $request->validate([
            "name" => "required",
            "email"=> "required|unique:users",
            "password"=> "required|same:password_conformation",
            "password_conformation" => "required"
        ]);
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();

        return redirect()->back();
    }

    public function deleteView($id){

        $data = User::find($id)->delete();
        return redirect()->back();
    }

    public function EditUser($id){
        $data = User::find($id);
        return view('UserEdit', ["edit" => $data,]);
    }

    public function UpdateUser(Request $request,$id){
        $request->validate([
            "name" => "required",
            "email"=> "required",
            "password"=> "required|same:password_conformation",
            "password_conformation" => "required"
        ]);

        $user = User::find($id);
        $user->name = $request->get("name");
        $user->email = $request->get('email');
        if($request->get('password') != ''){
            $user->password = Hash::make($request->get('password'));
        }
        $user->save();

        return redirect()->route('FileView');

    }

}
