<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\Register\RegisterRule;
use App\Http\Services\Massage\MassageService;
use App\Http\Services\Massage\sms\SmsService;
use App\Models\OtpCode;
use Illuminate\Support\Str;
use App\Models\Reigster;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(RegisterRule $request)
    {

        $input = $request->validated();
        // $input = $request->all();
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'mobile' => $input['mobile'],
            'password' => Hash::make($input['password'])

        ]);
        if ($user) {
            return
                redirect()->route('user.dashboard.index', compact('user'));}
        // } else {
        //     return
        //         redirect()->back()->withErrors(" خطا ");
        // }

        // if($user){
        //     $VerificationCode=rand(11111111,99999999);
        //     $token=str::random(15);
        //     $VerificationInput=[
        //         'token' => $token,
        //         'otp_code' => $VerificationCode,
        //         'user_id' => $user->id ,
        //         'login_id' =>$input['mobile'],
        //     ];
        //     OtpCode::create($VerificationInput);

        //     $SmsService= new SmsService();

        //     $SmsService->setfrom(Config::get('sms.from'));
        //     $SmsService->setmobileNumber(['0',$user->mobile]);
        //     $SmsService->setfooter("کد تایید شما: \n $VerificationCode");
        //     dd('hi');
        //     $MassageService = new MassageService($SmsService);
        //     $MassageService->send();
        //     dd('hi');









    }
}
