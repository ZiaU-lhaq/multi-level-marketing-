<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class Transactioncontroller extends Controller
{
    public function transaction_list()
    {
        $data= Transaction::all();
        return view('transactions/transaction_list',['transactions'=>$data]);
    }
    public function transaction_list_user()
    {
        $data= Transaction::all();
        return view('user_packages/transection_list_users',['transactions'=>$data]);
    }
    public function show_transactions_form() { 
        $data= Transaction::all();
        return view('user_packages/transactions_form',['transactions'=>$data]);
    //     if (auth()->user()->status=='approved') {
    //         return $next($request);
    //  }else {
    //      return redirect('home')->with('error','you can not access to this page');
    //  }
    }
    public function add_transaction(Request $req)
    {
        $this->validate($req,[
            'name'=> 'required',
            'email'=> 'required',
            'user_id'=> 'required',
            'account_number'=> 'required',
            'trx_id'=>'required',
            'screenshot' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contact'=>'required',
            'message'=>'required'
        ]);
        $transaction= new Transaction;
        $transaction->name=$req->name;
        $transaction->email=$req->email;
        $transaction->user_id=$req->user_id;
        $transaction->account_number=$req->account_number;
        $transaction->trx_id=$req->trx_id;

        if ($req->hasfile('screenshot')) {
            $screenshot=$req->file('screenshot');
            $extention=$screenshot->getClientOriginalExtension();
            $filename=time() .'.'. $extention;
            $screenshot->move('uploads/transection',$filename);
            $transaction->screenshot=$filename;
        }else{
            return $req;
            $transaction->screenshot='';
        }

        // $transaction->screenshot=$req->screenshot;
        $transaction->contact=$req->contact;
        $transaction->message=$req->message;
        $transaction->save();
    //     if (auth()->user()->status=='approved') {
    //         return $next($request);
    //  }else {
    //      return redirect('home')->with('error','you can not access to this page');
    //     }
        return redirect('packagelistusers')
        ->with('success', 'transaction created successfully we will contact you with in 24 hours');
    }
}
