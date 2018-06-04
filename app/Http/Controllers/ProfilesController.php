<?php

namespace App\Http\Controllers;

use JD\Cloudder\Facades\Cloudder;
use Illuminate\Http\Request;

use Auth;
use Session;

use App\Profile;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        return view('admin.users.profile')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'facebook' => 'required|url',
            'youtube' => 'required|url',
            
        ]);

        if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;

            $avatar_new_name = time().$avatar->getClientOriginalName();

            Cloudder::upload($avatar, null);

            list($width, $height) = getimagesize($avatar);

            $avatar_url = Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height" => $height]);

            $this->saveProfile($request, $avatar_url);

            // $avatar->move('uploads/avatars', $avatar_new_name);
        }


        // $user->name = $request->name;

        // $user->email = $request->email;

        // $user->profile->facebook = $request->facebook;

        // $user->profile->youtube = $request->youtube;
        
        // $user->profile->about = $request->about;

        // $user->save();

        // $user->profile->save();

        $user = Auth::user();

        if($request->has('password'))
        {
            $user->password = bcrypt($request->password);
        }


        Session::flash('success', 'Account profile updated successfully.');

        return redirect()->back();
    }

    public function saveProfile(Request $request, $avatar_url)
    {

        $user = Auth::user(); //gets the authenticated user

        $avatar = $request->avatar;

        $avatar_new_name = time().$avatar->getClientOriginalName();

        $profile = new Profile();

        $user->name = $request->name;

        $user->email = $request->email;

        $user->profile->facebook = $request->facebook;

        $user->profile->youtube = $request->youtube;
        
        $user->profile->about = $request->about;

        $user->profile['avatar'] = 'uploads/avatars/'.$avatar_new_name;

        $user->profile->avatar_url = $avatar_url;

        $user->save();

        $user->profile->save();

        

        // $user->profile->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
