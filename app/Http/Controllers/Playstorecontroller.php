<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\App;

class Playstorecontroller extends Controller
{
    public function app_list()
    {
        $data= app::all();
        return view('playstore_utube/app_list',['apps'=>$data]);
    }
    public function create_app()
    {
        $data= app::all();
        return view('playstore_utube/add_app',['apps'=>$data]);
    }
    public function add_app(Request $req)
    {
        $this->validate($req,[
            'name'=> 'required',
            'app_screenshot' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link'=> 'required'
        ]);
        $app= new app;
        $app->name=$req->name;
        if ($req->hasfile('app_screenshot')) {
            $app_screenshot=$req->file('app_screenshot');
            $extention=$app_screenshot->getClientOriginalExtension();
            $filename=time() .'.'. $extention;
            $app_screenshot->move('uploads/apps',$filename);
            $app->app_screenshot=$filename;
        }else{
            return $req;
            $app->app_screenshot='';
        }
        $app->link=$req->link;
        $app->save();
        return redirect('applist')
        ->with('success', 'Product created successfully');;
    }

    public function show_apps($id) {
        $data= app::find($id);
        return view('playstore_utube/update_app',['apps'=>$data]);
        }




    public function edit_apps(Request $req,$id) {
        $app= app::find($id);
        // echo $data;
        // exit;
        $req->validate([
            'name' => 'required',
            'app_screenshot' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'required'
            ]);
            $app->name=$req->name;
            if ($req->hasfile('app_screenshot')) {
                $app_screenshot=$req->file('app_screenshot');
                $extention=$app_screenshot->getClientOriginalExtension();
                $filename=time() .'.'. $extention;
                $app_screenshot->move('uploads/apps',$filename);
                $app->app_screenshot=$filename;
            }else{
                return $req;
                $app->app_screenshot='';
            }
            $app->link=$req->link;
            $app->save();

            return redirect('applist')
            ->with('success', 'app updated successfully');
    }


     public function delete_apps($id)
        {
        $data= app::find($id);
        $data->delete();
        return redirect('applist');
        }
        

}
