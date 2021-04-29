<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Package;
use App\Models\Product;

class PackageController extends Controller
{
    public function Package_list()
    {
        $data= Package::all();
        return view('packages/package_list',['packages'=>$data]);
    }
    public function create_Package()
    {
        $data= Package::all();
        return view('packages/add_package',['packages'=>$data]);
    }
    public function add_package(Request $req)
    {
        $this->validate($req,[
            'name'=> 'required',
            'days'=> 'required',
            'price'=> 'required',
            'ROI_persentage'=> 'required',
            'binary_persentage'=>'required'
        ]);
        $package= new Package;
        $package->name=$req->name;
        $package->days=$req->days;
        $package->price=$req->price;
        $package->ROI_persentage=$req->ROI_persentage;
        $package->binary_persentage=$req->binary_persentage;
        // $package->created_at=$req->created_at;
        // $package->updated_at=$req->updated_at;
        $package->save();
        return redirect('packagelist')
        ->with('success', 'Product created successfully');;
    }

    public function show_packages($id) {
        $data= Package::find($id);
        return view('packages/update_package',['packages'=>$data]);
        }




        public function edit_packages(Request $req,$id) {
            $package= Package::find($id);
            // echo $data;
            // exit;
            $req->validate([
                'name' => 'required',
                'days' => 'required',
                'price' => 'required',
                'ROI_persentage' => 'required',
                'binary_persentage' => 'required'
                ]);
                $package->name=$req->name;
                $package->days=$req->days;
                $package->price=$req->price;
                $package->ROI_persentage=$req->ROI_persentage;
                $package->binary_persentage=$req->binary_persentage;
                // $package->created_at=$req->created_at;
                // $package->updated_at=$req->updated_at;
                $package->save();

                return redirect('packagelist')
                ->with('success', 'Package updated successfully');
        }







    public function delete_packages($id)
    {
       $data= Package::find($id);
       $data->delete();
       return redirect('packagelist');
    }
}
