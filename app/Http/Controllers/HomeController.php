<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use App\Category;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard')
        		->with('post_count', Post::all()->count())
        		->with('trashed_count', Post::onlyTrashed()->get()->count())
        		->with('users_count', User::all()->count())
        		->with('categories_count', Category::all()->count())
        		->with('trashed_users', User::onlyTrashed()->get()->count());
    }
}
