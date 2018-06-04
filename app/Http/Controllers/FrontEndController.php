<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\Tag;

class FrontEndController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        $first_category = Category::orderBy('created_at', 'desc')->get()->first();

        

        $second_category = Category::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first();

        // $categories = Category::inRandomOrder()->first();

        // dd($categories);
        
        // dd($second_category);

    	return view('index')
    			->with('title', Setting::first()->site_name)
    			->with('categories', Category::take(6)->get())
    			->with('first_post', Post::orderBy('created_at', 'desc')->first())
    			->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
    			->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
                ->with('fourth_post', Post::orderBy('created_at', 'desc')->skip(3)->take(1)->get()->first())
                ->with('first_category', $first_category)
                ->with('second_category', $second_category)
    			->with('settings', Setting::first());
    }


    public function single_post($slug)
    {
    	$post = Post::where('slug', $slug)->first();


    	$next_id = Post::where('id', '>', $post->id)->min('id');

    	$prev_id = Post::where('id', '<', $post->id)->max('id');

    	return view('single')->with('post', $post)
    						 ->with('title', $post->title)
    						 ->with('categories', Category::take(6)->get())
    						 ->with('settings', Setting::first())
    						 ->with('next', Post::find($next_id))
    						 ->with('prev', Post::find($prev_id))
    						 ->with('tags', Tag::all());
    }


    public function category($id)
    {
        $category = Category::find($id);

        return view('category')->with('category', $category)
                               ->with('title', $category->name)
                               ->with('settings', Setting::first())
                               ->with('categories', Category::take(6)->get());
    }

    public function all_categories()
    {
        $categories = Category::all();

        return view('all_categories')->with('categories', $categories)
                                     ->with('settings', Setting::first())
                                     ->with('categories', Category::take(6)->get());
    }

    // public function posts_by_user($username)
    // {

    //     return view('posts_by_user')->with('')
    // }
}
