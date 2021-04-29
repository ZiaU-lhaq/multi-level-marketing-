<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CaptchaServiceController extends Controller
{
    public function index()
    {
        return view('user_packages/captcha');
    }

    public function capthcaFormValidate(Request $request)
    {
        $request->validate([
            'captcha' => 'required|captcha'
        ]);
        return redirect('Captcha')
                ->with('success', 'captcha done successfully Rs.5 added to your account');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

}