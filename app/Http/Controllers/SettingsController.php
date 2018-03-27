<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;

class SettingsController extends Controller
{
	public function __construct()
	{
		$this->middleware('admin');
	}

	public function index()
	{
		$settings = Setting::first();

		return view('admin.settings.settings')->with('settings', $settings);
	}

    public function update() //no need to pass in Request, laravel has built in request method
    {
    	$this->validate(request(), [
    		'site_name' => 'required',
    		'contact_number' => 'required',
    		'contact_email' => 'required|email',
    		'address' => 'required'
    	]);

    	$settings = Setting::first();

    	$settings->site_name = request()->site_name;
    	$settings->contact_number = request()->contact_number;
    	$settings->contact_email = request()->contact_email;
    	$settings->address = request()->address;

    	$settings->save();

    	Session::flash('success', 'Settings saved.');

    	return redirect()->back();
    }
}
