<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Admincontroller extends Controller
{
    public function admin_list()
    {
        $data= User::all();
        return view('admins/admin_list',['admins'=>$data]);
    }
    public function add_admin(Request $req)
    {
        $this->validate($req,[
            'name'=> 'required',
            'email'=> 'required|email',
            // 'is_admin'=> 'required',
            'password'=>'required',
            'profile'=>'required'
        ]);
        $admin= new User;
        $admin->name=$req->name;
        $admin->email=$req->email;
        // $admin->email_verified_at=$req->email_verified_at;
        $admin->is_admin=1;
        $admin->password=Hash::make($req->password);
        if ($req->hasfile('profile')) {
            $profile=$req->file('profile');
            $extention=$profile->getClientOriginalExtension();
            $filename=time() .'.'. $extention;
            $profile->move('uploads/profile',$filename);
            $admin->profile=$filename;
        }else{
            return $req;
            $admin->profile='';
        }
        // $admin->created_at=$req->created_at;
        // $admin->updated_at=$req->updated_at;
        $admin->save();
        return redirect('adminlist')
        ->with('success', 'Product created successfully');;
    }

    public function show_admins($id) {
        $data= User::find($id);
        return view('admins/update_admin',['admins'=>$data]);
        }
        public function edit_admins(Request $req,$id) {
            $admin= User::find($id);
            // echo $data;
            // exit;
            $req->validate([
                'name'=> 'required',
                'email'=> 'required',
                // 'is_admin'=> 'required',
                // 'password'=>'required',
                'profile'=>'required'
                ]);
            $admin->name=$req->name;
            $admin->email=$req->email;
            $admin->is_admin=1;
            // $admin->password=Hash::make($req->password);
            if ($req->hasfile('profile')) {
                $profile=$req->file('profile');
                $extention=$profile->getClientOriginalExtension();
                $filename=time() .'.'. $extention;
                $profile->move('uploads/profile',$filename);
                $admin->profile=$filename;
            }else{
                return $req;
                $admin->profile='';
            }
                    $admin->save();

                return redirect('adminlist')
                ->with('success', 'Product updated successfully');
        }

    public function delete_admins($id)
    {
       $data= User::find($id);
       $data->delete();
       return redirect('adminlist');
    }
}
