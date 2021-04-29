<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Usercontroller extends Controller
{
    public function user_list()
    {
        $data= User::all();
        return view('users/user_list',['users'=>$data]);
    }
    public function add_user(Request $req)
    {
        $this->validate($req,[
            'name'=> 'required',
            'email'=> 'required',
            // 'is_admin'=> 'required',
            'password'=>'required',
            'status'=>'required',
            'profile'=>'required'
        ]);
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->is_admin=0;
        $user->password=Hash::make($req->password);
        $user->status=$req->status;
        if ($req->hasfile('profile')) {
            $profile=$req->file('profile');
            $extention=$profile->getClientOriginalExtension();
            $filename=time() .'.'. $extention;
            $profile->move('uploads/profile',$filename);
            $user->profile=$filename;
        }else{
            return $req;
            $user->profile='';
        }
        $user->save();
        return redirect('userlist')
        ->with('success', 'Product created successfully');
    }
    
    public function show_users($id) { 
        $data= User::find($id);
        return view('users/update_user',['users'=>$data]);
    }
    public function edit_users(Request $req,$id) {
        $user= User::find($id);
        // echo $data;
        // exit;
        $req->validate([
            'name'=> 'required',
            'email'=> 'required',
            // 'is_admin'=> 'required',
            // 'password'=>'required',
            'profile'=>'required'
            ]);
        $user->name=$req->name;
        $user->email=$req->email;
        $user->is_admin=0;
        // $user->password=Hash::make($req->password);
        $user->status=$req->status;
        if ($req->hasfile('profile')) {
            $profile=$req->file('profile');
            $extention=$profile->getClientOriginalExtension();
            $filename=time() .'.'. $extention;
            $profile->move('uploads/profile',$filename);
            $user->profile=$filename;
        }else{
            return $req;
            $user->profile='';
        }
                $user->save();

            return redirect('userlist')
            ->with('success', 'Product updated successfully');
    }

    public function delete_users($id)
    {
       $data= User::find($id);
       $data->delete();
       return redirect('userlist');
    }
}
