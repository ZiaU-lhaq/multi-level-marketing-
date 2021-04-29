<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Package;
use App\Models\App;
use App\Models\Video;

class UserPackageController extends Controller
{
    public function Package_list_user()
    {
        $data= Package::all();
        return view('user_packages/package_list',['packages'=>$data]);
    }
    public function not_allowed()
    {
        $data= Package::all();
        return view('user_packages/not_allowed',['packages'=>$data]);
    }
    public function payment_form()
    {
        $data= Package::all();
        return view('user_packages/payment_form',['packages'=>$data]);
    }
    public function app_list_user()
    {
        $data= App::all();
        return view('user_packages/app_list',['apps'=>$data]);
    }
    public function video_list_user()
    {
        $data= Video::all();
        return view('user_packages/video_list',['videos'=>$data]);
    }
    
    public function download()
    {
    	$filePath = public_path("uploads/profile/1618486005.jpg");
    	$headers = ['Content-Type: application/jpg'];
    	$fileName = time().'.jpg';

    	return response()->download($filePath, $fileName, $headers);
        // return redirect()->action([UserpackageController::class, 'countdownload']);
    }
    
}
