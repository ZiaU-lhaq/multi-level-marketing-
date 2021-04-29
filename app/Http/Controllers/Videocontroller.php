<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;

class Videocontroller extends Controller
{
    public function video_list()
    {
        $data= video::all();
        return view('playstore_utube/video_list',['videos'=>$data]);
    }
    public function create_video()
    {
        $data= video::all();
        return view('playstore_utube/add_video',['videos'=>$data]);
    }
    public function add_video(Request $req)
    {
        $this->validate($req,[
            'name'=> 'required',
            'description' => 'required',
            'link'=> 'required'
        ]);
        $video= new video;
        $video->name=$req->name;
        $video->description=$req->description;
        $video->link=$req->link;
        $video->save();
        return redirect('videolist')
        ->with('success', 'Product created successfully');;
    }

    public function show_videos($id) {
        $data= video::find($id);
        return view('playstore_utube/update_video',['videos'=>$data]);
        }




    public function edit_videos(Request $req,$id) {
        $video= video::find($id);
        // echo $data;
        // exit;
        $req->validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required'
            ]);
            $video->name=$req->name;
            $video->description=$req->description;
            $video->link=$req->link;
            $video->save();

            return redirect('videolist')
            ->with('success', 'video updated successfully');
    }


     public function delete_videos($id)
        {
        $data= video::find($id);
        $data->delete();
        return redirect('videolist');
        }
        

}
 