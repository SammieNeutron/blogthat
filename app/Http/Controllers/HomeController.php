<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use App\Category;
use App\Tag;

use Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = Auth::user();

        // $post = Post::all();

        // $user = $post->user_id;

        // dd($user);

        return view('admin.dashboard')
        		->with('post_count', Post::all()->count())
        		->with('trashed_count', Post::onlyTrashed()->get()->count())
        		->with('users_count', User::all()->count())
        		->with('categories_count', Category::all()->count())
        		->with('trashed_users', User::onlyTrashed()->get()->count())
                ->with('tags_count', Tag::all()->count());
    }
}
