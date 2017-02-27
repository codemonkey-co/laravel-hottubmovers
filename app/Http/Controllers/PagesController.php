<?php

namespace App\Http\Controllers;

use App\User;
use App\RenterInfo;
use Illuminate\Http\Request;
use App\Mail\HotTubLead;
use App\Mail\SMSHotTubLead;
use App\Notifications\SendLeadBySMS;

class PagesController extends Controller
{
    public function index() {
        $renter_info = RenterInfo::get()->first();
    	return view('welcome', compact('renter_info'));
    }

    public function register() {
        return view('register');
    }

    public function login() {
        return view('login');
    }

    public function dashboard() {
        $renter_info = RenterInfo::get()->first();
        return view('dashboard', compact('renter_info'));
    }

    public function store() {
        $user = User::create([
            'name' => request('name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
        ]);
    }

    public function storeRenterInfo() {
        $renter_info = RenterInfo::create([
            'rented_by' => request('rented_by'),
            'phone_number' => request('phone_number'),
            'phone_number_show' => request('phone_number_show'),
            'email_address' => request('email_address'),
            'provider' => request('provider'),
            'truck_fee' => request('truck_fee'),
            'per_hour' => request('per_hour'),
            'min_men' => request('min_men'),
            'min_hours' => request('min_hours'),
            'send_email' => request('send_email'),
            'send_sms' => request('send_sms'),
        ]);

        return redirect()->back();
    }

    public function updateRenterInfo() {
        $renter_info = RenterInfo::get()->first()->update([
            'rented_by' => request('rented_by'),
            'phone_number' => request('phone_number'),
            'phone_number_show' => request('phone_number_show'),
            'email_address' => request('email_address'),
            'provider' => request('provider'),
            'truck_fee' => request('truck_fee'),
            'per_hour' => request('per_hour'),
            'min_men' => request('min_men'),
            'min_hours' => request('min_hours'),
            'send_email' => request('send_email'),
            'send_sms' => request('send_sms'),
        ]);

        return redirect()->back();
    }

    public function email() {

        $renter_info = RenterInfo::get()->first();

    	$this->validate(request(), [
    		'name' => 'required',
    		'phone' => 'required',
    		'size' => 'required',
    		'base' => 'required',
    		'fenced' => 'required'
    	]);

    	$input = request()->all();

        if($renter_info->send_email == 'on') {
    	   \Mail::to($renter_info->email_address)->send(new HotTubLead($input));
        }
         if($renter_info->send_sms == 'on') {
            \Mail::to($renter_info->phone_number . '@' . $renter_info->provider)->send(new SMSHotTubLead($input));
        }

    	return redirect('/');
    }
}
